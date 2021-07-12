<?php

require 'config.php';



if(isset($_POST['update'])){

$name =$_POST['name'];
$email =$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];



$sql  = "UPDATE contact_us SET Name='$name',Email='$email',Phone_Number='$phone',Message='$message' WHERE Email = '$email '";

if($con ->query($sql)){
	echo "Updated Successfully.<br/><br/><br/>";
}
else{
	echo "Error:".$con->error;
}
}

$con -> close();

?>