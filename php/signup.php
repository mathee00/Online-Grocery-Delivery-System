<html>
<head></head>
<body>


<?php

require 'config.php';

$firstname =$_POST['fname'];
$lastname =$_POST['lname'];
$gender=$_POST['gender'];
$dateofbirth=$_POST['dob'];
$phonenumber=$_POST['pnumber'];
$address =$_POST['address'];
$email =$_POST['email'];
$username=$_POST['uname'];
$password=$_POST['password'];

$sqlr="INSERT INTO customer_registration(First_Name,Last_Name,Gender,Date_of_Birth,Phone_Number,Address,Email,User_Name,Password) VALUES('$firstname','$lastname','$gender','$dateofbirth','$phonenumber','$address','$email','$username','$password')";

if($con -> query($sqlr)){
	echo "Inserted Successfully.<br/><br/> ";
}
else{
	echo "Error:".$con->error;
}

$con -> close();

?>
<form action="customerread.php" method="POST">
<input type="submit" value="Read">
</form>
</body>
</html>