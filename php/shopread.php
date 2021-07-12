<html>
<head>
</head>
<body>


<table border = "1" style="font-family:verdana;"></center>


<?php

require 'config.php';


function readData(){
	
	global $con;
    $read = "SELECT Grocery_Name,Grocery_Owners_Name,Grocery_Email,Grocery_Address,Phone_Number,Grocery_Registration_No,Password FROM shop_registration";
    $result = $con->query($read);
    if ($result->num_rows > 0) 
    {
		echo "<tr><th> Grocery_Name </th><th> Grocery_Owners_Name</th><th> Grocery_Email </th><th> Grocery_Address</th><th>Phone_Number</th><th>Grocery_Registration_No</th><th>Password</th></tr>";
        while($row = $result->fetch_assoc()) 
			
        {			
					echo "<tr><form action='shopupdate.php' method='POST'>";
					echo"<td><input type='text' name='gname' value=".$row["Grocery_Name"]."></td>";
					echo"<td><input type='text' name='oname' value=".$row["Grocery_Owners_Name"]."></td>";
					echo"<td><input type='text' name='email' value=".$row["Grocery_Email"]."></td>";
					echo"<td><input type='text' name='address' value=".$row["Grocery_Address"]."></td>";
					echo"<td><input type='text' name='pnumber' value=".$row["Phone_Number"]."></td>";
					echo"<td><input type='text' name='GRnumber' value=".$row["Grocery_Registration_No"]."></td>";
					echo"<td><input type='text' name='password' value=".$row["Password"]."></td>";
					echo"<td><input type='submit' name='update' value='Update' id='updt'></td></form>";
					echo "</tr>";

				

					echo"<tr><form action='shopdelete.php' method='POST'>";
					echo"<td><input type='text' name='gname' value=".$row["Grocery_Name"]."></td>";
					echo"<td><input type='text' name='oname' value=".$row["Grocery_Owners_Name"]."></td>";
					echo"<td><input type='text' name='email' value=".$row["Grocery_Email"]."></td>";
					echo"<td><input type='text' name='address' value=".$row["Grocery_Address"]."></td>";
					echo"<td><input type='text' name='pnumber' value=".$row["Phone_Number"]."></td>";
					echo"<td><input type='text' name='GRnumber' value=".$row["Grocery_Registration_No"]."></td>";
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