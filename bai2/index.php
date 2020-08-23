<?php
	require_once 'data.php';
	session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<style>
			table{
				width: 40%;
				margin: 0 auto;
				margin-top: 30px;
			}
		</style>
</head>
<body>
	<h2>Danh sách sản phẩm</h2>
	<button class="btn btn-success"><a href="cart.php">View cart</a></button>
	<table class="table">
		<tr>
			<th>ID</th>
			<th>Tên sản phẩm</th>
			<th>Đơn giá</th>
			<th>Số lượng</th>
			<th>Image</th>
			<th>#</th>
			
		</tr>
		<?php
			foreach ($data_sp as $key => $value) {
		?>
		
		<tr>
			<td><?php echo $value['msp']; ?></td>
			<td><?php echo $value['tensp']; ?></td>
			<td><?php echo $value['dongia']; ?></td>
			<td><?php echo $value['soluong']; ?></td>
			<td></td>
			<td><a href="add2cart.php?id=<?php echo $key ?>">Add to cart</a></td>
		</tr>
	<?php } ?>
	</table>
</body>
</html>