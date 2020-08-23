<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<h3>Upload Document</h3>
	<form action="index.php" method="POST" enctype="multipart/form-data">
		<label for="">Tên tài liệu</label><br>
		<input type="text" class="form-control" id="text"  name="name"><br>
		<label for="">Image</label><br>
		<input type="file" class="form-control" name="file_name">
		<input type="submit" value="Upload" name="submit">
	</form>
</body>
</html>