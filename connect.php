
<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$con = new mysqli($servername, $username, $password);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
    exit();
}
//echo "Connected successfully";

$con = mysqli_connect('localhost', 'root', '');
if (!$con){
    die("Database Connection Failed".mysqli_error($con));
    exit();
}
$select_conn = mysqli_select_db($con, 'walmart');
if (!$select_conn){
    die("Database Selection Failed".mysqli_error($con));
    exit();
}
$select_conn=mysqli_connect('localhost', 'root', '','walmart');
?>
