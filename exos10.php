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

echo afficherFormulaire($nomsInput); 
<<<<<<< HEAD:exos10.php

=======
echo <djgijfehiughi>
>>>>>>> 0c41cce79f99ccebe6427b733b6638200b572d8f:exo10.php
?>