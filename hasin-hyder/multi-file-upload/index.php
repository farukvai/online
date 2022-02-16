<?php 
if(isset($_POST['submit'])){
  if($_FILES['file']){
  	$totalfile= count($_FILES['file']['name']);
  	for($i=0;$i<$totalfile;$i++){
  	
	$filename=$_FILES['file']['tmp_name'][$i];
	$name = basename($_FILES["file"]["name"][$i]);
	$destination="upload/$name";
	$allwtype=["image/jpg,image/png,image/JPEG"];

	if(in_array($_FILES['file']['type'][$i], $allwtype) !==false && $_FILES['file']['size'][$i]<5*1024*1024){
		echo move_uploaded_file($filename, $destination);
	}
	
}	
}
}

var_dump($name);
 ?>

 <pre>
 	<?php print_r($_FILES); ?>
 </pre>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="" method="POST" enctype="multipart/form-data">
		<input type="text" name="name">
		<input type="file" name="file[]">
		<input type="file" name="file[]">
		<input type="file" name="file[]">
		<input type="submit" value="Submit" name="submit">
	</form>
</body>
</html>

