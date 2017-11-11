<?php
require_once 'config.php';


class LinkUp {
    static function linkFile($fileName) {
        if(defined('ABS_PATH')) {
            return ABS_PATH . $fileName;
        } else {
            throw new Exception('LinkUp class required config.php');
        }
    }

    static function linkSrc($fileName) {
        if(defined('HOST_PATH')) {
            echo trim(HOST_PATH . $fileName);
        } else {
            throw new Exception('LinkUp class required config.php');
        }
    }
}