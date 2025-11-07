<?php
namespace progroman\CityManager\DatabaseFile;

use progroman\Common\Registry;

/**
 * Class DatabaseFile
 * @package progroman\CityManager\DownloadFile
 * @author Roman Shipilov (ProgRoman) <mr.progroman@yandex.ru>
 */
abstract class DatabaseFile {
    protected $name;
    protected $lang = [];

    /** @var \ModelExtensionModuleProgromanCityManager */
    protected $model;

    public function __construct($lang = []) {
        if ($lang) {
            $this->lang = $lang;
        }

        $this->model = new \ModelExtensionModuleProgromanCityManager(Registry::instance()->getRegistry());
    }

    public function getName() {
        return $this->name;
    }

    /**
     * @param string $name
     * @return DatabaseFile|BaseCities
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function getStatus() {
        return '';
    }

    public function getActions() {
        return [];
    }

    protected function lang($key) {
        return isset($this->lang[$key]) ? $this->lang[$key] : $key;
    }
}