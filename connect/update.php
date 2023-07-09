<?php

require_once 'connect1.php';

$sql = 'UPDATE users SET email=:email, password=:password WHERE id = :id';

$email = 'test123@gmail.com';
$password = 'test123';
$id = 14;

try {
    $statement = $conn->prepare($sql);
    // $statement->bindParam(':email', $email);
    // $statement->bindParam(':password', $password);

    $data = [
        'id' => $id,
        'email' => $email,
        'password' => $password
    ];
    $updateStatus = $statement->execute($data);
    var_dump($updateStatus);

} catch (Exception $exception) {
    echo $exception->getMessage().'<br/>';
    echo 'File: '.$exception->getFile().' -Line: '.$exception->getLine().'<br/>';
}