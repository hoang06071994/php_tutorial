<?php
	//kiểm tra phương thức POST
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		if (!empty($_FILES['file_upload'])) {
			// lấy tên file
			$fileName = $_FILES['file_upload'] ['name'];
			//đổi tên file
			$fileNameArr = explode('.', trim($fileName));
			$fileExt = end($fileNameArr);
			$fileBefore = sha1(uniqid());
			$fileName = $fileBefore .'.' . $fileExt;
			$allowedArr = ['mp4', 'jpg', 'png'];
			if (in_array($fileExt, $allowedArr)) {
				$size = $_FILES['file_upload'] ['size'];
				if ($size <= 5232880) {
					$upload = move_uploaded_file($_FILES['file_upload'] ['tmp_name'], './uploads/'.$fileName);	
					if ($upload) {
						echo 'upload file thanh cong';
					}
				} else {
					echo 'kich thuoc file qua lon';
				}
			} else {
				echo 'file khong dung dinh dang';
			}
			// echo $fileName;
		}
	}
	// lấy thông tin file
	// print_r($_FILES);
?>