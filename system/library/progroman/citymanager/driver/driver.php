<?php
namespace progroman\CityManager\Driver;

use progroman\OpencartAdapter;

abstract class Driver {
    protected $ip;

    /** @var array Геофильтр, с данными, получаемыми по IP */
    protected $geo_filter;

    public function __construct($ip = false) {
        $this->ip = $ip ? $ip : $this->getHttpIp();
    }

    public function getGeoFilter() {
        if (is_null($this->geo_filter)) {
            if ($this->isValidIp($this->ip)) {
                // Первый байт
                $ip1n = (int)$this->ip;
                if ($ip1n != 0 && $ip1n != 10 && $ip1n != 127 && ip2long($this->ip)) {
                    $this->initGeoFilter();
                }
            } else {
                $this->getOpencartAdapter()->log('Invalid IP "' . $this->ip . '"');
                $this->geo_filter = [];
            }
        }

        return $this->geo_filter;
    }

    public function getIp() {
        return $this->ip;
    }

    /**
     * Инициализация геофильтра
     * @return mixed
     */
    abstract protected function initGeoFilter();

    /**
     * Определяет ip адрес по HTTP-заголовкам из массива $_SERVER
     * ip адреса проверяются начиная с приоритетного, для определения возможного использования прокси
     * @return string IP-адрес | bool false
     */
    private function getHttpIp() {
        $httpKeys = ['HTTP_X_FORWARDED_FOR', 'HTTP_CLIENT_IP', 'REMOTE_ADDR', 'HTTP_X_REAL_IP'];

        // проверяем ip-адреса на валидность начиная с приоритетного.
        foreach ($httpKeys as $httpKey) {
            if (isset($_SERVER[$httpKey])) {
                $ip = trim(strtok($_SERVER[$httpKey], ','));
                if ($this->isValidIp($ip)) {
                    return $ip;
                }
            }
        }

        return false;
    }

    /**
     * Валидация ip адреса
     * @param string $ip адрес в формате 111.111.111.111
     * @return boolean
     */
    private function isValidIp($ip = null) {
        return $ip && preg_match('#^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$#', $ip);
    }

    protected function getOpencartAdapter() {
        return OpencartAdapter::instance();
    }
}