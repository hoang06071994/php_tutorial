<?php 
echo '<h1> connect</h1>';

const _HOST = 'localhost';
const _USER = 'root';
const _PASS = '';
const _DRIVER = 'mysql';
const _DB = 'phponline';

try {
    if (class_exists('PDO')) {
        $dsn = _DRIVER.':dbname='._DB.';host='._HOST;
        $options = [
            PDO:: MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
            PDO:: ATTR_ERRMODE => PDO:: ERRMODE_EXCEPTION
        ];
        $conn = new PDO($dsn, _USER, _PASS, $options);
    }
} catch (Exception $exception) {
    die();
}