สวัสสดี
<?php
$servername = "us-cdbr-iron-east-01.cleardb.net";
$username = "b29f0890a17ad7";
$password = "4a61b4e1";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

 
$conn->close();
?> 