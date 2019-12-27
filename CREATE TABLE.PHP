<html>
          <body>
          <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $database="swades";

                    
                    $conn = new mysqli($servername, $username, $password,$database);
                    if ($conn->connect_error)
                    {
                              die("Connection failed: " . $conn->connect_error);
                    } 
                    $sql = "CREATE TABLE teamsize(
                              UNIQUE_ID VARCHAR(50) NOT NULL,
                              TEAMNAME VARCHAR(100) NOT NULL,
                              NAME VARCHAR(30),
                              COLLEGE VARCHAR(30),
                              CONTACT INT(12),
                              EAMIL VARCHAR(50),
                              ZONE VARCHAR(30)
                              )";

                    if ($conn->query($sql) === TRUE)
                    {
                              echo "Table created successfully";
                    } 
                    else 
                    {
                              echo "Error creating Table: " . $conn->error;
                    }

                    $conn->close();
          ?>
          </body>
</html>