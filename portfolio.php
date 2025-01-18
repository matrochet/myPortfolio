<!DOCTYPE html>
<html lang="fr-FR">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio - Matthieu Rochet</title>
    <link rel="stylesheet" href="portfolio.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <?php include("header.php"); ?>

    <main>
      <section class="portfolio">
        <h2>Mes Projets</h2>
        <div class="card-container">
          <!-- Projet 1 -->
          <div class="card">
            <img
              src="img/capture_ttt.png"
              alt="Aperçu du projet 1"
              class="card-image"
            />
            <span class="badge bg-warning">JavaScript</span>
            <div class="card-content">
              <h3>Tic-Tac-Toe</h3>
              <p>Un jeu du morpion pour 2 joueurs.</p>
              <a
                href="https://matrochet.github.io/tic_tac_toe_game/"
                class="btn-primary"
                target="_blank"
                >Voir le projet</a
              >
            </div>
          </div>
          <!-- Projet 2 -->
          <div class="card">
            <img
              src="img/capture_cc.png"
              alt="Aperçu du projet 2"
              class="card-image"
            />
            <span class="badge bg-warning">JavaScript</span>
            <div class="card-content">
              <h3>Convertisseur de devises</h3>
              <p>Convertisseur de devises en temps réel.</p>
              <a
                href="https://matrochet.github.io/currency_converter/"
                class="btn-primary"
                target="_blank"
                >Voir le projet</a
              >
            </div>
          </div>
          <!-- Projet 3 -->
          <div class="card">
            <img
              src="img/capture_ndp.jpeg"
              alt="Aperçu du projet 3"
              class="card-image"
            />
            <span class="badge text-bg-primary">HTML/CSS</span>
            <div class="card-content">
              <h3>Nose Dive project</h3>
              <p>TP de programmation web, formation PVMN.</p>
              <a
                href="https://matrochet.github.io/nose_dive_project/"
                class="btn-primary"
                target="_blank"
                >Voir le projet</a
              >
            </div>
          </div>
          <!-- Projet 4 -->
          <div class="card">
            <img
              src="img\capture_brickbreaker_js.png"
              alt="Aperçu du projet 4"
              class="card-image"
            />
            <span class="badge bg-warning">JavaScript</span>
            <div class="card-content">
              <h3>Brick Breaker</h3>
              <p>Jeu de Casse-Briques en JavaScript.</p>
              <a
                href="https://brickbreaker-js.netlify.app/"
                class="btn-primary"
                target="_blank"
                >Voir le projet</a
              >
            </div>
          </div>
          <!-- Projet 5-->
          <div class="card">
            <img
              src="img\capture_brickbreaker_phaser.png"
              alt="Aperçu du projet 5"
              class="card-image"
            />
            <span class="badge text-bg-success">Phaser</span>
            <div class="card-content">
              <h3>Brick Breaker Phaser</h3>
              <p>Jeu de Casse-Briques avec le framework Phaser.</p>
              <a
                href="https://brick-breaker-phaser-js.netlify.app/"
                class="btn-primary"
                target="_blank"
                >Voir le projet</a
              >
            </div>
          </div>
          <!-- Projet 6 -->
          <div class="card">
            <img
              src="img\capture_animation_snowman.png"
              alt="Aperçu du projet 5"
              class="card-image"
            />
            <span class="badge text-bg-primary">CSS</span>
            <div class="card-content">
              <h3>Animation Snowman</h3>
              <p>
                TP de programmation web, formation PVMN.
                <br />
                Animation CSS.
              </p>
              <a
                href="https://matrochet.github.io/animation_snowman/"
                class="btn-primary"
                target="_blank"
                >Voir le projet</a
              >
            </div>
          </div>
        </div>
      </section>
    </main>

    <?php include("footer.php"); ?>

    <script src="script.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
