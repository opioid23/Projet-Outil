<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Vente de Billets</title>
    <link rel="stylesheet" href="theme.css">
    <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSBKBtGJlT_jSr1DaLRwApuU4ouGr2ModSOrQ&usqp=CAU">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body onload="javascript:refreshCaptcha()">
   <?php include 'menu.php'?>
  <main>
    <section class="spectacle">
      <h2>Concert de Coldplay</h2>
      <div class="description">
        <p>
          Assistez au concert de Coldplay, l'un des plus grands groupes de rock au monde. Avec des chansons comme "Viva la Vida", "Clocks" et "Paradise", ce concert promet d'être un spectacle musical épique.
        </p>
      </div>
      <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.FKWDFaayf1FlAIuaBRwlZwHaEj%26pid%3DApi&f=1&ipt=a09a3b3cc77e84cc277960991119e6d123d4567086247f634e55e8df5bb34924&ipo=images" alt="Concert de Coldplay">
      <p>Date: 1 mai 2023</p>
      <p>Heure: 20h00</p>
      <p>Lieu: Stade de France</p>
      <p>Prix: €80</p>
      <form>
        <label for="quantite-1">Quantité:</label>
        <input type="number" id="quantite-1" name="quantite" min="1" max="10">
        <button type="submit">Ajouter au panier</button>
      </form>
    </section>

    <section class="spectacle">
      <h2>Concert de Beyoncé</h2>
      <div class="description">
        <p>
          Ne manquez pas le concert de la reine de la pop, Beyoncé. Avec des hits tels que "Crazy in Love", "Single Ladies" et "Halo", cette soirée sera inoubliable.
        </p>
      </div>
      <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fapi.time.com%2Fwp-content%2Fuploads%2F2014%2F09%2Fbeyonce-191.jpg&f=1&nofb=1&ipt=cbca03a26a0d37ad46be3f7a27b63411adabfe9c40af3bffdd152caed866e383&ipo=images" alt="Concert de Beyoncé">
      <p>Date: 5 mai 2023</p>
      <p>Heure: 20h00</p>
      <p>Lieu: Stade de France</p>
      <p>Prix: €80</p>
      <form>
        <label for="quantite-1">Quantité:</label>
        <input type="number" id="quantite-1" name="quantite" min="1" max="10">
        <button type="submit">Ajouter au panier</button>
      </form>
    </section>
    <section class="spectacle">
          <form action="cart.php" method="post">
      <label for="event1">Event 1</label>
      <input type="number" name="event1" id="event1" min="0"><br>
      <label for="event2">Event 2</label>
      <input type="number" name="event2" id="event2" min="0"><br>
      <label for="event3">Event 3</label>
      <input type="number" name="event3" id="event3" min="0"><br>
      <input type="submit" value="Add to Cart">
    </form>
    </section>