<?php
if (isset($_COOKIE['monHero']))
    {
        var_dump($_COOKIE['monHero']) ;
    }
    else
    {
        echo "écriture du cookie";
        setcookie('monHero','batman',0);
        echo "affichage contenu cookies";
        var_dump($_COOKIE);
    }
?>