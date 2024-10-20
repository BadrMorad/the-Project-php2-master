<h1>Exercice 6</h1>

<h2>Résultat</h2>

<?php

// Fonction personnalisée pour alimenter la liste déroulante
function alimenterListeDeroulante($elements) {
    echo '<select>';
    
    foreach ($elements as $element) {
        echo "<option value=\"$element\">$element</option>";
    }
    echo '</select>';
}

$elements = ["Monsieur", "Madame", "Mademoiselle"];
alimenterListeDeroulante($elements);
?>

