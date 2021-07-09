<html>
<head>
<title> heros </title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<?php
declare(strict_types = 1);
include 'fonctions_herosStrict.php';

echo "<ul>";
foreach($listeHeros as $hero)
{
    echo afficherHeros($hero);
}
echo "</ul>";

var_dump($listeHeros);
?>
</body>
</html>