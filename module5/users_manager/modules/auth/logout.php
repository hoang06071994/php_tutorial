<?php
if (!defined('_INCODE')) die('access deined ...');
echo 'test';
if (isLogin()) {
    $token = getSession('loginToken');
    delete('logintoken', "token='$token'");
    removeSession('loginToken');
    redirect('?module=auth&action=login');
}