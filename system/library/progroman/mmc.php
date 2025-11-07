<?php

namespace progroman;

/**
 * Class MMC
 * @package progroman
 * @version 3
 */
class MMC {
    private $errors = [];

    /** @var array Обязательные параметры для передачи на сервер */
    private $params = [];

    /**
     * MMC constructor.
     * @param string $publickey Публичный ключ либо путь к файлу с ключом
     * @param $lang
     * @param $module_class
     * @param $module_version
     */
    public function __construct($publickey, $lang, $module_class = '', $module_version = '') {
        if (!($openssl_publickey = openssl_get_publickey($publickey))) {
            $openssl_publickey = openssl_get_publickey('file://' . $publickey);
        }

        $this->params['module'] = strtolower(str_replace(' ', '', basename(str_replace('\\', '/', $module_class))));
        $this->params['version'] = $module_version;
        $this->params['lang'] = $lang;
        $this->params['opencart'] = VERSION;

        openssl_public_encrypt(parse_url(HTTPS_SERVER ? HTTPS_SERVER : HTTP_SERVER, PHP_URL_HOST), $crypt, $openssl_publickey);
        $this->params['http_server'] = base64_encode($crypt);
    }

    /**
     * Установка дополнительных параметров для сервера
     * @param array $params
     * @return $this
     */
    public function setParams(array $params) {
        $this->params = array_merge($this->params, $params);
        return $this;
    }

    /**
     * Получает лицензионный ключ от сервера
     * @return bool
     */
    public function getSecretKey() {
        $response = $this->send(self::getProgromanServer() . '/api/licenses/get-secret-key');

        if (!($json = $this->parseResponse($response, $error))) {
            $this->setError($error);
            return false;
        }

        if (empty($json['success'])) {
            $this->setError($json['message']);
            return false;
        }

        return $json['data']['secret_key'];
    }

    /**
     * Проверяет наличие обновлений
     * @return bool
     */
    public function checkUpdate() {
        $response = $this->send(self::getProgromanServer() . '/api/check-update');

        if (!($json = $this->parseResponse($response, $error))) {
            $this->setError($error);
            return false;
        }

        if (empty($json['success'])) {
            $this->setError($json['message']);
            return false;
        }

        return $json['data'];
    }

    /**
     * Загружает файл с сервера
     * @param $type
     * @param $dest
     * @return bool
     */
    public function downloadFile($type, $dest) {
        set_time_limit(0);
        $file = fopen($dest, 'w+');
        if (!$file) {
            $this->setError('Could not create file ' . $dest);
            return false;
        }

        $response = $this->send(self::getProgromanServer() . '/api/download/' . $type);

        if (!$response) {
            fclose($file);
            unlink($dest);
            return false;
        }

        fwrite($file, $response);
        fclose($file);

        return true;
    }

    private function send($url) {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $this->params);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 30);
        curl_setopt($curl, CURLOPT_TIMEOUT, 30);
        $response = curl_exec($curl);
        $response_code = curl_getinfo($curl, CURLINFO_RESPONSE_CODE);

        if (curl_errno($curl)) {
            $this->setError('CURL: ' . curl_error($curl));
            return false;
        }

        curl_close($curl);

        if ($response_code != 200) {
            $this->setError('Server response code ' . $response_code);

            if ($response && ($json = $this->parseResponse($response, $error))) {
                $this->setError($json['message']);
            }

            return false;
        }

        if (empty($response)) {
            $this->setError('Server returned an empty result ');
            return false;
        }

        return $response;
    }

    private function setError($error) {
        $this->errors[] = $error;
    }

    public function getErrors() {
        return $this->errors;
    }

    static public function getProgromanServer() {
        return defined('PROGROMAN_DEV_MODE') ? 'http://mmc.loc' : 'http://mmc.progroman.ru';
    }

    static public function parseResponse($response, & $error) {
        if (empty($response)) {
            $error = 'Response is empty';
            return false;
        }

        $json = json_decode($response, true);
        if (json_last_error()) {
            $error = 'JSON: "' . json_last_error_msg() . '". Response: "' . $response . '"';
            return false;
        }

        return $json;
    }
}