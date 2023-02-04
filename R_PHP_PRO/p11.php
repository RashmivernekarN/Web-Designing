<?php
$account1="Savings";
$account2="Current";

echo "Types of Account <br/>";
echo "$account1 <br/>$account2";
?>
<body>
	<form method="POST" action="">		
		<input type="text" name="user_choice" placeholder="Enter your choice"><br/><br/>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
<?php
	if(isset($_POST['submit'])){
		if($_POST['user_choice']=='Savings'){
			echo " Savings Account is Created";
		}else
		if($_POST['user_choice']=='Current'){
			echo "Current Account is Created";
		}else{
			echo "Please Enter one of the Types of Account";
		}
	}
?>