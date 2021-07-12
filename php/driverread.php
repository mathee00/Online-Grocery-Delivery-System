<html>
<head>
</head>
<body>


<table border = "1" style="font-family:verdana;"></center>


<?php

require 'config.php';


function readData(){
	
	global $con;
    $read = "SELECT Driver_Name,Address,Vehicle_Type,Driver_Email,Phone_Number,Driver_Licence_Number,Vehicle_Registration_Number,Password FROM driver_registration";
    $result = $con->query($read);
    if ($result->num_rows > 0) 
    {
		echo "<tr><th> Driver_Name </th><th> Address </th><th> Vehicle_Type </th><th> Driver_Email </th><th>Phone_Number</th><th>Driver_Licence_Number</th><th>Vehicle_Registration_Number</th><th>Password</th></tr>";
        while($row = $result->fetch_assoc()) 
			
        {			
					echo "<tr><form action='driverupdate.php' method='POST'>";
					echo"<td><input type='text' name='fname' value=".$row["Driver_Name"]."></td>";
					echo"<td><input type='text' name='address' value=".$row["Address"]."></td>";
					echo"<td><input type='text' name='vehicletype' value=".$row["Vehicle_Type"]."></td>";
					echo"<td><input type='text' name='email' value=".$row["Driver_Email"]."></td>";
					echo"<td><input type='text' name='pnumber' value=".$row["Phone_Number"]."></td>";
					echo"<td><input type='text' name='DLnumber' value=".$row["Driver_Licence_Number"]."></td>";
					echo"<td><input type='text' name='VRnumber' value=".$row["Vehicle_Registration_Number"]."></td>";
					echo"<td><input type='text' name='password' value=".$row["Password"]."></td>";
					echo"<td><input type='submit' name='update' value='Update' id='updt'></td></form>";
					echo "</tr>";

				

					echo"<tr><form action='driverdelete.php' method='POST'>";
					echo"<td><input type='text' name='fname' value=".$row["Driver_Name"]."></td>";
					echo"<td><input type='text' name='address' value=".$row["Address"]."></td>";
					echo"<td><input type='text' name='vehicletype' value=".$row["Vehicle_Type"]."></td>";
					echo"<td><input type='text' name='email' value=".$row["Driver_Email"]."></td>";
					echo"<td><input type='text' name='pnumber' value=".$row["Phone_Number"]."></td>";
					echo"<td><input type='text' name='DLnumber' value=".$row["Driver_Licence_Number"]."></td>";
					echo"<td><input type='text' name='VRnumber' value=".$row["Vehicle_Registration_Number"]."></td>";
					echo"<td><input type='text' name='password' value=".$row["Password"]."></td>";
					echo"<td><input type='submit' name='delete' value='Delete' id='delt'></td></form>";
					echo "</tr>";

									 
        }

	}
    else 
    {
        echo "No results";
    }
  

}
readData();

$con -> close();

?>

</table>




</body>
</html>