<!DOCTYPE html>
<html>
<body>
<?php
//MySQL 5.5 info. You need to change them
$servername = "Put Your DBhostname Here";
$username = "YourDBUsername";
$password = "YourDBUserPassword";
$dbname = "YourDBName";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection 
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

?>  

</body>
</html>