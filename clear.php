<?php
// Connect to the database
$servername = "localhost";
$username = "username";
$password = "aaa";
$dbname = "ticket_reservation";
$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "TRUNCATE TABLE ticket_orders";
$conn->query($sql);


header("Location: cart.php");
exit;

$conn->close();
?>
