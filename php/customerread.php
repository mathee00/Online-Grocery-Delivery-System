<html>
<head>
</head>
<body>


<table border = "1" style="font-family:verdana;"></center>


<?php

require 'config.php';


function readData(){
	
	global $con;
    $read = "SELECT User_ID,First_Name,Last_Name,Gender,Date_of_Birth,Phone_Number,Address,Email,User_Name,Password FROM customer_registration";
    $result = $con->query($read);
    if ($result->num_rows > 0) 
    {
		echo "<tr><th> User_ID </th><th> First_Name </th><th> Last_Name </th><th> Gender </th><th>Date_of_Birth</th><th> Phone_Number </th><th> Address </th><th> Email </th><th> User_Name </th><th> Password </th></tr>";
        while($row = $result->fetch_assoc()) 
			
        {			
					echo "<tr><form action='customerupdate.php' method='POST'>";
					echo"<td><input type='text' name='userid' value=".$row["User_ID"]."></td>";
					echo"<td><input type='text' name='fname' value=".$row["First_Name"]."></td>";
					echo"<td><input type='text' name='lname' value=".$row["Last_Name"]."></td>";
					echo"<td><input type='text' name='gender' value=".$row["Gender"]."></td>";
					echo"<td><input type='text' name='dob' value=".$row["Date_of_Birth"]."></td>";
					echo"<td><input type='text' name='pnumber' value=".$row["Phone_Number"]."></td>";
					echo"<td><input type='text' name='address' value=".$row["Address"]."></td>";
					echo"<td><input type='text' name='email' value=".$row["Email"]."></td>";
					echo"<td><input type='text' name='uname' value=".$row["User_Name"]."></td>";
					echo"<td><input type='text' name='password' value=".$row["Password"]."></td>";
					echo"<td><input type='submit' name='update' value='Update' id='updt'></td></form>";
					echo "</tr>";

				

					echo"<tr><form action='customerdelete.php' method='POST'>";
					echo"<td><input type='text' name='userid' value=".$row["User_ID"]."></td>";
					echo"<td><input type='text' name='fname' value=".$row["First_Name"]."></td>";
					echo"<td><input type='text' name='lname' value=".$row["Last_Name"]."></td>";
					echo"<td><input type='text' name='gender' value=".$row["Gender"]."></td>";
					echo"<td><input type='text' name='dob' value=".$row["Date_of_Birth"]."></td>";
					echo"<td><input type='text' name='pnumber' value=".$row["Phone_Number"]."></td>";
					echo"<td><input type='text' name='address' value=".$row["Address"]."></td>";
					echo"<td><input type='text' name='email' value=".$row["Email"]."></td>";
					echo"<td><input type='text' name='uname' value=".$row["User_Name"]."></td>";
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