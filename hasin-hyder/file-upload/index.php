<?php 
if(isset($_POST['submit'])){
  if($_FILES['file']){
	$filename=$_FILES['file']['tmp_name'];
	$name = basename($_FILES["file"]["name"]);
	$destination="upload/$name";
	$allwtype=["jpg,png,JPEG"];

	if(in_array($_FILES['file']['type'], $allwtype) !==false && $_FILES['file']['size']<5*1024*1024){
		move_uploaded_file($filename, $destination);
	}
	
	
}
}


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="" method="POST" enctype="multipart/form-data">
		<input type="text" name="name">
		<input type="file" name="file">
		<input type="submit" value="Submit" name="submit">
	</form>
</body>
</html>

