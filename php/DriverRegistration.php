<html>
<head></head>
<body>

<?php

require 'config.php';

$drivername =$_POST['fname'];
$address =$_POST['address'];
$vehicletype=$_POST['vehicletype'];
$email =$_POST['email'];
$phonenumber=$_POST['pnumber'];
$DriverLicenceNumber=$_POST['DLnumber'];
$VehicleRegistrationnumber=$_POST['VRnumber'];
$password=$_POST['password'];


$sqld="INSERT INTO driver_registration(Driver_Name,Address,Vehicle_Type,Driver_Email,Phone_Number,Driver_Licence_Number,Vehicle_Registration_Number,Password) VALUES('$drivername','$address','$vehicletype','$email','$phonenumber','$DriverLicenceNumber','$VehicleRegistrationnumber','$password')";

if($con -> query($sqld)){
	echo "Inserted Successfully.<br/><br/> ";
}
else{
	echo "Error:".$con->error;
}

$con -> close();

?>
<form action="driverread.php" method="POST">
<input type="submit" value="Read">
</form>
</body>
</html>