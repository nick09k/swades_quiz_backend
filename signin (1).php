<?php 
          $servername = "localhost";
          $username = "root";
          $password = "";
          $database="EVAL1";

          
          $conn = new mysqli($servername, $username, $password,$database);
          if ($conn->connect_error)
          {
                    die("Connection failed: " . $conn->connect_error);
          } 
          $sql = "INSERT INTO customer_details( `username`, `b_date`, `gender`, `phone_Num`, `password`,`email`) 
          VALUES ('$_POST[name]', '$_POST[birthday]', '$_POST[gender]', '$_POST[phone]', '$_POST[password]', '$_POST[email]')";
        
        if ($conn->query($sql) === TRUE) {
          header("Location: newdexsuccess.php"); 
        
        } else {
          header("Location: newdexfailure.php"); 
        }



    $conn->close();
?>