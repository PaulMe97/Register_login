<html>
    <body>
        <?php
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="user_admin";
        $conn = new mysqli($servername , $username , $password, $dbname);
            session_start();
            if (!isset ($_SESSION['username']) || !iseet($_SESSION['role'])){
            header('Location: register_login.php');
            exit();
            
        }
        $username =$_SESSION['username'];
        $role = $_SESSION['role'];
        function show_dashboard($role){
            if($role === 'admin'){
                echo "<h2>Admin Panel</h2>";
                echo "<p> Welcome, Admin! Here you can manage the system.</p>";
                echo "<ul?
                <li><a hrefs'manage_users.php'>Manage Users</a></li>
                <li><a hrefs'settings.php'>Settings</a></li>
                <li><a hrefs'logout.php'>Logout</a></li>
                </ul>";
            }elseif($role === 'user'){
                echo "<h2>User Dashboard</h2>";
                echo "<p>Welcome ". "! This is your dashboard.</p>";
                echo "<ul>
                <li><a hrefs'profile.php'>View Profile</a></li>
                <li><a hrefs'settings.php'>Settings</a></li>
                <li><a hrefs'logout.php'>Logout</a></li>
                </ul>";
                } else {
                    echo "<p>Uknown role.Please contact support.</p>";
                }
        }
        ?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
        <?php show_dashboard($role);?>
    </body>
    </html>