<?php

require 'config.php';



if(isset($_POST['update'])){
	
$groceryname =$_POST['gname'];
$groceryownername =$_POST['oname'];
$email =$_POST['email'];
$address =$_POST['address'];
$phonenumber=$_POST['pnumber'];
$GroceryRegistrationNo=$_POST['GRnumber'];
$password=$_POST['password'];



$sql  = "UPDATE shop_registration SET Grocery_Name='$groceryname',Grocery_Owners_Name='$groceryownername',Grocery_Email='$email',Grocery_Address='$address',Phone_Number='$phonenumber',Grocery_Registration_No='$GroceryRegistrationNo',Password='$password' WHERE Grocery_Registration_No='$GroceryRegistrationNo'";

if($con ->query($sql)){
	echo "Updated Successfully.<br/><br/><br/>";
}
else{
	echo "Error:".$con->error;
}
}

$con -> close();

?>