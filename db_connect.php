<!DOCTYPE html>
<html>
<body>

<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$pass = $_POST['pass'];


$servername = "localhost";
$user_name = "Ojas";
$password = "admin123";
$dbname = "wpl";


// Create connection
$conn = new mysqli($servername, $user_name, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else
echo "Connected successfully";
}

?>

</body>
</html>