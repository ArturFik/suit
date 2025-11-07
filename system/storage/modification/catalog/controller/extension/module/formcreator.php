
<?php
class ControllerExtensionModuleFormcreator extends Controller{
	
	// Подключаем конфигурацию
	public function __construct($registry) {
		parent::__construct($registry);
		require_once(DIR_APPLICATION . 'controller/extension/module/formcreator_config.php');
	}
	

            // Путь до папки с файлами
            private $path = DIR_IMAGE . 'oplim/';
            // Разрешенные расширения файлов.
            private $allow = array("pdf", "doc", "jpg");
            // Запрещенные расширения файлов.
            private $deny = array('phtml', 'php', 'php3', 'php4', 'php5', 'php6', 'php7', 'phps', 'cgi', 'pl', 'asp', 'aspx', 'shtml', 'shtm', 'htaccess', 'htpasswd', 'ini', 'log', 'sh', 'js', 'html', 'htm', 'css', 'sql', 'spl', 'scgi', 'fcgi', 'exe');
            // Проверка файла, без загрузки -->
            public function infoFileUpload() {
                // Название <input type="file">
                $input_name = 'file';

                $error = $success = '';
                if (!isset($_FILES[$input_name])) {
                    $error = 'Файл не загружен.';
                } else {
                    $file = $_FILES[$input_name];

                    // Проверим на ошибки загрузки.
                    if (!empty($file['error']) || empty($file['tmp_name'])) {
                        $error = 'Не удалось загрузить файл.';
                    } elseif ($file['tmp_name'] == 'none' || !is_uploaded_file($file['tmp_name'])) {
                        $error = 'Не удалось загрузить файл.';
                    } else {
                        // Оставляем в имени файла только буквы, цифры и некоторые символы.
                        $pattern = "[^a-zа-яё0-9,~!@#%^-_\$\?\(\)\{\}\[\]\.]";
                        $name = mb_eregi_replace($pattern, '-', $file['name']);
                        $name = mb_ereg_replace('[-]+', '-', $name);
                        $parts = pathinfo($name);

                        if (empty($name) || empty($parts['extension'])) {
                            $error = 'Недопустимый тип файла';
                        } elseif (!empty($this->allow) && !in_array(strtolower($parts['extension']), $this->allow)) {
                            $error = 'Недопустимый тип файла';
                        } elseif (!empty($this->deny) && in_array(strtolower($parts['extension']), $this->deny)) {
                            $error = 'Недопустимый тип файла';
                        } 
                        elseif($file['size'] > 10485760){
                            $error = 'Файл слишком большой';
                        }
                    }
                }

                // Вывод сообщения о результате загрузки.
                if (!empty($error)) {
                    $error = '<p style="color: red">' . $error . '</p>';
                }
                if (!empty($name)) {
                    $name = '<p style="color: green">' . $name . '</p>';
                }

                $data = array(
                    'name'       => $name,
                    'error'      => $error,
                );

                $this->response->addHeader('Content-Type: application/json');
                $this->response->setOutput(json_encode($data));

            }
            // Загрузка файла -->
            public function uploadFile() {
                // Название <input type="file">
                $input_name = 'file';

                $error = $success = '';
                if (!isset($_FILES[$input_name])) {
                    $error = 'Файл не загружен.';
                } else {
                    $file = $_FILES[$input_name];

                    // Проверим на ошибки загрузки.
                    if (!empty($file['error']) || empty($file['tmp_name'])) {
                        $error = 'Не удалось загрузить файл.';
                    } elseif ($file['tmp_name'] == 'none' || !is_uploaded_file($file['tmp_name'])) {
                        $error = 'Не удалось загрузить файл.';
                    } else {
                        // Оставляем в имени файла только буквы, цифры и некоторые символы.
                        $pattern = "[^a-zа-яё0-9,~!@#%^-_\$\?\(\)\{\}\[\]\.]";
                        $name = mb_eregi_replace($pattern, '-', $file['name']);
                        $name = mb_ereg_replace('[-]+', '-', $name);
                        $parts = pathinfo($name);

                        if (empty($name) || empty($parts['extension'])) {
                            $error = 'Недопустимый тип файла';
                        } elseif (!empty($this->allow) && !in_array(strtolower($parts['extension']), $this->allow)) {
                            $error = 'Недопустимый тип файла';
                        } elseif (!empty($this->deny) && in_array(strtolower($parts['extension']), $this->deny)) {
                            $error = 'Недопустимый тип файла';
                        } 
                        elseif($file['size'] > 10485760){
                            $error = 'Файл слишком большой';
                        }
                        else {
                            // Перемещаем файл в директорию.
                            if (move_uploaded_file($file['tmp_name'], $this->path . $name)) {
                                // $this->load->model('tool/image');

                                if ($this->request->server['HTTPS']) {
                                    $file_image = $this->config->get('config_ssl').'image/oplim/'.$name;
                                } else {
                                    $file_image = $this->config->get('config_url').'image/oplim/'.$name;
                                }
                                // Далее можно сохранить название файла в БД и т.п.
                                $success = '<p style="color: green">Файл «' . $name . '» успешно загружен.</p>';
                            } else {
                                $error = 'Не удалось загрузить файл.';
                            }
                        }
                    }
                }

                // Вывод сообщения о результате загрузки.
                if (!empty($error)) {
                    $error = '<p style="color: red">' . $error . '</p>';
                }

                $data = array(
                    'error'      => $error,
                    'success'    => $success,
                    'file_image' => $file_image ? $file_image : ''
                );

                $this->response->addHeader('Content-Type: application/json');
                $this->response->setOutput(json_encode($data));

            }
            
	public function index($setting) {
		$this->load->language('extension/module/formcreator');

		$data['button_text'] = $this->language->get('button_text');
		$data['button_send'] = $this->language->get('button_send');
		
		$data['entry_name'] = $this->language->get('entry_name');
		$data['entry_phone'] = $this->language->get('entry_phone');
		$data['entry_email'] = $this->language->get('entry_email');
		$data['enntry_text'] = $this->language->get('enntry_text');
		
		if (isset($setting['module_id'])){
			$data['module_id'] = $setting['module_id'];
		} else {
			$data['module_id'] = rand(10000, 99999);
		}

		$this->form_id = $data['module_id'];
		
		$fields = $setting['formcreator_field'];

			if ($setting['form_name'][$this->config->get('config_language_id')]){
				
            $data['module_name'] = html_entity_decode($setting['form_name'][$this->config->get('config_language_id')], ENT_QUOTES, 'UTF-8');
            
			} else {
				$data['module_name'] = $setting['name'];
			}	

			if (isset($setting['formcreator_modal'])) {
				$data['button_name'] = $setting['modal_button'][$this->config->get('config_language_id')];
			}

			if (isset($setting['formcreator_email'])&&filter_var($setting['formcreator_email'], FILTER_VALIDATE_EMAIL)) {	
				$this->session->data['formcreator_email'] = $setting['formcreator_email'];
			} else {
				$this->session->data['formcreator_email'] = $this->config->get('config_email');
			}


			if ($setting['form_success'][$this->config->get('config_language_id')]){
				$data['form_success'] = $setting['form_success'][$this->config->get('config_language_id')];
			} else {
				$data['form_success'] = $this->language->get('text_succes');
			}

		if (isset($fields)) {	
			foreach ($fields as $field) {
				if (!isset($field['field_status'])) {
					$field['field_status'] = 0;
				}
				if (!isset($field['required'])) {
					$field['required'] = 0;
				}
				if (!isset($field['option'])) {
					$field['option'][$this->config->get('config_language_id')] = 0;
				} else {
					$field['option'][$this->config->get('config_language_id')] = explode(':', $field['option'][$this->config->get('config_language_id')]);
				}
				$data['fields'][] = array(
					
            'name' => html_entity_decode($field['name'][$this->config->get('config_language_id')], ENT_QUOTES, 'UTF-8'),
            
					'type' => $field['type'],
					'field_status' => $field['field_status'],
					'required' => $field['required'],
					'option' => $field['option'][$this->config->get('config_language_id')],
				);
			}
		}
		
		$data['domain'] = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];

		    if($setting['module_id'] == 41){
                $data['terms_contact_form'] = sprintf($this->language->get('text_terms_contact_form_n'), $this->url->link('information/information', 'information_id=3'));
            }
            isset($setting['formcreator_modal']) ? $modal = 'modal_' : $modal = '';		
            if(is_file(DIR_TEMPLATE.'default/template/'.'extension/module/formcreator_'.$modal.$setting['module_id'].'.twig')){
                return $this->load->view('extension/module/formcreator_'.$modal.$setting['module_id'], $data);
            }
            

		if (isset($setting['formcreator_modal'])) {
				return $this->load->view('extension/module/formcreator_modal', $data);
		} else {
				return $this->load->view('extension/module/formcreator', $data);
		}
	}

	public function send() {
		
		$this->load->language('extension/module/formcreator');
		
		$json = array();
		$contacts = array();
		$preferred_channel = 'email';
	
		if ($this->request->server['REQUEST_METHOD'] == 'POST') {
		
			$feedback_options = array(
				'module_name' => $this->request->post['module_name'],
				'module_id' => $this->request->post['module_id'],
				'page_link'   =>  $this->request->post['link_page'],
				);
			$form_success = $this->request->post['form_success'];

			$json = $this->validate($this->request->post);
		   	
			if (!isset($json['error'])) {
				$json = $this->request->post;
				if (!isset($json['form_input']) || !is_array($json['form_input'])) {
					$json['form_input'] = array();
				}
				$contacts = $this->extractContactFields($json['form_input']);
				if (defined('DEBUG_LOG') && DEBUG_LOG) {
					error_log('[formcreator] contacts: ' . print_r($contacts, true));
				}
				$json['email_sent'] = false;
				$json['email_error'] = '';
				$json['recipient_email'] = isset($contacts['email']) ? $contacts['email'] : '';
				$json['recipient_name'] = isset($contacts['name']) ? $contacts['name'] : '';
				$json['debug_contacts'] = $contacts;
				$json['recipient_phone'] = isset($contacts['phone']) ? $contacts['phone'] : '';
				foreach ($json['form_input'] as $key_fields => $fields) {
					$json['form_input'][$key_fields] = array();

					foreach ($fields as $key_text => $text) {
						$key_text = str_replace("'", "&#039;", $key_text);
						$text = str_replace("'", "&#039;", $text);

            if($text == 'file'){
                $file_name = str_replace("C:\\fakepath\\", "", $json['form_input_file_hidden']);
                if(!empty($file_name)){
                    if ($this->request->server['HTTPS']) {
                        $text = $this->config->get('config_ssl').'image/oplim/' . $file_name;
                    } else {
                        $text = $this->config->get('config_url').'image/oplim/' . $file_name;
                    }
                }else{
                    $text = "Без файла";
                }							
            }           
            
						$json['form_input'][$key_fields][$key_text] = $text;
					}
				}

				$preferred_channel = $this->detectPreferredChannel($json['form_input']);
				$json['preferred_channel'] = $preferred_channel;
			
				// Сохраняем данные формы в базу
				$this->load->model('extension/module/formcreator');
				$this->model_extension_module_formcreator->addFeedback($json, $feedback_options);
				
				// Проверяем, есть ли загруженный файл
				$uploaded_file = null;
				if (isset($_FILES['form_input_file']) && $_FILES['form_input_file']['error'] == 0) {
					$uploaded_file = $_FILES['form_input_file'];
				}

				// Если есть файл, отправляем его в Python API
				if ($uploaded_file) {
					$python_api_response = $this->sendFileToPythonAPI($uploaded_file, $json['form_input'], $feedback_options, $contacts, $preferred_channel);
					
					if ($python_api_response && isset($python_api_response['success']) && $python_api_response['success']) {
						// Успешно обработано Python API
						if ($preferred_channel !== 'telegram') {
							$this->sendEmailWithPythonResults($json, $feedback_options, $python_api_response);
						}
						$json['success'] = $form_success;
						$json['telegram_link'] = $python_api_response['telegram_deeplink'];
						if (isset($python_api_response['ttl_seconds'])) {
							$json['ttl_seconds'] = $python_api_response['ttl_seconds'];
						}
						if (isset($python_api_response['invoice_id'])) {
							$json['invoice_id'] = $python_api_response['invoice_id'];
						}
						$json['email_sent'] = isset($python_api_response['email_sent']) ? (bool)$python_api_response['email_sent'] : false;
						$json['email_error'] = isset($python_api_response['email_error']) ? $python_api_response['email_error'] : '';
						if ($preferred_channel === 'telegram') {
							$json['email_sent'] = false;
							$json['email_error'] = '';
						}
						if (isset($python_api_response['recipient_email']) && $python_api_response['recipient_email']) {
							$json['recipient_email'] = $python_api_response['recipient_email'];
						}
						if (isset($python_api_response['recipient_name']) && $python_api_response['recipient_name']) {
							$json['recipient_name'] = $python_api_response['recipient_name'];
						}
						if (isset($python_api_response['recipient_phone']) && $python_api_response['recipient_phone']) {
							$json['recipient_phone'] = $python_api_response['recipient_phone'];
						}
						if (isset($python_api_response['notification_channel']) && $python_api_response['notification_channel']) {
							$json['notification_channel'] = $python_api_response['notification_channel'];
						}
						if (isset($python_api_response['debug']) && is_array($python_api_response['debug'])) {
							$json['debug_python'] = $python_api_response['debug'];
						}
					} else {
						// Ошибка обработки Python API
						$json['error'] = 'Ошибка обработки файла: ' . (isset($python_api_response['error']) ? $python_api_response['error'] : 'Неизвестная ошибка');
					}
				} else {
					// Нет файла, отправляем уведомление в зависимости от канала
					if ($preferred_channel !== 'telegram') {
						$this->sendRegularEmail($json, $feedback_options);
						$json['email_sent'] = true;
						$json['email_error'] = '';
					} else {
						$json['email_sent'] = false;
						$json['email_error'] = '';
					}
					$json['success'] = $form_success;
				}
			}
		}

		if (!isset($json['recipient_email']) || !$json['recipient_email']) {
			if (!empty($contacts['email'])) {
				$json['recipient_email'] = $contacts['email'];
			}
		}
		if (!isset($json['recipient_phone']) || !$json['recipient_phone']) {
			if (!empty($contacts['phone'])) {
				$json['recipient_phone'] = $contacts['phone'];
			}
		}
		if (!isset($json['recipient_name']) || !$json['recipient_name']) {
			if (!empty($contacts['name'])) {
				$json['recipient_name'] = $contacts['name'];
			}
		}
		if (!isset($json['notification_channel']) || !$json['notification_channel']) {
			$json['notification_channel'] = $preferred_channel;
		}

		if (!isset($json['debug_contacts'])) {
			$json['debug_contacts'] = $contacts;
		}

		if (defined('DEBUG_LOG') && DEBUG_LOG) {
			error_log('[formcreator] response: ' . json_encode($json, JSON_UNESCAPED_UNICODE));
		}

		$this->response->setOutput(json_encode($json));
	}


	public function validate($results){
		$this->load->language('extension/module/formcreator');
		$text_error_send = $this->language->get('error_send');
		$out = array();

			$form = $results['form_input'];
    		foreach ($form as $form_box) {
    			if ( isset($form_box['required']) && $form_box['required'] == 'input') {
	    			foreach ($form_box as $name => $value) {
						if ($name != 'required'){
	    					if ((utf8_strlen($value) < 3) || (utf8_strlen($value) > 32)) {
	    						$out['error'] = $text_error_send;
	    					}
	    				}
	    			}
    			}
    		}

    		$form = $results['form_input'];
    		foreach ($form as $form_box) {
    			if ( isset($form_box['required']) && $form_box['required'] == 'textarea') {
	    			foreach ($form_box as $name => $value) {
	    				
						if ($name != 'required'){
	    					if ((utf8_strlen($value) < 5) || (utf8_strlen($value) > 10000)) {
	    						$out['error'] = $text_error_send;
	    					}
	    				}
    				}
    			}
    		}

    		$form = $results['form_input'];
    		foreach ($form as $form_box) {
    			if ( isset($form_box['required']) && $form_box['required'] == 'radio') {
					if (count($form_box) == 1){
    						$out['error'] = $text_error_send;
    				}
    			}
    		}

    		$form = $results['form_input'];
    		foreach ($form as $form_box) {
    			if ( isset($form_box['required']) && $form_box['required'] == 'checkbox') {
					if (count($form_box) == 1){
    						$out['error'] = $text_error_send;
    				}
    			}
    		}

    	return $out;
 }
 
 private function normalizeText($text) {
  return mb_strtolower(trim((string)$text), 'UTF-8');
 }
 
 private function stringifyValue($value) {
  if (is_array($value)) {
   $parts = array();
   foreach ($value as $item) {
    $stringItem = $this->stringifyValue($item);
    if ($stringItem !== '') {
    	$parts[] = $stringItem;
    }
   }
   return implode(', ', $parts);
  }
  return trim((string)$value);
 }
 
 private function keyContainsAny($needle, array $keywords) {
		foreach ($keywords as $keyword) {
			if ($keyword !== '' && mb_strpos($needle, $keyword, 0, 'UTF-8') !== false) {
				return true;
			}
		}
		return false;
	}

	private function looksLikePhone($value) {
		$digits = preg_replace('/[^0-9]+/', '', (string)$value);
		return strlen($digits) >= 7;
	}

	private function fillContactValue($key, $value, array &$result, array $emailKeywords, array $phoneKeywords, array $nameKeywords, $emailPattern) {
		if ($key === 'required') {
			return;
		}

		if (is_array($value)) {
			foreach ($value as $innerKey => $innerValue) {
				$this->fillContactValue($innerKey, $innerValue, $result, $emailKeywords, $phoneKeywords, $nameKeywords, $emailPattern);
				if ($result['email'] !== null && $result['phone'] !== null && $result['name'] !== null) {
					return;
				}
			}
			return;
		}

		$normalizedKey = $this->normalizeText($key);
		$stringValue = $this->stringifyValue($value);
		if ($stringValue === '') {
			return;
		}

		if ($result['email'] === null) {
			if ($this->keyContainsAny($normalizedKey, $emailKeywords) || preg_match($emailPattern, $stringValue)) {
				$result['email'] = $stringValue;
			}
		}

		if ($result['phone'] === null) {
			if ($this->keyContainsAny($normalizedKey, $phoneKeywords) || $this->looksLikePhone($stringValue)) {
				$result['phone'] = $stringValue;
			}
		}

		if ($result['name'] === null && $this->keyContainsAny($normalizedKey, $nameKeywords)) {
			$result['name'] = $stringValue;
		}
	}

	private function detectPreferredChannel($formInput) {
		$channel = 'email';
		if (!is_array($formInput)) {
			return $channel;
		}
		foreach ($formInput as $block) {
			if (!is_array($block)) {
				continue;
			}
			foreach ($block as $key => $value) {
				if ($key === 'required') {
					continue;
				}
				if (is_array($value)) {
					$value = implode(' ', $value);
				}
				$normalized = mb_strtolower((string)$value, 'UTF-8');
				if (strpos($normalized, 'tg') !== false || strpos($normalized, 'телег') !== false || strpos($normalized, 'telegram') !== false) {
					return 'telegram';
				}
			}
		}
		return $channel;
	}
	
	private function extractContactFields($formInput) {
		$result = array('email' => null, 'phone' => null, 'name' => null);

		if (isset($this->request->post['customer_email'])) {
			$emailCandidate = trim((string)$this->request->post['customer_email']);
			if ($emailCandidate !== '') {
				$result['email'] = $emailCandidate;
			}
		}
		if (isset($this->request->post['customer_phone'])) {
			$phoneCandidate = trim((string)$this->request->post['customer_phone']);
			if ($phoneCandidate !== '') {
				$result['phone'] = $phoneCandidate;
			}
		}
		if (isset($this->request->post['customer_name'])) {
			$nameCandidate = trim((string)$this->request->post['customer_name']);
			if ($nameCandidate !== '') {
				$result['name'] = $nameCandidate;
			}
		}

		if (!is_array($formInput)) {
			$formInput = array();
		}

		$emailPattern = '/^[A-Z0-9._%+\-]+@[A-Z0-9.\-]+\.[A-Z]{2,}$/i';
		$emailKeywords = array('email', 'e-mail', 'почт', 'mail');
		$phoneKeywords = array('тел', 'phone', 'моб', 'whats', 'ватс', 'wa');
		$nameKeywords  = array('имя', 'name', 'контакт', 'фам', 'представитель', 'contact');

		foreach ($formInput as $key => $value) {
			$this->fillContactValue($key, $value, $result, $emailKeywords, $phoneKeywords, $nameKeywords, $emailPattern);
			if ($result['email'] !== null && $result['phone'] !== null && $result['name'] !== null) {
				break;
			}
		}

		if ($result['email'] === null || $result['phone'] === null || $result['name'] === null) {
			foreach ($this->request->post as $key => $value) {
				if ($key === 'form_input') {
					continue;
				}
				$this->fillContactValue($key, $value, $result, $emailKeywords, $phoneKeywords, $nameKeywords, $emailPattern);
				if ($result['email'] !== null && $result['phone'] !== null && $result['name'] !== null) {
					break;
				}
			}
		}

		return $result;
	}
 
 /**
  * Отправка файла в Python API для обработки
  */
 private function sendFileToPythonAPI($file, array $formInput, array $feedback_options, array $contacts, $preferred_channel) {
		// URL Python API из конфигурации
		$python_api_url = PYTHON_API_URL;
		
		// Проверяем, что файл существует и не пустой
		if (!file_exists($file['tmp_name']) || $file['size'] == 0) {
			return array('success' => false, 'error' => 'Файл не найден или пустой');
		}
		
		// Проверяем размер файла
		if ($file['size'] > MAX_FILE_SIZE) {
			return array('success' => false, 'error' => 'Файл слишком большой (максимум ' . (MAX_FILE_SIZE / (1024*1024)) . 'MB)');
		}
		
		// Проверяем тип файла
		if (!in_array($file['type'], ALLOWED_FILE_TYPES)) {
			$allowed_extensions = implode(', ', ALLOWED_FILE_EXTENSIONS);
			return array('success' => false, 'error' => 'Неподдерживаемый тип файла. Разрешены: ' . $allowed_extensions);
		}
		
		// Подготавливаем данные для отправки
		$form_payload = json_encode($formInput, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
		if ($form_payload === false) {
			$form_payload = '';
		}
	
		$post_data = array(
			'file' => new CURLFile($file['tmp_name'], $file['type'], $file['name']),
			'module_name' => isset($feedback_options['module_name']) ? $feedback_options['module_name'] : '',
			'module_id' => isset($feedback_options['module_id']) ? $feedback_options['module_id'] : '',
			'form_payload' => $form_payload,
			'preferred_channel' => $preferred_channel
		);
	
		if (!empty($contacts['email'])) {
			$post_data['customer_email'] = $contacts['email'];
		}
		if (!empty($contacts['name'])) {
			$post_data['customer_name'] = $contacts['name'];
		}
		if (!empty($contacts['phone'])) {
			$post_data['customer_phone'] = $contacts['phone'];
		}
		
		// Настраиваем cURL
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $python_api_url);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_TIMEOUT, PYTHON_API_TIMEOUT);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, PYTHON_API_CONNECT_TIMEOUT);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
			'User-Agent: OpenCart-FormCreator/1.0'
		));
		
		// Выполняем запрос
		$response = curl_exec($ch);
		$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		$curl_error = curl_error($ch);
		curl_close($ch);
		
		// Обрабатываем ответ
		if ($curl_error) {
			return array('success' => false, 'error' => 'Ошибка соединения: ' . $curl_error);
		}
		
		if ($http_code !== 200) {
			return array('success' => false, 'error' => 'HTTP ошибка: ' . $http_code . ', ответ: ' . $response);
		}
		
		$decoded_response = json_decode($response, true);
		if (json_last_error() !== JSON_ERROR_NONE) {
			return array('success' => false, 'error' => 'Ошибка парсинга ответа: ' . json_last_error_msg());
		}
		
		// Проверяем успешность ответа
		if (isset($decoded_response['invoice_id']) && isset($decoded_response['telegram_deeplink'])) {
			$decoded_response['success'] = true;
			return $decoded_response;
		} else {
			return array('success' => false, 'error' => 'Неполный ответ от API');
		}
	}

	/**
	 * Отправка email с результатами обработки Python API
	 */
	private function sendEmailWithPythonResults($json, $feedback_options, $python_api_response) {
		$link_page = $this->request->post['link_page'] . "\n\n";
		
		// Подготавливаем данные формы для email
		$forms_tomail = '';
		$form = $json['form_input'];
		foreach ($form as $form_box) {
			foreach ($form_box as $name => $value) {
				if ($name != 'required') {
					if (is_array($value)) {
						$forms_tomail .= $name . ': ' . implode(", ", $value) . "\n\n";
					} else {
						$forms_tomail .= $name . ': ' . $value . "\n\n";
					}
				}
			}
		}
		
		// Создаем текст письма с результатами Python API
		$email_text = html_entity_decode($forms_tomail)
			. html_entity_decode($this->language->get('button_text') . ': ' . $feedback_options['module_name'], ENT_QUOTES, 'UTF-8')
			. html_entity_decode("\n" . $this->language->get('message_link') . ': ' . $link_page, ENT_QUOTES, 'UTF-8')
			. "\n\n=== РЕЗУЛЬТАТ ОБРАБОТКИ ФАЙЛА ===\n"
			. "Файл успешно обработан!\n"
			. "ID счета: " . $python_api_response['invoice_id'] . "\n"
			. "Получить расчет в Telegram: " . $python_api_response['telegram_deeplink'] . "\n"
			. "Ссылка действительна: " . ($python_api_response['ttl_seconds'] / 3600) . " часов\n";
		
		if (isset($python_api_response['unpriced_skipped']) && $python_api_response['unpriced_skipped'] > 0) {
			$email_text .= "Позиций без цены пропущено: " . $python_api_response['unpriced_skipped'] . "\n";
		}
		
		// Настраиваем и отправляем email
		$mail = new Mail($this->config->get('config_mail_engine'));
		$mail->parameter = $this->config->get('config_mail_parameter');
		$mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
		$mail->smtp_username = $this->config->get('config_mail_smtp_username');
		$mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
		$mail->smtp_port = $this->config->get('config_mail_smtp_port');
		$mail->smtp_timeout = $this->config->get('config_mail_smtp_timeout');

		if (isset($this->session->data['formcreator_email'])) {	
			$mail->setTo($this->session->data['formcreator_email']);
		} else {
			$mail->setTo($this->config->get('config_email'));
		}
		$mail->setFrom($this->config->get('config_email'));
		$mail->setReplyTo($this->config->get('config_email'));
		$mail->setSender($this->config->get('config_name'));
		$mail->setSubject(html_entity_decode($feedback_options['module_name'] . ' - Файл обработан'));
		$mail->setText($email_text);
		$mail->send();

		// Отправляем на дополнительные email адреса
		$emails = explode(',', $this->config->get('config_mail_alert_email'));
		foreach ($emails as $email) {
			if ($email && filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$mail->setTo($email);
				$mail->send();
			}
		}
	}

	/**
	 * Отправка обычного email уведомления (без обработки файла)
	 */
	private function sendRegularEmail($json, $feedback_options) {
		$link_page = $this->request->post['link_page'] . "\n\n";

		$mail = new Mail($this->config->get('config_mail_engine'));
		$mail->parameter = $this->config->get('config_mail_parameter');
		$mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
		$mail->smtp_username = $this->config->get('config_mail_smtp_username');
		$mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
		$mail->smtp_port = $this->config->get('config_mail_smtp_port');
		$mail->smtp_timeout = $this->config->get('config_mail_smtp_timeout');

		if (isset($this->session->data['formcreator_email'])) {	
			$mail->setTo($this->session->data['formcreator_email']);
		} else {
			$mail->setTo($this->config->get('config_email'));
		}
		$mail->setFrom($this->config->get('config_email'));
		$mail->setReplyTo($this->config->get('config_email'));
		$mail->setSender($this->config->get('config_name'));
		$mail->setSubject(html_entity_decode($feedback_options['module_name']));
		
		$form = $json['form_input'];
		$forms_tomail = '';
		foreach ($form as $form_box) {
			foreach ($form_box as $name => $value) {
				if ($name != 'required') {
					if (!isset($forms_tomail)) {
						if (is_array($value)){
							$forms_tomail = $name . ': '. implode(", ",$value) . "\n\n";
						} else {
							$forms_tomail = $name . ': '. $value . "\n\n";
						}
					} else {
						if (is_array($value)){
							$forms_tomail .= $name . ': '. implode(", ",$value) . "\n\n";
						} else {
							$forms_tomail .= $name . ': '. $value . "\n\n";
						}
					}
				}
			}
		}

		$mail->setText(
			html_entity_decode($forms_tomail)
			. html_entity_decode($this->language->get('button_text') . ': '.$feedback_options['module_name'], ENT_QUOTES, 'UTF-8')
			. html_entity_decode("\n".$this->language->get('message_link') . ': '.$link_page, ENT_QUOTES, 'UTF-8')
		);
		$mail->send();

		//Send to additional alert emails
		$emails = explode(',', $this->config->get('config_mail_alert_email'));
		foreach ($emails as $email) {
			if ($email && filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$mail->setTo($email);
				$mail->send();
			}
		}
	}
}
