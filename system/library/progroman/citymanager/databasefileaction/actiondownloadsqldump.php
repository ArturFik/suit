<?php
namespace progroman\CityManager\DatabaseFileAction;

/**
 * Class ActionDownloadSQLDump
 * Загрузка и установка SQL-дампа
 * @package progroman\CityManager\ActionDownloadFile
 * @author Roman Shipilov (ProgRoman) <mr.progroman@yandex.ru>
 */
abstract class ActionDownloadSQLDump extends DatabaseFileAction {
    private $download_dir;
    protected $download_filename;
    protected $download_type;

    public function __construct(array $lang = []) {
        parent::__construct($lang);
        $this->name = $this->lang('text_load');
        $this->loading_text = $this->lang('text_loading');
        $this->download_dir = DIR_DOWNLOAD . 'progroman/' . $this->download_type;
    }

    public function run() {
        switch ($this->params['step'] ?? '') {
            case 'download':
                return $this->stepDownload();

            case 'unzip':
                return $this->stepUnzip();

            case 'clear-table':
                return $this->stepClearTable();

            case 'query':
                return $this->stepQuery();

            case 'delete-files':
                return $this->stepDeleteFiles();

            default:
                return ['error' => sprintf($this->lang('error_bug'), 'Unknown step "' . $this->params['step'] . '"')];
        }
    }

    private function stepDownload() {
        if (is_dir($this->download_dir)) {
            $this->rmdir($this->download_dir);
        }

        if (!mkdir($this->download_dir, 0777, true)) {
            return ['error' => sprintf($this->lang('error_create_dir'), $this->download_dir)];
        }

        try {
            $this->downloadFile($this->download_type, $this->download_dir . '/' .   $this->download_filename);
        } catch (\Exception $e) {
            return ['error' => $e->getMessage()];
        }

        $json['success'] = 1;
        $json['next_step'] = 'unzip';
        $json['btn_text'] = $this->lang('text_unzip');

        return $json;
    }

    private function stepUnzip() {
        try {
            $this->unzipFile($this->download_dir . '/' . $this->download_filename, $this->download_dir);
        } catch (\Exception $e) {
            return ['error' => $e->getMessage()];
        }

        unlink($this->download_dir . '/' .   $this->download_filename);

        $json['success'] = 1;
        $json['next_step'] = 'clear-table';
        $json['btn_text'] = $this->lang('text_query');

        return $json;
    }

    protected function stepClearTable() {
        $json['success'] = 1;
        $json['next_step'] = 'query';
        $json['btn_text'] = $this->lang('text_query');

        return $json;
    }

    protected function stepQuery() {
        $files = glob($this->download_dir . '/*.sql');
        $iteration = $this->params['iteration'] ?? 0;

        try {
            $json['file'] = $files[$iteration];
            $this->queryFromFile($files[$iteration]);
        } catch (\Exception $e) {
            return ['error' => $e->getMessage()];
        }

        if (isset($files[$iteration + 1])) {
            $json['next_step'] = 'query';
            $json['iteration'] = $iteration + 1;
        } else {
            $json['next_step'] = 'delete-files';
            $json['btn_text'] = $this->lang('text_clear');
        }

        $json['success'] = 1;

        return $json;
    }

    private function stepDeleteFiles() {
        $this->rmdir($this->download_dir);

        $json['success'] = 1;
        $json['text'] = $this->lang('text_database_uploaded');

        return $json;
    }

    /**
     * Выполняет запросы из SQL-файла
     * @param $filename
     * @throws \Exception
     */
    private function queryFromFile($filename) {
        if (!is_readable($filename) || !($sql = file_get_contents($filename))) {
            throw new \Exception(sprintf($this->lang('error_read_file'), $filename));
        }

        ini_set('pcre.backtrack_limit', 10240000);
        preg_match_all("#(.*);\s*$#Usm", $sql, $matches);

        if (isset($matches[1])) {
            $db = $this->getDb();
            foreach ($matches[1] as $query) {
                $query = trim($query);
                if ($query) {
                    $db->query($query);
                }
            }
        }
    }

}