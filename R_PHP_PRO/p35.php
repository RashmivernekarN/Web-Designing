<!DOCTYPE html>
<html>
<head>
	<title>File Upload</title>
</head>
<body>
<form method="post" action="" enctype="multipart/form-data" >
	<label>Choose File </label>
	<input type="file" name="image" required="">	
	<input type="submit" name="submit" value="Upload">
</form>
</body>
</html>
<?php
	if(isset($_FILES['image'])){
		$error=array();
		$file_name=$_FILES['image']['name'];
		$file_size=$_FILES['image']['size'];
		$file_tmp=$_FILES['image']['tmp_name'];
		$file_type=$_FILES['image']['type'];
		$tmp=explode('.',$file_name);
		$file_ext=strtolower(end($tmp));

		$extensions=array("jpg","jpeg","gif","png");
		if(in_array($file_ext,$extensions)===false){
			$error[]= "Invalid File Format";
		}
		if($file_size>204800){
			$error[]="File Size must be Less than 2 MB";
		}

		if(empty($error)==true){
			move_uploaded_file($file_tmp, 'img/'.$file_name);
			echo "Success";
		}else{
			print_r($error);
		}
	}
?>