<?php

	
require 'config.php';
	
if(isset($_POST['delete'])){

$userid =$_POST['userid'];
$firstname =$_POST['fname'];
$lastname =$_POST['lname'];
$gender=$_POST['gender'];
$dateofbirth=$_POST['dob'];
$phonenumber=$_POST['pnumber'];
$address =$_POST['address'];
$email =$_POST['email'];
$username=$_POST['uname'];
$password=$_POST['password'];

	
	
	
	
$sql = "DELETE FROM customer_registration WHERE User_ID = '$userid'";
	
if($con ->query($sql)){
	echo "Deleted Successfully.<br/><br/><br/>";
}
else{
	echo "Error:".$con->error;
}
}
		
?>