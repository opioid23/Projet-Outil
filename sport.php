<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Vente de Billets</title>
    <link rel="stylesheet" href="theme.css">
    <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSBKBtGJlT_jSr1DaLRwApuU4ouGr2ModSOrQ&usqp=CAU">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <?php include 'menu.php'?>
  <main>
    <section class="spectacle">
      <h2>Football</h2>
      <div class="description">
        <p>
            Notre site propose une sélection de billets pour les matchs de football de certains des meilleurs clubs et
            ligues du monde entier. Que vous soyez un fan de la Premier League, de la Liga, de la Serie A, de la
            Bundesliga ou de tout autre championnat majeur, nous avons quelque chose pour vous.
            Merci de choisir notre site pour votre prochain match de football. Nous sommes impatients de vous aider à
            vivre une expérience inoubliable sur le terrain !
        </p>
      </div>
      <img src="https://lh3.googleusercontent.com/p/AF1QipOav3g0IsZm64D1WfAVsmhDtRg5SyY-9a4T3lU=s680-w680-h510" alt="Foortball">
      <p>Date: 5 avril 2023</p>
      <p>Heure: 20h00</p>
      <p>Lieu: Camp Nou</p>
      <p>Prix: £100</p>
      <form>
        <label for="quantite-1">Quantité:</label>
        <input type="number" id="quantite-1" name="quantite" min="1" max="10">
        <button type="submit">Ajouter au panier</button>
      </form>
    </section>

    <section class="spectacle">
      <h2>Basketball</h2>
      <div class="description">
        <p>
            Notre plateforme en ligne vous permet de réserver et d'acheter facilement des billets pour assister aux
            matchs de basketball les plus passionnants de la saison. Que vous soyez un fan inconditionnel ou un simple
            spectateur occasionnel, notre site est l'endroit idéal pour trouver les billets dont vous avez besoin.
            Merci de choisir notre site de vente de billets pour vos besoins en matière de billetterie.
            Nous avons hâte de vous aider à assister aux matchs de basketball les plus passionnants de la saison !
        </p>
      </div>
      <img src="https://dgh6pthnj75vb.cloudfront.net/uploads/2019/01/cropped-O2-arena-1.jpg" alt="Basket">
      <p>Date: 30 avril 2023</p>
      <p>Heure: 3h00</p>
      <p>Lieu: United Center</p>
      <p>Prix: £150</p>
      <form>
        <label for="quantite-2">Quantité:</label>
        <input type="number" id="quantite-2" name="quantite" min="1" max="10">
        <button type="submit">Ajouter au panier</button>
      </form>
    </section>

    <section class="spectacle">
      <h2>Tennis</h2>
      <div class="description">
        <p>
          Notre site propose une large sélection de billets pour les tournois de tennis majeurs, y compris Wimbledon,
          l'US Open, l'Open d'Australie, Roland-Garros et bien plus encore. Vous pouvez facilement parcourir notre
          sélection de billets en utilisant différentes options de recherche, telles que le lieu, le tournoi, la date
          et le joueur. Merci d'avoir choisi notre site de vente de billets pour vos besoins en matière de
          billetterie. Nous sommes impatients de vous aider à assister aux matchs de tennis les plus excitants de la saison !
        </p>
      </div>
      <img src="https://sites.tufts.edu/concretefatiguewind/files/2015/03/tennis-blue.jpg" alt="Tennis">
      <p>Date: 12 mai 2023</p>
      <p>Heure: 18h00</p>
      <p>Lieu: Arthur Ashe</p>
      <p>Prix: £200</p>
      <form>
        <label for="quantite-3">Quantité:</label>
        <input type="number" id="quantite-3" name="quantite" min="1" max="10">
        <button type="submit">Ajouter au panier</button>
      </form>
    </section>
  </main>

  <footer>
    <p>Durée Limitée</p>
  </footer>
</body>