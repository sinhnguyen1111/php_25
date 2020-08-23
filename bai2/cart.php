<?php
	session_start();
	$listSp=$_SESSION['cart'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<style>
			table{
				/*width: 40%;*/
				margin: 0 auto;
				margin-top: 20px;
			}
		</style>
</head>

<body>
	<?php
		if(isset($_COOKIE['msg'])){
	?>
		<div class="alert alert-success">
			<strong>Thông báo: </strong>
			<?php 
				echo $_COOKIE['msg']; 
			?>
		</div>
	<?php
		}
	?>
	<h2>Thông tin giỏ hàng</h2>
	<button class="btn btn-success"><a href="index.php">Về trang chủ</a></button>
	<table class="table">
		
		<tr>
			<th>ID</th>
			<th>Tên sản phẩm</th>
			<th>Đơn giá</th>
			<th>Số lượng</th>
			<th>Thành tiền</th>
			<th>#</th>
		</tr>
		<?php
		$tong=0;
		foreach ($listSp as $key=>$value) {
			
		?>
		<tr>
			<td> <?php echo $value['msp']; ?></td>
			<td> <?php  echo $value['tensp']; ?></td>
			<td> <?php echo ($value['dongia']); ?></td>
			<td>
			 <button class="btn btn-success"> <a href="add2cart.php?id=<?php echo $key?>">+</a> </button>
			 <?php echo $value['soluong']; ?>
			 <button class="btn btn-danger"> <a href="remove.php?msp=<?php echo $value['msp'] ?>">-</a> </button>
			</td>
			<td> <?php echo ($value['soluong']*$value['dongia']); ?></td>
			
			<td><a href="remove.php?msp=<?php echo $key?>">Xóa khỏi giỏ hàng</a></td>
		</tr>
	<?php
		$tong = $tong+($value['dongia']*$value['soluong']);
		}
	?>
	<tr>
		<td colspan="4" align="center">Tổng tiền</td>
		
		<td><?php echo $tong ?></td>
		<td></td>

	</tr>
	</table>
</body>
</html>