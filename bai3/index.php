<?php
// include_once 'data.php';
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<h3>---DOCUMENT---</h3>
	<button class="btn btn-success"><a href="upload.php">Upload Document</a></button>
	<?php
		if(isset($_COOKIE['msg'])){
		
	?>
	<div class="alert alert-success">
		<strong>Thông báo: </strong>
		<?php echo $_COOKIE['msg']; ?>
	</div>
<?php } ?>
	<table class="table">
		<tr>
			<th>No</th>
			<th>Name</th>
			<th>Download</th>
			<th>#</th>
		</tr>
			<?php
				$i=0;
				foreach ($_SESSION['document'] as $key => $value) {
					$i++;
				
			?>
		<tr>
			<td><?php echo $i; ?></td>
			<td><?php echo $value['name'] ;?></td>
			<td>
				<button class="btn btn-primary"><a href=""></a>Download</button>
			</td>
			<td>
				<button class="btn btn-danger"><a href=""></a>Remove</button>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>