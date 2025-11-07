<?php
namespace progroman\CityManager;

class Country {
    public $name;
    public $iso;
    public $fias_id;
    public $fias_start;
    public $fias_end;
    public $lite_exists = false;
    //public $languages = [];

    public function fromArray(array $array) {
        $this->name = $array['name'];
        $this->iso = $array['iso'];
        $this->fias_id = $array['fias_id'];
        $this->fias_start = $array['fias_start'];
        $this->fias_end = $array['fias_end'];
        $this->lite_exists = !empty($array['lite_exists']);

        return $this;
    }
}
