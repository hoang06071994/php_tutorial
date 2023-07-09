<?php

/**
 * Tổng quan về object (đồi tượng)
 * object là một tập hợp các thuộc tính cụ thể nào đó cho một đối tượng cụ thể
 * object bao gồm:
 * -hằng số (const)
 * -thuộc tính (biến)
 * -phương thức (hàm)
 * => để có objectt, ta cần định nghĩa lớp (class) 
*/
 
/*
 * cú pháp khởi tạo object 
 * $tenBien = new TenLop(tham số)
 * OR 
 * $tenBien = new TenLop(tham số)
 * OR
 * $tenBien = new TenLop
 */

$dataObject = new DateTime();
// var_dump($dataObject);
 
/**
 * cách dùng
 * gọi hằng số: $tenBienDoiTuong::tenhang;
 * gọi thuộc tính: $tenBienDoiTuong->tenthuoctinh
 * gọi phương thức: $tenBienDoiTuong->tenphuongthuc(thamso);
*/ 

//gọi hằng số
echo $dataObject::RSS.'<br/>';
echo $dataObject::COOKIE.'<br/>';

//gọi phương thức
echo $dataObject->format('d/m/Y H:i:s');


class DemoObject{
    public $education='unicode';
}

//Tạo đối tượng
$demoObject = new DemoObject();
echo $demoObject-> education.'<br/>';

// Ví dụ stdClass
$demoStd = new stdClass();
$demoStd->name='hoangpv';
echo $demoStd;
var_dump($demoStd);