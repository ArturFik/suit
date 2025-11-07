<?php
namespace progroman\CityManager;

/**
 * Class CityManager
 * @package progroman\CityManager
 * @author Roman Shipilov (ProgRoman) <mr.progroman@yandex.ru>
 */
class CityManager extends Core {
    const VERSION = '9.0';
    const MODULE_NAME = 'CityManager Pro';

    protected static $instance;

    public function __construct() {
        $this->dev_mode = defined('PROGROMAN_DEV_MODE');
        parent::__construct();

        if ($this->dev_mode) {
            $this->log('HTTP_HOST ' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
            $this->log('SESSION ' . json_encode($this->session->data[$this->getSessionKey()] ?? [], JSON_UNESCAPED_UNICODE));
            if (!empty($this->session->data[$this->getSessionKey()]['city_name'])) {
                $this->log('SESSION city: ' . $this->session->data[$this->getSessionKey()]['city_name']);
            }
            $this->log('COOKIE fias "' . ($this->request->cookie[$this->getCookieKey('fias')] ?? '') . '"');
            $this->log('first visit ' . ($this->is_first_visit ? 'true' : 'false'));
        }
    }

    public function __destruct() {
        $this->log(str_repeat('-', 100));
    }

    public function getCountryId() {
        return $this->country_id;
    }

    public function getCountryName($case = self::NOMINATIVE) {
        return $this->getNameByType('country', $case);
    }

    public function getZoneId() {
        return $this->zone_id;
    }

    public function getZoneName($case = self::NOMINATIVE, $with_prefix = false) {
        return $this->getNameByType('zone', $case, $with_prefix);
    }

    public function getDistrictName($case = self::NOMINATIVE, $with_prefix = false) {
        return $this->getNameByType('district', $case, $with_prefix);
    }

    public function getFullCityName($case = self::NOMINATIVE, $with_prefix = false) {
        $district = $this->getDistrictName($case, true);
        return ($district ? $district .  ', ' : '') . $this->getCityName($case, $with_prefix);
    }

    public function getCityName($case = self::NOMINATIVE, $with_prefix = false) {
        return $this->getNameByType('city', $case, $with_prefix);
    }

    private function getNameByType($type, $case, $with_prefix = false) {
        $case = mb_strtolower($case);
        switch ($case) {
            case self::GENITIVE:
                $name = $this->{$type . '_name_gc'};
                break;

            case self::PREPOSITIONAL:
                $name = $this->{$type . '_name_pc'};
                break;

            default:
                $name = $this->{$type . '_name'};
        }

        return $with_prefix ? $this->concatPrefix($name, $this->{'prefix_' . $type . '_name'}) : $name;
    }

    private function concatPrefix($name, $prefix) {
        if (empty($prefix)) {
            return $name;
        }

        $after = ['обл.', 'аобл.', 'ао', 'край', 'р-н'];
        return in_array(mb_strtolower($prefix), $after) ? $name . ' ' . $prefix : $prefix . ' ' . $name;
    }

    public function getPrefixCityName() {
        return $this->prefix_city_name;
    }

    public function getPrefixZoneName() {
        return $this->prefix_zone_name;
    }

    public function getPostcode() {
        return $this->postcode;
    }

    public function getFiasCountryId() {
        return $this->fias_country_id;
    }

    public function getFiasZoneId() {
        return $this->fias_zone_id;
    }

    public function getFiasId() {
        return $this->fias_id;
    }

    public function getFullInfo() {
        return $this->session->data[$this->getSessionKey()];
    }

    public function setFias($fias_id) {
        $result = parent::setFias($fias_id);
        if ($result) {
            $this->forceSaveInSession();
        }

        return $result;
    }

    /**
     * Записывает адреса доставки и оплаты в сессию,
     * только если эти значения не были установлены ранее.
     * Не перезаписывает уже установленных значений.
     */
    public function saveInSession() {
        if ($this->setting('not_fill_fields')) {
            return;
        }

        // Если используется сохраненный адрес, не заполняем поля
        if (!empty($this->session->data['shipping_address']['address_id']) || !empty($this->session->data['payment_address']['address_id'])) {
            return;
        }

        foreach ($this->getData() as $key => $value) {
            // OC 1.5
            if (empty($this->session->data['shipping_' . $key])) {
                $this->session->data['shipping_' . $key] = $value;
            }

            if (empty($this->session->data['payment_' . $key])) {
                $this->session->data['payment_' . $key] = $value;
            }

            if (empty($this->session->data['guest']['shipping'][$key])) {
                $this->session->data['guest']['shipping'][$key] = $value;
            }

            if (empty($this->session->data['guest']['payment'][$key])) {
                $this->session->data['guest']['payment'][$key] = $value;
            }

            // OC 2
            if (empty($this->session->data['payment_address'][$key])) {
                $this->session->data['payment_address'][$key] = $value;
            }

            if (empty($this->session->data['shipping_address'][$key])) {
                $this->session->data['shipping_address'][$key] = $value;
            }

            // Simple
            if (empty($this->session->data['simple']['payment_address'][$key])) {
                $this->session->data['simple']['payment_address'][$key] = $value;
            }

            if (empty($this->session->data['simple']['shipping_address'][$key])) {
                $this->session->data['simple']['shipping_address'][$key] = $value;
            }
        }
    }

    /**
     * Записывает адреса доставки и оплаты в сессию.
     * Используется, когда пользователь меняет регион вручную.
     */
    public function forceSaveInSession() {
        if ($this->setting('not_fill_fields')) {
            return;
        }

        foreach ($this->getData() as $key => $value) {
            $this->session->data['payment_address'][$key]
                = $this->session->data['shipping_address'][$key]
                = $this->session->data['shipping_' . $key]
                = $this->session->data['payment_' . $key]
                = $this->session->data['guest']['shipping'][$key]
                = $this->session->data['guest']['payment'][$key]
                = $this->session->data['simple']['payment_address'][$key]
                = $this->session->data['simple']['shipping_address'][$key]
                = $value;
        }
    }

    private function getData() {
        return [
            'country_id' => $this->getCountryId(),
            'zone_id' => $this->getZoneId(),
            'postcode' => $this->getPostcode(),
            'city' => $this->setting('use_fullname_city') ? $this->getFullCityName() : $this->getCityName()
        ];
    }

    public function isCustomerGroupHighPriority() {
        return $this->setting('enable_switch_customer_group') && $this->setting('customer_group_high_priority');
    }

    public function getCustomerGroupForNewUser() {
        $config = $this->registry->get('config');
        $customer_group_id = $config->get('config_customer_group_id');
        // Если не включено "Присваивать группу города при регистрации", ставим группу по умолчанию
        if ($this->setting('enable_switch_customer_group') && !$this->setting('customer_group_for_new_user')
            && $this->getCustomerGroupId() == $customer_group_id) {
            $customer_group_id = $this->getDefaultCustomerGroupId();
        }

        return $customer_group_id;
    }

    protected function getBots() {
        return ['apis-google', 'mediapartners-google', 'adsbot', 'googlebot', 'yandex.com/bots', 'mail.ru_bot', 'stackrambler', 'slurp', 'msnbot', 'bingbot', 'alexa.com'];
    }

    public function replaceBlanks($string) {
        $replaces = [
            '%COUNTRY%' => $this->getCountryName(),
            '%COUNTRY_GC%' => $this->getCountryName(self::GENITIVE),
            '%COUNTRY_PC%' => $this->getCountryName(self::PREPOSITIONAL),
            '%ZONE%' => $this->getZoneName(self::NOMINATIVE, true),
            '%ZONE_GC%' => $this->getZoneName(self::GENITIVE, true),
            '%ZONE_PC%' => $this->getZoneName(self::PREPOSITIONAL, true),
            '%PREFIX_ZONE%' => $this->getPrefixZoneName(),
            '%CITY%' => $this->getCityName(),
            '%CITY_GC%' => $this->getCityName(self::GENITIVE),
            '%CITY_PC%' => $this->getCityName(self::PREPOSITIONAL),
            '%PREFIX_CITY%' => $this->getPrefixCityName(),
        ];

        $string = str_replace(array_keys($replaces), $replaces, $string);
        $string = preg_replace_callback('#%MSG_(.*?)%#', function($matches) {
            return $this->getMessage($matches[1]);
        }, $string);

        return $string;
    }

    public function autocompleteForSimple($term, $limit) {
        return $this->loadModel('fias')->autocompleteForSimple($term, $limit);
    }

    /**
     * Проверка - нужно ли делать редирект
     * @return bool
     */
    protected function needRedirect() {
        $request = $this->registry->get('request');
        $urls = ['route=api/', 'payment/', 'extension/feed'];

        foreach ($urls as $url) {
            if (strpos($request->server['REQUEST_URI'], $url) !== false) {
                return false;
            }
        }

        return parent::needRedirect();
    }
}