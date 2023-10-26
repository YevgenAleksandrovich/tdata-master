<?php

use Symfony\Component\Yaml\Yaml;

/**
 * Class Config to simplify working with configuration.
 */
class Config {
    /** @var array Contains all configuration */
    private static $config;

    /**
     * Initialise configuration.
     * Should be called once.
     *
     * @param string $config_path
     *   Path to the configuration file.
     */
    public static function init($config_path) {
        $config = Yaml::parseFile($config_path);
        self::$config = $config;
    }

    public static function get($key = null) {
        if (is_null($key)) {
            return self::$config;
        }

        if (isset(self::$config[$key])) {
            return self::$config[$key];
        }

        return null;
    }
}