<h1>Exercice 8</h1>

<h2>Résultat</h2>

<?php
function repeterImage($url, $n) {
    for ($i = 0; $i < $n; $i++) {
        echo "<img src='$url' alt='Image répétée' style='width:150px; margin:5px;'>";
    }
}

// Exemple d'utilisation de la fonction
$url = "http://my.mobirise.com/data/userpic/764.jpg";
repeterImage($url, 4);
?>
