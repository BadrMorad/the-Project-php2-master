<h1>Exercice 10</h1>

<h2>Résultat</h2>

<?php


$nomsInput = ["Nom", "Prénom", "Adresse e-mail", "Ville"];

function afficherFormulaire($nomsInput){

    $result = "<form>";

    foreach ($nomsInput as $nom) {

        $result .= "<label>". $nom ." : <br></label><input type=text><br>";
    }

    $result .= "</form>";

    return $result;
}

echo afficherFormulaire($nomsInput); jddayofweek
?>