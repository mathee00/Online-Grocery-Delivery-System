<?php

	
	require 'config.php';
	
	if(isset($_POST['delete'])){

$name =$_POST['name'];
$email =$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];
	
	
	
	
	$sql = "DELETE FROM contact_us WHERE Email = '$email'";
	
if($con ->query($sql)){
	echo "Deleted Successfully.<br/><br/><br/>";
}
else{
	echo "Error:".$con->error;
}
}
		
?>