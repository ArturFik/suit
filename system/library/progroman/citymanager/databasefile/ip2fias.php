<?php
namespace progroman\CityManager\DatabaseFile;

use progroman\CityManager\DatabaseFileAction\ActionDownloadIp2Fias;

/**
 * Class Ip2Fias
 * @package progroman\CityManager\DownloadFile
 * @author Roman Shipilov (ProgRoman) <mr.progroman@yandex.ru>
 */
class Ip2Fias extends DatabaseFile {

    /** @var bool Есть новая версия базы IP */
    private $need_update;

    /** @var bool База загружена */
    private $downloaded;

    public function __construct($lang) {
        parent::__construct($lang);
        $this->downloaded = $this->model->countIp2Fias();
        $this->need_update = $this->downloaded && ($this->model->getData('citymanagerpro.version_ip') < $this->model->getData('citymanagerpro.latest_version_ip'));
    }

    public function getName() {
        return $this->lang('text_base_ip_name');
    }

    public function getStatus() {
        if ($this->downloaded) {
            return $this->lang($this->need_update ? 'text_ip_update_available' : 'text_latest_version_installed');
        }

        return $this->lang('text_not_loaded');
    }

    public function getActions() {
        if (!$this->downloaded || $this->need_update) {
            $action = new ActionDownloadIp2Fias($this->lang);
            $action->setParams(['step' => 'download']);
            if ($this->need_update) {
                $action->setName($this->lang('button_refresh'));
            }

            return [$action];
        }

        return [];
    }
}