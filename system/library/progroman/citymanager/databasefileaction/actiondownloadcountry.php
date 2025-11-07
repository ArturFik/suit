<?php
namespace progroman\CityManager\DatabaseFileAction;

use progroman\CityManager\Countries;
use progroman\Common\Registry;

/**
 * Class ActionDownloadCountry
 * Загрузка и установка базы городов одной страны
 * @package progroman\CityManager\ActionDownloadFile
 * @author Roman Shipilov (ProgRoman) <mr.progroman@yandex.ru>
 */
class ActionDownloadCountry extends ActionDownloadSQLDump {
    protected $icon = 'download';
    protected $css_class = 'btn-primary';
    protected $download_type = 'fias';

    public function __construct(array $lang = []) {
        parent::__construct($lang);
        $this->name = $this->lang('text_load');
        $this->loading_text = $this->lang('text_loading');
    }

    public function setParams($params) {
        $this->download_filename = $params['iso'] . (!empty($params['version']) ? '_' . $params['version'] : '') . '.zip';
        return parent::setParams($params);
    }

    protected function getParamsForProgromanServer() {
        return ['country' => $this->params['iso'], 'db_version' => $this->params['version'] ?? ''];
    }

    protected function stepClearTable() {
        try {
            $model = new \ModelExtensionModuleProgromanCityManager(Registry::instance()->getRegistry());
            $country = Countries::getCountryByISO($this->params['iso']);
            $model->removeSliceFias($country->fias_id, $country->fias_end);
        } catch (\Exception $e) {
            return ['error' => $e->getMessage()];
        }

        return parent::stepClearTable();
    }
}