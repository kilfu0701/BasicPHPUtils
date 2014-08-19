<?php

class BasicPHPUtils {
    private static $instance;

    public function __construct() {

    }

    public static function Instance() {
        static $inst = null;
        if ($inst === null) {
            $inst = new BasicPHPUtils();
        }

        return $inst;
    }


    public function load() {

    }

    public function test() {
        echo 1;
    }
}
