<html>
    <body>
        <?php
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="user_admin";

        $conn = new mysqli($servername , $username , $password, $dbname);
        if (isset($_POST['register'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $role = $_POST['role'];

            $sql = "INSERT INTO users (username, password, role)VALUES
            ('$username','$password','$role')";
            if ($conn -> query($sql) === TRUE){
                echo "Registration succesful.";
            }else {
                echo "error: " . $conn->error;
            }
        }
        
        if (isset($_POST['login'])){
            echo "asd";
            $username = $_POST['username']; 
            $password = $_POST['password'];
            $sql = "SELECT * FROM users";
            $data = $conn -> query($sql);
            while($row = $data -> fetch_assoc()){
                if ($username == $row['username'] and $password == $row['password'])
                { 
                    session_start();
                    $_SESSION['username']=$username;
                    $_SESSION['role'] = $row['role'];
                    echo "username: ".$row['username']."<br>";
                    if ($row['role'] === 'admin'){
                        echo "Welcome, Admin!";
                    } else {
                        echo "Welcome, user!";

                    }
                    
                }else { 
                    echo " Invalid username or password.";
                }
            }
        }
        $conn ->close();

    ?>
    </body>
</html>

 
