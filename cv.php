<!DOCTYPE html>
<html lang="fr-FR">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CV - Matthieu Rochet</title>
    <link rel="stylesheet" href="contact.css" />
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
      <section class="cv-section">
        <div class="cv-container">
          <img class="cv-image" src="img/cv.png" alt="CV de Matthieu Rochet" />
        </div>
      </section>
      <section class="hero">
        <h6>
          Coder pour sécuriser, communiquer et innover : mon stage en quelques
          lignes
        </h6>
      </section>
      <section class="pres_stage">
        <p>
          Mon stage en développement web m'a permis d'acquérir une expérience
          concrète dans la mise en œuvre de solutions de sécurité. J'ai
          développé un système de double authentification en PHP, intégrant la
          génération et l'envoi de codes OTP par e-mail. J'ai également optimisé
          une fonctionnalité existante en créant une interface utilisateur
          intuitive avec PHP et jQuery, permettant l'envoi simultané de SMS et
          d'e-mails. Ces réalisations témoignent de mes compétences en
          développement back-end et front-end.
        </p>
      </section>
    </main>

    <?php include("footer.php"); ?>
    <script src="script.js"></script>
  </body>
</html>
