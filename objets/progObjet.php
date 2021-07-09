<?php
    require_once('models/hero.php');
    

    $monHero = new Hero("Brice","Wayne","h","Batman",false,false);
    $monHero2 = new Hero("Tony","Stark","h","Iron-Man",false,true);

    $unCitoyen = new Personne("BRU","Thierry","h");
    /*$monHero->prenom = "Brice";
    $monHero->nom = "Wayne";
    $monHero->pseudo = "BatMan";
    $monHero->estSuperVilain = false;*/
    // a propos du hero 1
    echo $monHero->afficherInformation();
    echo "<br>";
    echo "le hero ".$monHero->pseudo." s'appelle en vrai "
    .$monHero->getIdentiteSecrete();
    echo "<hr>";
    // a propos du hero 2
    echo $monHero2->afficherInformation();
    echo "<br>";
    echo "le hero ".$monHero2->pseudo." s'appelle en vrai "
    .$monHero2->getIdentiteSecrete();
    // a propos d'un hero vu en tant que personne
    echo "<hr> voyons pour ce citoyen lambda dans un gala:".$monHero->getIdentite();
    echo "<hr> voyons pour ce citoyen lambda dans un gala:".$unCitoyen->afficherInformation();
  
?>