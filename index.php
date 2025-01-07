<?php
if(session_status() === PHP_SESSION_NONE) session_start();

require_once "fonction.php";
define("WEBROOT","http://localhost:8005/?");




?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?=WEBROOT?>page=liste">Liste</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=WEBROOT?>page=recherche">Recherche</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>

  <?php
  
  require_once "fonction.php";
  if (isset($_GET['page'])) {
    $page = $_GET['page'];
    if ($page == "liste") {
      require_once "listeEtudiants.php";
    } elseif ($page == "recherche") {
      require_once "recherche.php";
    }elseif ($page == "detail") {
      $id=isset($_REQUEST["id"]) ? $_REQUEST["id"] :0;
      $etudiant=findEtudiantById($id);
      require_once "details.php";
    }elseif ($page == "ajout") {
      if(isset($_REQUEST["add"])) {
        $_SESSION["errors"]=[];
        unset($_POST["add"],$_POST["page"]);
        $_SESSION["ajoutEtudiant"]=$_POST;
        if (empty(trim($_REQUEST["nom"]))){
          $_SESSION["errors"]["nom"] = "le nom est obligatoire";
        }
        if (empty(trim($_REQUEST["prenom"]))){
          $_SESSION["errors"]["prenom"] = "le prenom est obligatoire";
        }
        if (empty($_SESSION["errors"])) {
          $newEtudiant =[
            "id" =>uniqid(),
            "nom" => $_REQUEST["nom"],
            "prenom" => $_REQUEST["prenom"],
            "age" => $_REQUEST["age"],
            "class" => $_REQUEST["classe"],
            "tel" => $_REQUEST["telephone"],
          ];
          $_SESSION["etudiants"][]=$newEtudiant;
          header("location:".WEBROOT."page=liste");
        }
      

      }
      require_once "ajout.php";
    } else {
      echo "Page non trouvée";
    }
  } else {
    require_once "listeEtudiants.php";
  }

  ?>




</body>

</html>