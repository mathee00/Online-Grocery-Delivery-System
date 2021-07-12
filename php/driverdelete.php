<?php

	
require 'config.php';
	
if(isset($_POST['delete'])){

$drivername =$_POST['fname'];
$address =$_POST['address'];
$vehicletype=$_POST['vehicletype'];
$email =$_POST['email'];
$phonenumber=$_POST['pnumber'];
$DriverLicenceNumber=$_POST['DLnumber'];
$VehicleRegistrationnumber=$_POST['VRnumber'];
$password=$_POST['password'];

	
	
$sql = "DELETE FROM driver_registration WHERE Vehicle_Registration_Number = '$VehicleRegistrationnumber'";
	
if($con ->query($sql)){
	echo "Deleted Successfully.<br/><br/><br/>";
}
else{
	echo "Error:".$con->error;
}
}
		
?>