<h1>Exercice 9</h1>

<h2>Résultat</h2>

<?php

<h1>Exercice 10</h1>
<h2>Résultat</h2>

<?php
function afficherFormulaire() {
    $nomsInput = ["Nom", "Prénom", "Adresse e-mail", "Ville"];
    $result = '<form>';

    foreach ($nomsInput as $nom) {
        $result .= "<label>" . htmlspecialchars($nom) . " :</label><input type='text' name='" . strtolower(str_replace(' ', '_', $nom)) . "'><br>";
    }

    $result .= "<label>Sexe :</label><br>";
    $result .= "<input type='radio' name='sexe' value='Homme'> Homme ";
    $result .= "<input type='radio' name='sexe' value='Femme'> Femme<br>";

    $result .= '<select name="formation">
        <option value="Développeur Logiciel">Développeur Logiciel</option>
        <option value="Designer web">Designer web</option>
        <option value="Intégrateur">Intégrateur</option>
        <option value="Chef de projet">Chef de projet</option>
    </select><br>';

    $result .= "<input type='submit' value='Envoyer'>";
    $result .= '</form>';

    return $result;
}

echo afficherFormulaire();
?>