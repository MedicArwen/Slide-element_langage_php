<!DOCTYPE html>
<html>
    <head>
        <title>Passage par VALEUR</title>
        <meta charset="utf-8">
    </head>
    
    <body>
        <h1>Fonction avec un parametre</h1>
        <p>le parametre est modifié dans la fonction</p>
        <p> $x = 0;
            <br>
            function plus3($p) <br>
            { <br>
                $p = $p + 3; <br>
                echo 'Valeur dans la fonction : ' .$p; <br>
            } <br>
            <br>
            plus3($x); <br>
            echo 'valeur en dehors de la fonction : ' .$x;</p>
        <?php
            $x = 0;
            // declaration de la fonction plus3
            function plus3($p){
                $p = $p + 3;
                echo 'Valeur dans la fonction : ' .$p;
            }
            // appel de la fonction plus3
            plus3($x);
            echo '<br>Valeur en dehors de la fonction : ' .$x;
        ?>
        <p>dans la fonction, on modifie le parametre. Il est passé par valeur: il n'est pas affecté à l'extérieur. PHP copie la valeur dans une nouvelle variable.</p>
    <h1>pour modifier x il faut faire un return</h1>
    <?php
    $x =0;
        function plus3Bis($p)
        {
            $p=$p+3;
            return $p;
        }
        $x = plus3Bis($x);
        echo "x=".$x;
    ?>
    </body>
</html>