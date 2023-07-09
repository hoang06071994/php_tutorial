<?php
echo '<h1>delete</h1>';

require_once 'connect1.php';

$id = 14;
$sql = 'DELETE FROM users  WHERE id=?';
try {
    $statement = $conn->prepare($sql);
    $data = [$id];

    $deleteStatus = $statement->execute($data);
    var_dump($deleteStatus);
} catch (Exception $exception) {
    echo $exception->getMessage().'<br/>';
    echo 'File: '.$exception->getFile().'-Line: '.$exception->getLine().'<br/>';
}