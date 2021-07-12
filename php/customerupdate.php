<?php

require 'config.php';



if(isset($_POST['update'])){
	
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



$sql  = "UPDATE customer_registration SET First_Name='$firstname',Last_Name='$lastname',Gender='$gender',Date_of_Birth='$dateofbirth',Phone_Number='$phonenumber',Address='$address',Email='$email',User_Name='username',Password='$password' WHERE User_ID = '$userid '";

if($con ->query($sql)){
	echo "Updated Successfully.<br/><br/><br/>";
}
else{
	echo "Error:".$con->error;
}
}

$con -> close();

?>