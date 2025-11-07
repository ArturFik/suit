<?php
namespace progroman\CityManager;

use progroman\OpencartAdapter;

class Countries {
    static $countries = [];

    public static function getList() {
        if (empty(self::$countries)) {
            self::loadList();
        }

        return self::$countries;
    }

    /**
     * @param $iso
     * @return Country|null
     */
    public static function getCountryByISO($iso) {
        self::getList();
        return self::$countries[$iso] ?? null;
    }

    private static function loadList() {
        $countries = OpencartAdapter::instance()->loadModel('extension/module/progroman/citymanager')->getData('citymanagerpro.countries');
        if ($countries) {
            foreach (json_decode($countries, true) as $country) {
                self::$countries[$country['iso']] = (new Country())->fromArray($country);
            }
        }
    }
}
