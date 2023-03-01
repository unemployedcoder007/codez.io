<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
</head>
 
<body>
<?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "codez");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $f_name =  $_REQUEST['f_name'];
        $s_name = $_REQUEST['s_name'];
        $email = $_REQUEST['email'];
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO register  VALUES ('$f_name',
            '$s_name','$email')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>THANKS!</h3>"
			."<h4>FOR REACHING OUT</h4>";

			echo "<p>I'll contact you soon!</p>";

            
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
		</body>
 
 </html>