<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo "Bienvenue dans mon TP PHP"; 
    $NOM="Salma";
    $PRENOM="Ejgannour";
    $groupe="groupe 01";
    echo "<p>Nom & Prénom : " . $PRENOM . " " . $NOM . "</p>";
    echo "<p>Groupe : " . $groupe . "</p>";
   ?>
  <p><?= "Ceci est la dernière phrase affichée avec la syntaxe courte PHP." ?></p>
</body>
</html>