<body>
	<form method="post" action="">
		<label>Enter the Number from 1 to 3</label>
		<input type="number" name="number"><br/><br/>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
<?php
if(isset($_POST['submit'])){
	$number=$_POST['number'];
	switch ($number) {
		case '1':
			echo "List of Animals <br/>";
			echo "1. Dog";
			break;
		case '2':
			echo "List of Flowers <br/>";
			echo "1. Lotus";
			break;
		case '3':
			echo "List of Colors <br/>";
			echo "1. Red";
			break;	
		default:
			echo "Invalid Number";
			break;
	}	
}
?>