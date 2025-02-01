<html>
    <body>
        <?php
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="user_admin";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if (!$conn) {
            die("Connection failed:".mysqli_connect_error());
        
        }
        printf("Connected Successful!");
        $sql= "CREATE TABLE users (
            id INT AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(50) NOT NULL,
            password VARCHAR(255) NOT NULL,
            role ENUM('user' , 'admin') NOT NULL
        )";
        $conn ->query($sql);
        ?>
        </html>
    </body>