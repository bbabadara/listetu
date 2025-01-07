<?php
if (isset($_SESSION["errors"])) {
    $errors=$_SESSION["errors"];
    unset($_SESSION["errors"]);
}
if (isset($_SESSION["ajoutEtudiant"])) {
    $etudiant=$_SESSION["ajoutEtudiant"];
    unset($_SESSION["ajoutEtudiant"]);
}

?>
<div class="container">
    <h1>Ajout Etudiant</h1>
</div>
<div class="container">
<form method="post" action="">
    <div class="mb-3 form-group">
        <label for="nom">Nom</label>
        <input type="text" class="form-control <?=isset($errors["nom"])?"is-invalid":''?> <?=empty($etudiant["nom"])?"":'is-valid'?>" name="nom" value=<?=$etudiant["nom"]??''?>>
        <div class="invalid-feedback"><?=$errors["nom"]??''?></div>
    </div>
    <div class="mb-3 form-group">
        <label for="prenom">Prenom</label>
        <input type="text" class="form-control <?=isset($errors["prenom"])?"is-invalid":''?> <?=empty($etudiant["prenom"])?"":'is-valid'?>" name="prenom" value=<?=$etudiant["prenom"]??''?>>
        <div class="invalid-feedback"><?=$errors["prenom"]??''?></div>
    </div>
    <div class="mb-3 form-group">
        <label for="telephone">Telephone</label>
        <input type="text" class="form-control" name="telephone">
    </div>
    <div class="mb-3 form-group">
        <label for="age">Age</label>
        <input type="text" class="form-control" name="age">
    </div>
    <div class="mb-3 form-group">
        <label for="classe">Classe</label>
        <input type="text" class="form-control" name="classe">
    </div>
    <input type="hidden" name="page" value="ajout">
    <button type="submit" class="btn btn-primary" name="add">Enregistrer</button>
</form>
</div>