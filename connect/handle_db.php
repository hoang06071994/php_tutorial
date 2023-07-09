<?php

require_once 'connect1.php';
require_once 'function.php';

$dataInsert = [
    'email' => 'hoang@gmail.com',
    'password' => 'hoang',
    'age' => '7',
];

// $checkInsert = insert('users', $dataInsert);

$dataUpdate = [
    'email' => 'test123123123@gmail.com',
    'password' => 'test123123'
];
$condition = 'id=18';

$checkUpdate = update('users', $dataUpdate, $condition);
