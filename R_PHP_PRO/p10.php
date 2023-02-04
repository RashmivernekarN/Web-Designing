<?php
$amount=50000;
$withdrawal=6000;

if($withdrawal>$amount){
	echo "Insufficiant Funds";
}else{
	echo "Available Amount is : ".($amount-$withdrawal); 
}
?>