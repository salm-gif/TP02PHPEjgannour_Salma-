<?php
if (isset($_GET['nom'], $_GET['prenom'], $_GET['groupe'])) {
    $nom = trim($_GET['nom']);
    $prenom = trim($_GET['prenom']);
    $groupe = trim($_GET['groupe']);

    if (!empty($nom) && !empty($prenom) && !empty($groupe)) {
        echo "Bienvenue " . htmlspecialchars($prenom, ENT_QUOTES, 'UTF-8') . " " . htmlspecialchars($nom, ENT_QUOTES, 'UTF-8') . " du groupe " . htmlspecialchars($groupe, ENT_QUOTES, 'UTF-8') . " !";
    } else {
        echo "Veuillez remplir tous les champs du formulaire.";
    }
} else {
    echo "Veuillez soumettre le formulaire GET avant d'accéder à cette page.";
}
?>