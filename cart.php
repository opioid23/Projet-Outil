<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Votre panier</title>
  <link rel="stylesheet" href="theme.css">
</head>
<body>
<?php include 'menu.php'?>
  <section>
  <?php
// connection
$servername = "localhost";
$username = "username";
$password = "aaa";
$dbname = "ticket_reservation";
$conn = new mysqli($servername, $username, $password, $dbname);

//verifier la connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // ajouter la commande a la base de donnee
  $event1 = $_POST["event1"];
  $event2 = $_POST["event2"];
  $event3 = $_POST["event3"];
  $stmt = $conn->prepare("INSERT INTO ticket_orders (event_name, price_per_ticket, number_of_tickets) VALUES (?, ?, ?)");
  
  // Event 1
  if ($event1 > 0) {
    $event_name = "Event 1";
    $price_per_ticket = 10.00; 
    $stmt->bind_param("sdi", $event_name, $price_per_ticket, $event1);
    $stmt->execute();
  }
  
  // Event 2
  if ($event2 > 0) {
    $event_name = "Event 2";
    $price_per_ticket = 15.00;
    $stmt->bind_param("sdi", $event_name, $price_per_ticket, $event2);
    $stmt->execute();
  }
  
  // Event 3
  if ($event3 > 0) {
    $event_name = "Event 3";
    $price_per_ticket = 20.00; 
    $stmt->bind_param("sdi", $event_name, $price_per_ticket, $event3);
    $stmt->execute();
  }
}


$sql = "SELECT * FROM ticket_orders";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
  echo "<table>";
  echo "<tr><th>Nom de l'event</th><th>Prix par billet</th><th>Nombre de Billets</th></tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row["event_name"] . "</td>";
    echo "<td>" . $row["price_per_ticket"] . "</td>";
    echo "<td>" . $row["number_of_tickets"] . "</td>";
    echo "</tr>";
  }
  echo "</table>";
} else {
  echo "Vous n'avez pas encore commander de billet.";
}


echo "<form action=\"clear.php\" method=\"post\">";
echo "<input type=\"submit\" value=\"Vider le panier\">";
echo "</form>";

$conn->close();
?>
  </section>
  <footer>
    <p>Tous droits réservés © 2023 SeatBooker</p>
  </footer>
  <script src="contact.js"></script>
</body>
</html>
