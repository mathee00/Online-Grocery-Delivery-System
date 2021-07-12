<html>
<head>
</head>
<body>


<table border = "1" style="font-family:verdana;"></center>


<?php

require 'config.php';


function readData(){
	
	global $con;
    $read = "SELECT Name,Email,Phone_Number,Message FROM contact_us";
    $result = $con->query($read);
    if ($result->num_rows > 0) 
    {
		echo "<tr><th>Name</th><th>Email </th><th>Phone_Number</th><th>Message</th></tr>";
        while($row = $result->fetch_assoc()) 
			
        {			
					echo "<tr><form action='contactupdate.php' method='POST'>";
					echo"<td><input type='text' name='name' value=".$row["Name"]."></td>";
					echo"<td><input type='text' name='email' value=".$row["Email"]."></td>";
					echo"<td><input type='text' name='phone' value=".$row["Phone_Number"]."></td>";
					echo"<td><input type='text' name='message' value=".$row["Message"]."></td>";
					echo"<td><input type='submit' name='update' value='Update' id='updt'></td></form>";
					echo "</tr>";

				

					echo"<tr><form action='contactdelete.php' method='POST'>";
					echo"<td><input type='text' name='name' value=".$row["Name"]."></td>";
					echo"<td><input type='text' name='email' value=".$row["Email"]."></td>";
					echo"<td><input type='text' name='phone' value=".$row["Phone_Number"]."></td>";
					echo"<td><input type='text' name='message' value=".$row["Message"]."></td>";
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