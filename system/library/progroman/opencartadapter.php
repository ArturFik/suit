<?php

namespace progroman;

use progroman\Common\Registry;

class OpencartAdapter {
    private static $instance;

    /** @var \Registry */
    private $registry;

    /** @var \Config */
    private $config;

    /** @var \Log */
    private $log;

    private function __construct() {
        $this->registry = Registry::instance()->getRegistry();
        $this->config = $this->registry->get('config');
    }

    /**
     * @return self
     */
    public static function instance() {
        if (!static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    /**
     * Добавляет запись в системный лог
     * @param $message
     */
    public function log($message) {
        if (!($this->log = $this->registry->get('log'))) {
            $this->log =  new \Log($this->config->get('config_error_filename'));
        }

        $this->log->write($message);
    }

    public function loadModel($route) {
        $this->registry->get('load')->model($route);
        return $this->registry->get('model_' . str_replace(['/', '-', '.'], ['_', '', ''], $route));
    }
}