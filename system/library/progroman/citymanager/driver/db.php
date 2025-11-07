<?php
namespace progroman\CityManager\Driver;

class Db extends Driver {
    protected function initGeoFilter() {
        $this->geo_filter = [];
        if ($long_ip = ip2long($this->ip)) {
            $data = $this->getOpencartAdapter()->loadModel('extension/module/progroman/citymanager')->ip2fias($long_ip);
            if ($data) {
                $this->geo_filter['fias_id'] = $data['fias_id'];
            }
        }
    }

    public function getVersion() {
        return '1.0';
    }
}