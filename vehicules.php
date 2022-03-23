<?php
include('./data.php');
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lewis Hamilton</title>
    <link href="vehicules.css" rel="stylesheet" />
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"
  />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
  <body>
    <div class="navBar">
      <ul>
        <button class="menu-deroulant">Menu</button>
        <div class="sous-menu">
          <li><a href="/index.html">Home</a></li>
          <li><a href="/vehicules.html">Véhicule</a></li>
          <li><a href="/contact.html">Contact</a></li>
        </div>
      </ul>
      <script src="./index.js"></script>
      <img src="assets/thumb.png" alt="logo 2" class="logo" />
    </div>
<!------------------------Main--------------------------------------------->
<?php
foreach($data as $title => $vehicules){   
  echo '<h1 class="display-3">'.$title.'</h1>';
  echo '<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">';
    echo '<div class="carousel-indicators">';
      echo '<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>';
      echo '<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>';
      echo '<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>';
    echo '</div>';
    echo '<div class="carousel-inner">';
      foreach($vehicules[0] as $modele => $caracteristiques){
        echo '<div class="carousel-item '.$caracteristiques['isActive'].'">';
          echo '<img src="./assets/'.$caracteristiques['image'].'" class="d-block w-100" alt="...">';
          echo '<div class="carousel-caption d-none d-md-block">';
            echo '<h5>'.$modele.'</h5>';
            echo '<p>poids : '.$caracteristiques['Poid'].'</p>';
          echo '</div>';
        echo '</div>';
      }
    echo '</div>';
}
?>
   <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>   
    </button>
  </div>

  <!-----------------------FOOTER------------------------------------------->
  <div class="footer-basic">
      <footer>
        <div class="social">
          <a href="#"><i class="icon ion-social-instagram"></i></a
          ><a href="#"><i class="icon ion-social-snapchat"></i></a
          ><a href="#"><i class="icon ion-social-twitter"></i></a
          ><a href="#"><i class="icon ion-social-facebook"></i></a>
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
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" charset="utf-8"></script> 
</body>
</html>