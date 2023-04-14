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
      <h2>Les Misérables</h2>
      <div class="description">
        <p>
          "Les Misérables" est une comédie musicale épique qui raconte l'histoire de Jean Valjean, un ancien bagnard qui
          cherche la rédemption dans la France du 19ème siècle. Le spectacle est connu pour son enchevêtrement d'histoires
          personnelles, qui incluent la lutte pour la liberté, la poursuite de la justice, et la romance. La production
          est caractérisée par des décors grandioses et des costumes élaborés, ainsi que par une bande sonore émotionnelle
          et des chorégraphies envoûtantes. Les Misérables est considérée comme l'une des plus grandes comédies musicales
          de tous les temps, avec plus de 70 millions de spectateurs à travers le monde.
        </p>
      </div>
      <img src="https://seatplan.com/cdn/images/show/les-miserables-hero-710wx355h-1674565069.jpg" alt="Les Misérables">
      <p>Date: 10 avril 2023</p>
      <p>Heure: 20h00</p>
      <p>Lieu: Sondheim Theatre</p>
      <p>Prix: £47.50</p>
      <form>
        <label for="quantite-1">Quantité:</label>
        <input type="number" id="quantite-1" name="quantite" min="1" max="10">
        <button type="submit">Ajouter au panier</button>
      </form>
    </section>

    <section class="spectacle">
      <h2>La Belle et La Bête</h2>
      <div class="description">
        <p>
          "La Belle et la Bête" est une pièce de théâtre qui raconte l'histoire d'une jeune fille nommée Belle, qui se
          retrouve prisonnière dans le château d'une bête monstrueuse, en échange de la liberté de son père. Au fil de
          l'histoire, Belle apprend à connaître la Bête et découvre que derrière son apparence terrifiante se cache un
          être doux et aimant. La pièce est remplie de moments magiques et de personnages hauts en couleur, offrant un
          spectacle visuellement magnifique et émouvant.
        </p>
      </div>
      <img src="https://britishtheatre.com/wp-content/uploads/2020/09/beauty-and-the-beast-uk-tour.jpg" alt="La belle et la bete">
      <p>Date: 15 avril 2023</p>
      <p>Heure: 19h00</p>
      <p>Lieu: London Palladium</p>
      <p>Prix: £35</p>
      <form>
        <label for="quantite-2">Quantité:</label>
        <input type="number" id="quantite-2" name="quantite" min="1" max="10">
        <button type="submit">Ajouter au panier</button>
      </form>
    </section>

    <section class="spectacle">
      <h2>Le Fantôme de l'Opéra</h2>
      <div class="description">
        <p>
          "Le Fantôme de l'Opéra" est une pièce de théâtre qui raconte l'histoire du mystérieux Fantôme qui hante
          l'Opéra Garnier de Paris. Il tombe amoureux de la jeune soprano Christine Daaé et lui offre sa protection,
          mais elle est déjà amoureuse du vicomte Raoul de Chagny. Le Fantôme devient jaloux et cherche à saboter leur
          relation. La pièce offre un mélange de romance, de drame et de suspense, avec une musique envoûtante et des
          décors grandioses représentant l'opéra et ses coulisses.
        </p>
      </div>
      <img src="https://cdn.londonandpartners.com/asset/the-phantom-of-the-opera-musical-at-her-majestys-theatre_phantom-of-the-opera-image-courtesy-of-cameron-mackintosh_240b6958e824776c4b4b222d72281b95.jpg" alt="Le fantome de l'opéra">
      <p>Date: 20 avril 2023</p>
      <p>Heure: 18h00</p>
      <p>Lieu: Her Majesty's Theatre</p>
      <p>Prix: £27.68</p>
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