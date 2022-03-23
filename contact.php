<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="contact.css" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" />
  <title>Formulaire Lewis Hamilton</title>
</head>
<div class="navBar">
  <ul>
    <button class="menu-deroulant">Menu</button>
    <div class="sous-menu">
      <li><a href="index.html">Home</a></li>
      <li><a href="vehicule.html">Trophés</a></li>
      <li><a href="contact.html">Contact</a></li>
    </div>
  </ul>
  <script src="./index.js"></script>
  <img src="assets/thumb.png" alt="logo 2" class="logo" />
</div>

<body>
  <div class="form-style-8">
    <h2>Contact To Lewis Hamilton</h2>
    <form>
      <input type="text" name="field1" placeholder=" Name" />
      <input type="email" name="field2" placeholder="Email" />

      <textarea placeholder="Message"></textarea>
      <input type="button" value="Send Message" />
    </form>
  </div>
  <div class="footer-basic">
    <footer>
      <div class="social">
        <a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a>
      </div>
      <div class="footermessage">
        <script>
          aleatoire = Math.floor(Math.random() * 5);
          switch (aleatoire) {
            case 0:
              document.write("Chaque tour est différent.");
              break;
            case 1:
              document.write(
                "Formule 1 est au sujet de faire tourner à la vitesse maximale."
              );
              break;
            case 2:
              document.write(
                "J'aime tous les films de bandes dessinées de Marvel."
              );
              break;
            case 3:
              document.write("Je suis prêt pour la douleur pour gagner.");
              break;
            case 4:
              document.write("Je ne crois pas avoir une vie de playboy.");
              break;
          }
        </script>
      </div>
      <p class="copyright">Lewis Hamilton© 2022</p>
    </footer>


</body>

</html>