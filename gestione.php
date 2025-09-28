<?php
$s1_nome = $_POST["squadra1_nome"];
$s1_vinte = $_POST["squadra1_vinte"];
$s1_pareggi = $_POST["squadra1_pareggi"];
$s1_perse = $_POST["squadra1_perse"];

$s2_nome = $_POST["squadra2_nome"];
$s2_vinte = $_POST["squadra2_vinte"];
$s2_pareggi = $_POST["squadra2_pareggi"];
$s2_perse = $_POST["squadra2_perse"];


$s1_punti = $s1_vinte * 3 + $s1_pareggi;
$s2_punti = $s2_vinte * 3 + $s2_pareggi;


$s1_giocate = $s1_vinte + $s1_pareggi + $s1_perse;
$s2_giocate = $s2_vinte + $s2_pareggi + $s2_perse;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
        echo "<h1>Risultati</h1>";

        if ($s1_punti > $s2_punti) {
            echo $s1_nome . ": " . $s1_punti . " punti (Partite giocate: " . $s1_giocate . ")" . "<br>";
            echo $s2_nome . ": " . $s2_punti . " punti (Partite giocate: " . $s2_giocate . ")" . "<br>";
        } elseif ($s2_punti > $s1_punti) {
            echo $s2_nome . ": " . $s2_punti . " punti (Partite giocate: " . $s2_giocate . ")" . "<br>";
            echo $s1_nome . ": " . $s1_punti . " punti (Partite giocate: " . $s1_giocate . ")" . "<br>";
        } else {
            echo $s1_nome . ": " . $s1_punti . " punti (Partite giocate: " . $s1_giocate . ")" . "<br>";
            echo $s2_nome . ": " . $s2_punti . " punti (Partite giocate: " . $s2_giocate . ")" . "<br>";
            echo "Le due squadre hanno lo stesso punteggio!" . "<br>";
        }


        if ($s1_giocate != $s2_giocate) {
            echo "le due squadre hanno giocato un numero diverso di partite!";
        }
    ?>
</body>
</html>
