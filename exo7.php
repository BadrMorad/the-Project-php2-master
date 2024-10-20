<h1>Exercice 7</h1>

<h2>Résultat</h2>

<?php

// Fonction pour générer des cases à cocher
function genererCheckbox($elements) {
    foreach ($elements as $label => $checked) {
        $isChecked = $checked ? "checked" : "";
        echo "<input type='checkbox' $isChecked> $label<br>";
    }
}
$elements = [
    "Choix 1" => false,
    "Choix 2" => true,
    "Choix 3" => false
];
genererCheckbox($elements);
?>
