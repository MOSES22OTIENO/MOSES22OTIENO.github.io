<?php
$host = "localhost";
$username = "root";
$password = "mysql@22otieno.";
$database = "secure_e_voting_system";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
    echo "";
}
 // Close database connection
 
?>