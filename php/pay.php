<?php
        $servername="localhost";
        $username="root";
        $password="";
        $db="payment";
        //create the connection
 		
        $con= new mysqli($servername,$username,  $password,$db);
        //check the connection

        if($con->connect_error)
        {
            die("Failed to connect" .$con->connect_error);
        }
        else "Successfully connected";

    
        if(isset($_POST['sub']))
        {
            $name=$_POST['id3'];
            $crdno=$_POST['id4'];
            $exdate=$_POST['id5'];
            $pass=$_POST['id6'];
            //write query
            $query ="INSERT INTO pay(NAME,CARD_NUMBER,EX_DATE,PASS) VALUES ('$name',' $crdno','$exdate',' $pass')";
            
            mysqli_query($con,$query);
            
            header('location:confirm.html');
        }


?>