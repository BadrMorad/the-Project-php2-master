<h1>Exercice 14</h1>

<h2>Résultat</h2>

<?php


// Adresses e-mail à vérifier
$emailValide = "elan@elan-formation.fr";
$emailInvalide = "contact@elan";
 
// Vérification de l'adresse e-mail valide
if (filter_var($emailValide, FILTER_VALIDATE_EMAIL)) {
    echo "L’adresse $emailValide est une adresse e-mail valide.<br>";
} else {
    echo "L’adresse $emailValide n’est pas une adresse e-mail valide.<br>";
}
 
// Vérification de l'adresse e-mail invalide
if (filter_var($emailInvalide, FILTER_VALIDATE_EMAIL)) {
    echo "L’adresse $emailInvalide est une adresse e-mail valide.<br>";
} else {
    echo "L’adresse $emailInvalide est une adresse e-mail invalide.<br>";
}
?>