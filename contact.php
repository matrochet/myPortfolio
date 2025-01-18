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
    <style>
      #messageAlert {
        margin-top: 20px;
        padding: 15px;
        border-radius: 4px;
        text-align: center;
        display: none;
      }

      #messageAlert.success {
        color: #155724;
        background-color: #d4edda;
        border: 1px solid #c3e6cb;
      }

      #messageAlert.error {
        color: #721c24;
        background-color: #f8d7da;
        border: 1px solid #f5c6cb;
      }
    </style>
  </head>
  <body>
    <?php include ("header.php"); ?>

    <main>
      <section class="pitch_contact">
        <p>
          Vous souhaitez donner vie à votre projet web ? Je suis votre
          développeur web ! Forts de mes compétences en développement web, je
          vous propose mes services pour la création, la refonte ou la
          maintenance de votre site web. N'hésitez pas à me contacter pour
          discuter de votre projet.
        </p>
      </section>

      <section class="hero2"></section>
      <form id="contactForm" class="form" action="send_email.php" method="post">
        <div class="title">Contactez-moi</div>
        <input
          type="text"
          placeholder="dupont@gmail.com"
          name="email"
          class="input"
          required
        />
        <input
          type="text"
          placeholder="Sujet"
          id="subject"
          name="subject"
          class="input"
          required
        />
        <textarea
          placeholder="Votre message"
          name="message"
          required
        ></textarea>

        <button type="submit">Envoyer</button>
        <div id="messageAlert" style="margin-top: 20px"></div>
      </form>
      <div class="separate-row"></div>
      <section class="pitch_contact2">
        <p>
          En attendant de vous lire, n'hésitez pas à consulter mes réalisations.
        </p>
      </section>
    </main>

    <script>
      document
        .getElementById("contactForm")
        .addEventListener("submit", function (event) {
          event.preventDefault(); // Empêche le rechargement de la page

          // Récupérer les données du formulaire
          const formData = new FormData(this);

          // Envoyer une requête AJAX au serveur
          fetch("send_email.php", {
            method: "POST",
            body: formData,
          })
            .then((response) => response.json())
            .then((data) => {
              const messageAlert = document.getElementById("messageAlert");
              if (data.success) {
                messageAlert.textContent = data.message;
                messageAlert.className = "success";
                messageAlert.style.display = "block";
                document.getElementById("contactForm").reset(); // Vide les champs du formulaire
              } else {
                messageAlert.textContent = data.message;
                messageAlert.className = "error";
                messageAlert.style.display = "block";
              }
            })
            .catch(() => {
              const messageAlert = document.getElementById("messageAlert");
              messageAlert.textContent =
                "Une erreur est survenue. Veuillez réessayer.";
              messageAlert.className = "error";
              messageAlert.style.display = "block";
            });
        });
    </script>

    <?php include("footer.php"); ?>
    <script src="script.js"></script>
  </body>
</html>
