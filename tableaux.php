<?php
// TABLEAUX NUMEROTES
echo "<hr> TABLEAUX NUMEROTES<br>";
$prenoms = array("Thierry", "Logan", "Justine", "Jessy");
$ages = [27, 29, 21, 29];
echo "<ul>";
//AFFICHAGE DES ELEMENTS DU TABLEAU prenom
foreach ($prenoms as $prenom) {
    echo "<li>" . $prenom . "</li>";
}
echo "</ul>";
echo "<ul>";
//AFFICHAGE DES ELEMENTS DU TABLEAU age
foreach ($ages as $age) {
    echo "<li>" . $age . "</li>";
}
echo "</ul>";
echo $ages[0];
echo "<hr> TABLEAUX ASSOCIATIFS<br>";
// TABLEAUX ASSOCIATIFS (liste de paire: clé/valeur)
$ages = ['Justine' => 27, 'Thierry' => 29, 'Jessy' => 21];
$mails['Justine'] = 'jujudu18@gmail.com';
$mails['Thierry'] = 'thierry.bru@viaformation.fr';
$mails['Jessy'] = 'jessy13@yahoo.fr';
foreach ($ages as $clef => $valeur) {
    echo $clef . ' a ' . $valeur . ' ans<br>';
}
foreach ($mails as $clef => $valeur) {
    echo $clef . ' a comme adresse email: ' . $valeur . '<br>';
}
// TABLEAUX MULTI DIMENSIONNELS
echo "<hr> TABLEAUX MULTI DIMENSIONNELS </br>";
$suite = [ [1, 2, 4, 8, 16], [1, 3, 9, 27, 81] ];
$utilisateurs = [ 
    ['nom' => 'Thierry', 'mail' => 'thierryb@gmail.com'],
    ['nom' => 'Logan','mail'=>'logan@marvel.com']
];
echo "<ol>";
foreach($utilisateurs as $utilisateur)
{
    echo "<li>".$utilisateur['nom']." -> ".$utilisateur['mail']."</li>";
}
echo "</ol>";
?>