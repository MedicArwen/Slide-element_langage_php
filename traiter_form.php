Salut <?php 
/* ceci est un commentaire lapidaire*/
// un autre genre de commentaire peu signifiant
# un commentaire musical?

echo 'il y a '.count($_GET).' elements dans le GET <br>';
echo 'il y a '.count($_POST).' elements dans le POST<br>';
echo "<hr>";
if (count($_GET)>0)
{
    echo $_GET['prenom'];
    echo " dans le get:";
    var_dump($_GET);
    afficherListe(($_GET));
}
else
{
    echo $_POST['prenom'];
    echo " dans le post:";
    var_dump($_POST);
    afficherListe($_POST);
}
function afficherListe($pListe)
{
    foreach($pListe as $element)
        var_dump($element);
}
?>