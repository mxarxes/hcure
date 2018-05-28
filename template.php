<html>
  <head>
    <link rel="icon" type="image/png" href="public/images/logo.png">
    <meta charset="utf-8" />
    <title> <?= $title ?> </title>
  </head>
  <body>
<?php
      if(isset($_SESSION['idinfirmier'])){
        $userData = findUserFromId($_SESSION['idinfirmier']);
        }
?>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">HCare</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?action=servir">Servir un patient</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?action=addUser">Nouveau patient</a>
          </li>
        </ul>

          <?php if(isset($_SESSION['idinfirmier'])){ ?>
           <?php echo strtoupper($userData['nom']) . ' ' . $userData['prenom'] ?><a href="index.php?action=disconnect"><button class="btn btn-outline-danger ml-2">Déconnexion</button></a> <?php }
                elseif(!isset($_SESSION['idinfirmier'])){ ?> <a href="index.php?action=connexion"><button class="btn btn-outline-success ml-2">Connexion</button></a> <?php } ?>


      </div>
    </nav>
    <?php echo $content; ?>
  </body>
</html>
