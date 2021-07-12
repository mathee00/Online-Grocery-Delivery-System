<?php

require 'config.php';



if(isset($_POST['update'])){
	
$drivername =$_POST['fname'];
$address =$_POST['address'];
$vehicletype=$_POST['vehicletype'];
$email =$_POST['email'];
$phonenumber=$_POST['pnumber'];
$DriverLicenceNumber=$_POST['DLnumber'];
$VehicleRegistrationnumber=$_POST['VRnumber'];
$password=$_POST['password'];




$sql  = "UPDATE driver_registration SET Driver_Name='$drivername',Address='$address',Vehicle_Type='$vehicletype',Driver_Email='$email',Phone_Number='$phonenumber',Driver_Licence_Number='$DriverLicenceNumber',Vehicle_Registration_Number='$VehicleRegistrationnumber',Password='$password' WHERE Vehicle_Registration_Number = '$VehicleRegistrationnumber'";

if($con ->query($sql)){
	echo "Updated Successfully.<br/><br/><br/>";
}
else{
	echo "Error:".$con->error;
}
}

$con -> close();

?>