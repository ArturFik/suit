<?php
namespace progroman\CityManager\DatabaseFileAction;

use progroman\OpencartAdapter;

/**
 * Class ActionDownloadIp2Fias
 * @package progroman\CityManager\ActionDownloadFile
 * @author Roman Shipilov (ProgRoman) <mr.progroman@yandex.ru>
 */
class ActionDownloadIp2Fias extends ActionDownloadSQLDump {
    protected $icon = 'download';
    protected $css_class = 'btn-primary';
    protected $download_filename = 'ip2fias.zip';
    protected $download_type = 'ip2fias';

    public function __construct($lang) {
        parent::__construct($lang);
        $this->name = $this->lang('text_load');
        $this->loading_text = $this->lang('text_loading');

        $this->lang['error_create_dir'] = $this->lang('error_create_dir');
        $this->lang['error_create_file'] = $this->lang('error_create_file');
        $this->lang['error_unzip'] = $this->lang('error_unzip');
    }

    protected function stepClearTable() {
        try {
            OpencartAdapter::instance()->loadModel('extension/module/progroman/citymanager')->clearIp2Fias();
        } catch (\Exception $e) {
            return ['error' => $e->getMessage()];
        }

        return parent::stepClearTable();
    }

    protected function stepQuery() {
        $result = parent::stepQuery();

        if (empty($result['error']) && preg_match('#(\d{8})\.sql#', $result['file'], $matches)) {
            OpencartAdapter::instance()->loadModel('extension/module/progroman/citymanager')->setData('citymanagerpro.version_ip', $matches[1]);
        }

        return $result;
    }
}