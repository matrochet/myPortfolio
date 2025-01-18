<!DOCTYPE html>
<html lang="fr-FR">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio - Matthieu Rochet</title>
    <link rel="stylesheet" href="main.css" />
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
      <section class="logos-section2">
        <div class="logos-container">
          <div class="logos-row2">
            <img src="img\html5.svg" alt="HTML" class="logo" />
            <img src="img\css_old.svg" alt="CSS" class="logo" />
            <img src="img\javascript.svg" alt="JavaScript" class="logo" />
            <img src="img\bootstrap.svg" alt="BootStrap" class="logo" />
            <img src="img\tailwindcss.svg" alt="Tailwind" class="logo" />
          </div>
        </div>
      </section>
      <section id="about" class="hero">
        <h2>Développeur Web</h2>
        <p>
          Concevoir et programmer des sites, des applications et des plateformes
          web.
        </p>
        <h3>Front-End</h3>
        <p>
          Spécialiste de la création web, chargée essentiellement de la
          conception d'interfaces graphiques ergonomiques, intuitives et
          visuellement attrayantes.
        </p>

        <div class="cta-buttons">
          <a href="cv.php" class="btn-primary">Voir mon CV</a>
          <a
            href="https://www.bluecoders.com/fiches-metiers/quest-ce-quun-developpeur-front-end"
            class="btn-secondary"
            target="_blank"
            >C'est quoi un Front-End ?</a
          >
        </div>
      </section>
      <section class="logos-section">
        <div class="logos-container">
          <div class="logos-row">
            <img src="img\mysql.svg" alt="MySQL" class="logo" />
            <img src="img\jquery.svg" alt="JQuery" class="logo" />
            <img src="img\php.svg" alt="Php" class="logo" />
            <img src="img\docker.svg" alt="Docker" class="logo" />
            <img src="img\figma.svg" alt="Figma" class="logo" />
          </div>
        </div>
      </section>

      <section class="hero">
        <h3>Back-End</h3>
        <p>
          S'assurent que le site Web fonctionne correctement, en se concentrant
          sur les bases de données, la logique back-end, l'interface de
          programmation d'applications (API), l'architecture et les serveurs.
        </p>

        <div class="cta-buttons">
          <a
            href="https://www.devuniversity.com/blog/developpement-back-end-guide-complet#:~:text=Le%20d%C3%A9veloppement%20back%2Dend%20est,et%20la%20s%C3%A9curisation%20des%20informations."
            class="btn-secondary"
            target="_blank"
            >C'est quoi un Back-End ?</a
          >
        </div>
      </section>
      <section id="portfolio" class="portfolio">
        <h2>Portfolio</h2>
        <p>
          Découvrez mes projets et les technologies que j'utilise pour créer des
          sites web modernes et interactifs.
        </p>
      </section>

      <div class="separate-row"></div>
      <section id="contact" class="contact">
        <h2>Contactez-moi</h2>
        <p>
          Suivez-moi sur les réseaux sociaux ou envoyez-moi un message pour
          collaborer.
        </p>
      </section>
    </main>

    <?php include("footer.php"); ?>

    <script src="script.js"></script>
  </body>
</html>
