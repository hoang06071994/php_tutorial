<?php
require_once 'connect1.php';

$sql = 'INSERT INTO users(email, password, age) VALUES (:email, :password, :age)';
$statement = $conn->prepare($sql);

$email = 'hoangtar@123.com';
$password = 'hoang798';
$age = 12;

// $statement->bindParam(':email', $email);
// $statement->bindParam(':password', $password);
// $statement->bindParam(':age',$age);

$data = [
    'email' => $email,
    'password' => $password,
    'age' => $age,
];
$insertStatus = $statement->execute($data);
var_dump($insertStatus);

echo 'id vùa insert'. $conn->lastInsertId();
