<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
const _MODULE_DEFAULT = 'home'; //module default
const _ACTION_DEFAULT = 'list'; // action default
const _INCODE = 'true'; // ngăn chặn hành vi người dùng truy cập trực tiếp vào file

// thiết lập host (đường dẫn tuyệt đối)
define('_WEB_HOST_ROOT', 'http://'. $_SERVER['HTTP_HOST'] .'/php_tutorial/module5/users_manager');

define('_WEB_HOST_TEMPLATE', _WEB_HOST_ROOT.'/templates');

// thiết lập path
define('_WEB_PATH_ROOT', __DIR__); //trỏ trực tiếp đến forder chứa file config
define('_WEB_PATH_TEMPLATE', _WEB_PATH_ROOT. '/templates');

//connect databases

const _HOST = 'localhost';
const _USER = 'root';
const _PASS = '';
const _DRIVER = 'mysql';
const _DB = 'phponline';