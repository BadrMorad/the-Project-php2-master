<h1>Exercice 9</h1>

<h2>Résultat</h2>

<?php

function afficherRadio($nomsRadio) {
    // Vérifie si le tableau n'est pas vide
    if (!empty($nomsRadio) && is_array($nomsRadio)) {
        // Parcourt chaque élément du tableau
        foreach ($nomsRadio as $nom) {
            // Affiche chaque bouton radio
            echo '<label>';
            echo '<input type="radio" name="genre" value="' . htmlspecialchars($nom) . '"> ' . htmlspecialchars($nom);
            echo '</label><br>';
        }
    } else {
        echo "Aucun nom à afficher.";
    }
}
 
// Exemple d'utilisation de la fonction
$nomsRadio = array("Monsieur", "Madame", "Mademoiselle");
afficherRadio($nomsRadio);
?>