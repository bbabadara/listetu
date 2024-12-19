<?php
"fonction.php";
 $etudiants=getAllEtudiants();
?>
<h1>Liste des Etudiants</h1>

<table border=1>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Age</th>
            <th>Classe</th>
            <th>Telephone</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($etudiants as $etudiant):?>
            <tr>
                <td><?php echo $etudiant["nom"]?></td>
                <td><?php echo $etudiant["prenom"]?></td>
                <td><?php echo $etudiant["age"]?></td>
                <td><?php echo $etudiant["class"]?></td>
                <td><?php echo $etudiant["tel"]?></td>
            </tr>
            <?php endforeach;?>
            </tbody>
            </table>