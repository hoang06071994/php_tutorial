<?php
if (!defined('_INCODE')) die('Access dined...');
/*list users
*/
$checkLogin = false;
if (getSession('loginToken')) {
    $tokenLogin = getSession('loginToken');
    $queryToken = firstRaw("SELECT userId FROM logintoken WHERE token='$tokenLogin'");

    if (!empty($queryToken)) {
        $checkLogin = true;
    } else {
        removeSession('loginToken');
    }
}
if (empty($checkLogin)) {
    redirect('?module=auth&action=login');
}
echo 'day la page users';
var_dump(_INCODE);