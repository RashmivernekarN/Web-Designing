<?php
if(isset($_GET['submit'])){
	$username=$_GET['username'];
	$password=$_GET['password'];
	if($username==='vijay' and $password==='1234'){
		//header("location:http://facebook.com");
		echo "Login Successful";
	}else{
		echo "Invalid Login Information";
	}
}

?>