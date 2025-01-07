<?php
if (!$_SESSION["etudiants"]) {
 $_SESSION["etudiants"]=getAllEtudiants();
}
 $etudiants = $_SESSION["etudiants"];

?>
<div class="container">
    <h1>Liste des Etudiants</h1>
</div>
<div class="container d-flex justify-content-end">
    <a class="btn btn-primary" href="<?=WEBROOT?>page=ajout">Ajouter</a>
</div>

<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Age</th>
                <th>Classe</th>
                <th>Telephone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($etudiants as $etudiant): ?>
                <tr>
                    <td><?=$etudiant["nom"] ?></td>
                    <td><?=$etudiant["prenom"] ?></td>
                    <td><?=$etudiant["age"] ?></td>
                    <td><?=$etudiant["class"] ?></td>
                    <td><?=$etudiant["tel"] ?></td>
                    <td><a href="<?=WEBROOT?>page=detail&id=<?=$etudiant["id"]?>">Voir Details</a></td>
                    
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>