<?php
if(isset($_POST['submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	if($username==='vijay' and $password==='1234'){
		//header("location:http://facebook.com");
		echo "Login Successful";
	}else{
		echo "Invalid Login Information";
	}
}




?>