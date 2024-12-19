<?php
require_once"fonction.php";
// $etudiants=getAllEtudiants();
// var_dump($etudiants);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="http://localhost:8000/?page=liste">Liste</a></li>
            <li><a href="http://localhost:8000/?page=recherche">Recherche</a></li>
        </ul>
    </nav>
    <?php
        if(isset($_GET['page'])){
            $page = $_GET['page'];
            if($page == "liste"){
             require_once"listeEtudiants.php";
            } elseif($page == "recherche"){
                require_once"recherche.php";
            } else {
                echo "Page non trouvée";
            }
        }else{
            require_once"listeEtudiants.php";
        }
        
    ?>


  

</body>
</html>