<body>
	<form method="post" action="">
		<label>User Name </label>	
		<input type="text" name="username" placeholder="Enter User Name" required="required"><br/><br/>
		<label>Password</label>
		<input type="password" name="password" placeholder="Enter Password"><br/><br/>
		<input type="submit" name="submit" value="Login">
	</form>
</body>
<?php
	if(isset($_POST['submit'])){
		$username=$_POST['username'];
		$password=$_POST['password'];
		if($username==='vijay' and $password==="1234"){
			echo "Login Successful";
		}else{
			echo "Please Check Username and Password";
		}
	}

?>