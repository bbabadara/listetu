<?php
function getAllEtudiants(){
    return[
        ["nom"=>"Fall","prenom"=>"Abdou","age"=>21,"class"=>"L2Dev","tel"=>77],
        ["nom"=>"Sow","prenom"=>"Mamadou","age"=>20,"class"=>"L2Dev","tel"=>78],
        ["nom"=>"Diop","prenom"=>"Aissatou","age"=>22,"class"=>"L2Dev","tel"=>79],
        ["nom"=>"Gueye","prenom"=>"Ibrahime","age"=>23,"class"=>"L2Dev","tel"=>71],
        ["nom"=>"Ndoye","prenom"=>"Fatou","age"=>24,"class"=>"L2Dev","tel"=>72],
        ["nom"=>"Diop","prenom"=>"Aissatou","age"=>22,"class"=>"L1Dev","tel"=>73],
        ["nom"=>"Gueye","prenom"=>"Ibrahime","age"=>23,"class"=>"L1Dev","tel"=>74],
        ["nom"=>"Ndoye","prenom"=>"Fatou","age"=>24,"class"=>"L1Dev","tel"=>75],
        ["nom"=>"Ndiaye","prenom"=>"Oumar","age"=>26,"class"=>"L2Dev","tel"=>76]
    ];
}
function afficherEtudiants(array $etudiants):void{
    foreach ($etudiants as $etudiant) {
        echo $etudiant["nom"]." ".$etudiant["prenom"]." ".$etudiant["class"]."\n";
    }
}

function findEtudiantByClasse($classe){
    $etudiants=getAllEtudiants();
    $tab=[];
    foreach ($etudiants as $etudiant) {
        if ($etudiant["class"]==$classe) {
            $tab[]=$etudiant;
        }
    }
    return $tab;
}
function findEtudiantByTel($tel){
    $etudiants=getAllEtudiants();
    foreach ($etudiants as $etudiant) {
        if ($etudiant["tel"]==$tel) {
            return $etudiant;
        }
    }
    return null;
}
function findEtudiantByO($etudiants){
    $etudiantsO=[];
    foreach ($etudiants as $etudiant) {
        if (strpos(strtolower($etudiant["prenom"]),'o')) {
            $etudiantsO[]=$etudiant;
        }
    }

    return $etudiantsO;
}