<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Contactez-nous</title>
	<link rel="stylesheet" href="theme.css">
</head>
<body>
<?php include 'menu.php'?>
	<section>
	<form id="contact-form" action="" method="post">
      <label for="name">Nom:</label>
      <input type="text" id="name" name="name" required><br>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required><br>

      <label for="subject">Sujet:</label>sss
      <input type="text" id="subject" name="subject" required><br>

      <label for="message">Message:</label><br>
      <textarea id="message" name="message" rows="5" cols="40" required></textarea><br>

      <input type="submit" value="Envoyer">
    </form>
	</section>
	<footer>
		<p>Tous droits réservés © 2023 SeatBooker</p>
	</footer>
	<script src="contact.js"></script>
</body>
</html>
