<?php
	function upload_file($target_dir,$input_name,$max_size=null, $formats_allowed_array=null){
		$uploadOk=1;
		$error_arr=array();
		$target_dir = "uploads/";
		$target_file = $target_dir.basename($_FILES["file"]["name"]);
		//Kieermm tra xem file đã tồn tại chưa
		if (file_exists($target_file)) {
		    $error_arr[] = "File đã tồn tại";
		    $uploadOk = 0;
		}

		if($uploadOk){
			$upload = move_uploaded_file($_FILES["file"]["tmp_name"],$target_file );
		}
		else{
			$error_arr[]="Lỗi";
		}

		return $error_arr;
	}
?>