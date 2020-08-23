<?php
	session_start();
	$msp=$_GET['msp'];
	if($_SESSION['cart'][$msp]['soluong']>1){
		$_SESSION['cart'][$msp]['soluong']--;
	}
	else{
		// $msp = $_GET['msp'];
		unset($_SESSION['cart'][$msp]);
		setcookie('msg','Xóa thành công',time()+5);
	}
	header('location: cart.php');
?>