<html>
<head></head>
<body>


<?php

require 'config.php';

$groceryname =$_POST['gname'];
$groceryownername =$_POST['oname'];
$email =$_POST['email'];
$address =$_POST['address'];
$phonenumber=$_POST['pnumber'];
$GroceryRegistrationNo=$_POST['GRnumber'];
$password=$_POST['password'];


$sqls="INSERT INTO shop_registration(Grocery_Name,Grocery_Owners_Name,Grocery_Email,Grocery_Address,Phone_Number,Grocery_Registration_No,Password) VALUES('$groceryname','$groceryownername','$email','$address','$phonenumber','$GroceryRegistrationNo','$password')";

if($con -> query($sqls)){
	echo "Inserted Successfully.<br/><br/> ";
}
else{
	echo "Error:".$con->error;
}

$con -> close();

?>

<form action="shopread.php" method="POST">
<input type="submit" value="Read">
</form>
</body>
</html>