
<h1>Exercice 12</h1>

<h2>Résultat</h2>

<?php
// Définition du tableau avec différents types de valeurs
$tableauValeurs = [true, "texte", 10, 25.369, ["valeur1", "valeur2"]];
 
// Parcourir le tableau et afficher les informations de chaque élément
foreach ($tableauValeurs as $valeur) {
    var_dump($valeur);
}
?>