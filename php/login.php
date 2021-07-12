<?php

	$Email=$_POST['Email'];
	$Password=$_POST['Password'];
	
	$conn=new mysqli("localhost","root","","online_grocery_delivery_management_system");
	if ($conn->connect_error){
		die("Failed to connect:".$conn->connect_error);
	}
	else{
		$stmt=$conn->prepare("select * from customer_registration where Email=?");
		$stmt->bind_param("s",$Email);
		$stmt->execute();
		$stmt_result=$stmt->get_result();
		if($stmt_result->num_rows>0){
			$data=$stmt_result->fetch_assoc();
			if($data['Password']===$Password){
				
			echo"<script>alert ('LogIn Succefull')</script>";
			header("Location:../html/home.html");
			}else{
				echo"<script>alert ('Invalid Email or Password')</script>";
				header("Location:../html/login.html");
			}
		}else{
			echo"<script>alert ('Invalid Email or Password')</script>";
			header("Location:../html/login.html");
		}
		}
?>