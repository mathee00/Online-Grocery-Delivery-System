<html>
<head></head>
<body>

<?php

require 'config.php';

$name =$_POST['name'];
$email =$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];

$sql="INSERT INTO contact_us(Name,Email,Phone_Number,Message) VALUES('$name','$email','$phone','$message')";



if($con -> query($sql)){
	echo "Inserted Successfully.<br/><br/> ";
}
else{
	echo "Error:".$con->error;
}

$con -> close();

?>

<form action="contactread.php" method="POST">
<input type="submit" value="Read">
</form>
</body>
</html>