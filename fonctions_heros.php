<?php
$listeHeros=
[
    ['prenom'=>'Clark','nom'=>'Kent','pseudo'=>'SuperMan','estSuperVilain'=>false],
    ['prenom'=>'Brice','nom'=>'Wayne','pseudo'=>'Batman','estSuperVilain'=>false],
    ['prenom'=>'Natasha','nom'=>'Romanof','pseudo'=>'Black Widow','estSuperVilain'=>false],
    ['prenom'=>'Jack','nom'=>'Napier','pseudo'=>'Le Joker','estSuperVilain'=>true]

];

function afficherHeros($pHero)
{
    $classe=$pHero['estSuperVilain']?'bg-danger':'bg-success';
    return "<li class='".$classe."'>"
    .$pHero['prenom']." ".$pHero['nom']." est ".$pHero['pseudo']."</li>";
    
}
?>