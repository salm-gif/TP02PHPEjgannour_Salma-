<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2 - Variables et Concaténation</title>
</head>
<body>

    <h1>Exercice 2 : Variables, Casse et Concaténation</h1>

    <?php
    // 1. Déclaration des variables avec des données fictives
    $nom = "ejgannour";
    $prenom = "salma";
    $age = 20;
    $formation = "Développement Web";

    // 2. Construction de la phrase avec la concaténation (.)
    $presentation = "Je m'appelle " . $prenom . " " . $nom . ", j'ai " . $age . " ans et je suis en formation " . $formation . ". ";

    // 3. Compléter la phrase avec l'opérateur .=
    $presentation .= "J'apprends PHP.";

    // Affichage de la phrase complète
    echo "<p>" . $presentation . "</p>";

    // 4. Déclaration des variables avec respect de la casse (Sensibilité à la casse)
    $note = 12;
    $Note = 16;

    // Affichage des deux valeurs
    echo "<p>Valeur de \$note : " . $note . "</p>";
    echo "<p>Valeur de \$Note : " . $Note . "</p>";
    ?>

</body>
</html>