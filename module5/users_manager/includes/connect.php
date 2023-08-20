<?php
if (!defined('_INCODE')) die('access deined ...');

try {
    if (class_exists('PDO')) {
        $dsn = _DRIVER.':dbname='._DB.';host='._HOST;
        $options = [
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
        $conn = new PDO($dsn, _USER, _PASS, $options);
    }
} catch (Exception $exception) {
    require_once 'modules/error/database.php'; //import error
    die();
}