<?php

require_once 'connect1.php';

// truy vấn tất cả dữ liệu

$sql = 'SELECT * FROM users WHERE id=?';
$id = 15;

try {
    $statement = $conn->prepare($sql);
    $dataParam = [$id];
    $statement->execute($dataParam);
    $data = $statement->fetchAll(PDO::FETCH_ASSOC);
    
    echo '<pre>';
    print_r($data);
    echo '</pre>';

} catch (Exception $exception) {
    echo $exception->getMessage().'<br />';
    echo "File -:".$exception->getFile().' -Line:'.$exception->getLine().'<br/>';
}

// truy vấn 1 hàng dữ liệu

$sql = 'SELECT * FROM users WHERE id=?';

try {
    $statement = $conn->prepare($sql);
    $statement->execute([13]);
    $data = $statement->fetch(PDO::FETCH_ASSOC);
    
    echo '<pre>';
    print_r($data);
    echo '</pre>';
} catch (Exception $exception) {
    echo $exception->getMessage().'<br/>';
    echo 'File: '.$exception->getFile().' -Line: '.$exception->getLine().'<br/>';
}

// lấy số hàng của câu lệnh truy vấn
$sql = 'SELECT * FROM users';
$id = 15;

try {
    $statement = $conn->prepare($sql);
    $statement->execute();

    $countUser = $statement->rowCount();
    echo 'số hàng: '.$countUser;
    
} catch (Exception $exception) {
    echo $exception->getMessage().'<br />';
    echo "File -:".$exception->getFile().' -Line:'.$exception->getLine().'<br/>';
}
