<?php
namespace progroman\CityManager\DatabaseFile;

use progroman\CityManager\Country;
use progroman\CityManager\DatabaseFileAction\ActionDownloadCountry;
use progroman\CityManager\DatabaseFileAction\ActionRemoveCountry;

/**
 * Class BaseCities
 * @package progroman\CityManager\DownloadFile
 * @author Roman Shipilov (ProgRoman) <mr.progroman@yandex.ru>
 */
class BaseCities extends DatabaseFile {

    static protected $installed_countries = [];

    /** @var Country */
    protected $country;

    public function getStatus() {
        return $this->lang($this->isInstalled() ? 'text_yes' : 'text_no');
    }

    public function getActions() {
        $actions = [];
        if ($this->isInstalled()) {
            $action = new ActionRemoveCountry($this->lang);
            $action->setParams(['iso' => $this->country->iso]);

            if ($this->country->lite_exists && $this->model->isLiteInstalled($this->country->fias_start, $this->country->fias_end)) {
                $this->setName($this->lang('text_installed_cities'));
            }

            $actions[] = $action;
        } else {
            $action = new ActionDownloadCountry($this->lang);
            $action->setParams(['step' => 'download', 'iso' => $this->country->iso]);
            $actions[] = $action;

            if ($this->country->lite_exists) {
                // Добавим lite-версию (только города)
                $action = new ActionDownloadCountry($this->lang);
                $action->setCssClass('btn-success')
                    ->setName($this->lang('text_installed_cities'))
                    ->setParams(['step' => 'download', 'iso' => $this->country->iso, 'version' => 'lite']);
                $actions[] = $action;
            }
        }

        return $actions;
    }

    /**
     * @param Country $country
     * @return BaseCities
     */
    public function setCountry(Country $country) {
        $this->country = $country;
        return $this;
    }

    public function getName() {
        return $this->country->name;
    }

    /**
     * Возвращает список установленных стран
     * @return array
     */
    public function getInstalledCountries() {
        if (!self::$installed_countries) {
            self::$installed_countries = $this->model->getInstalledCountries();
        }

        return self::$installed_countries;
    }

    protected function isInstalled() {
        return in_array($this->country->fias_id, $this->getInstalledCountries());
    }
}