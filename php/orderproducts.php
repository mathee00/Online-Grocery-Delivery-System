<?php
    /* Host name of the MySQL server */
    $host = 'localhost';
    
    /* MySQL account username */
    $user = 'root';
    
    /* MySQL account password */
    $passwd = '';
    
    /* The schema you want to use */
    $schema = 'online_grocery_delivery_management_system';
    
    /* Connection with MySQLi, procedural-style */
    $mysqli = mysqli_connect($host, $user, $passwd, $schema);
    
    /* Check if the connection succeeded */
    if (!$mysqli)
    {
       echo 'Connection failed<br>';
       echo 'Error number: ' . mysqli_connect_errno() . '<br>';
       echo 'Error message: ' . mysqli_connect_error() . '<br>';
       die();
    }
    
    //echo 'Successfully connected!<br>';

    //$sql_stmt = "SELECT * FROM order_products where order_id = 25001"; 
    $sql_stmt = "SELECT p.name, op.price, op.quantity, op.discount, op.total FROM order_products op, products p  where order_id = 25001 AND op.product_id = p.id";
    //SQL select query 
    
     $result = mysqli_query($mysqli,$sql_stmt);
     //execute SQL statement 
     
    if (!$result)     
        die("Database access failed: " . mysqli_error()); 
        //output error message if query execution failed 
        
        $rows = mysqli_num_rows($result); 
        // get number of rows returned 
    

    
    if ($rows) {     
        echo'
        <table class="center">
        <tr>
          <th>Product Name</th>
          <th>Price</th>
          <th>Quantity </th>
          <th>Discount </th>
          <th>Total </th>
        </tr>
        ';

        while ($row = mysqli_fetch_array($result)) {         
            echo '<tr><td>' . $row['name'] . '<br></td>';
            echo '<td>' . $row['price'] . '<br></td>';
            echo '<td>' . $row['quantity'] . '<br></td>';         
            echo '<td>' . $row['discount'] . '<br></td>';        
            echo '<td>' . $row['total'] . '<br></td></tr>';
        } 

        echo'</table>';
    } 
mysqli_close($mysqli); //close the database connection 
?>