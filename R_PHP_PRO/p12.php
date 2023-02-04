<body>
	<form method="post" action="">
		<label>Enter the Number</label><br/><br/>
		<input type="number" name="number"><br/><br/>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
<?php
	if(isset($_POST['submit'])){
		$number=$_POST['number'];
		echo "You have Entered $number.<br/>";
		if($number<10)
			echo "It is Single Digit";
		else if($number>10 and $number<100)
			echo "It is Double Digit";
		else if($number>100 and $number<1000)
			echo "It is Triple Digit";
		else if($number>1000 and $number<10000)
			echo "It is Four Digit";
		else if($number>10000)
			echo "It is More than Four Digits";
	}

?>