<?php
	require_once 'data.php';
	session_start();
	$msp = $_GET['id'];
	if(isset($_SESSION['cart'][$msp])){ /*nếu msp đã tồn tại trong giỏ hàng*/
		$_SESSION['cart'][$msp]['soluong']++;
		setcookie('msg','Thêm mới thành công',time()+5);
	}
	else{
		//Lấy ra thông tin sản phẩm theo msp
		$info = $data_sp[$msp];
		setcookie('msg','Thêm mới thành công',time()+5);
		$info['soluong'] = 1;
		$_SESSION['cart'][$msp] = $info;

	}

	header('location: cart.php');
?>