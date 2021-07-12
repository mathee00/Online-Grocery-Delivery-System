<?php

$con = new mysqli("localhost","root","","online_grocery_delivery_management_system");

if($con ->connect_error)
{
	die("Connection failed:".$con->connect_error);
}



?>