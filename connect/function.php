<?php
function query($sql, $data=[]) {
    global $conn;
    $query = false;
    try {
        $statement = $conn->prepare($sql);
        if (empty($data)) {
            $query = $statement->execute();
        } else {
            $query = $statement->execute($data); 
        }

    } catch (Exception $exception) {
        echo $exception->getMessage().'<br/>';
        echo 'File: '.$exception->getFile().' -Line: '.$exception->getLine();
    }

    return $query;
}

function insert($table, $dataInsert) {

    $keyArr = array_keys($dataInsert);
    $fieldStr = implode(', ', $keyArr);
    $valueStr = ':'.implode(',:', $keyArr);

    $sql = 'INSERT INTO '.$table.'('.$fieldStr.') VALUES('.$valueStr.')';
    
    return query($sql, $dataInsert);
}

function update($table, $dataUpdate, $condition) {
    $updateStr = '';
    foreach($dataUpdate as $key=>$value) {
        $updateStr.=$key.'=:'.$key.', ';
    }
    $updateStr = rtrim($updateStr, ', ');
    
    if (!empty($condition)) {
        $sql = 'UPDATE '.$table.' SET '.$updateStr. ' WHERE '.$condition;
    } else {
        $sql = 'UPDATE '.$table.'SET '.$updateStr;
    }

    return query($sql, $dataUpdate);
}