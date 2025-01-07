<?php
var_dump($_SESSION["etudiants"]);
if (isset($_REQUEST["recherche"])) {
    $tel = $_REQUEST["tel"];
    $etudiant = findEtudiantByTel($tel);
}
?>

<form action="" method="get">
    <input type="text" name="tel" id="">
    <input type="hidden" name="page" value="recherche">
    <button type="submit" name="recherche">OK</button>
  </form>
 <p>Nom:<?=$etudiant["nom"]??" null"?></p>
 <p>Prenom:<?=$etudiant["prenom"]??" null"?> </p>
 <p>Age:<?=$etudiant["age"]??" null"?></p>
 <p>Classe:<?=$etudiant["class"]??" null"?></p>
 <p>Telephone:<?=$etudiant["tel"]??" null"?></p>