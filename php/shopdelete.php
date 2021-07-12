<?php

	
require 'config.php';
	
if(isset($_POST['delete'])){

$groceryname =$_POST['gname'];
$groceryownername =$_POST['oname'];
$email =$_POST['email'];
$address =$_POST['address'];
$phonenumber=$_POST['pnumber'];
$GroceryRegistrationNo=$_POST['GRnumber'];
$password=$_POST['password'];

	
	
$sql = "DELETE FROM shop_registration WHERE Grocery_Registration_No='$GroceryRegistrationNo'";
	
if($con ->query($sql)){
	echo "Deleted Successfully.<br/><br/><br/>";
}
else{
	echo "Error:".$con->error;
}
}
		
?>