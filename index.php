<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>PHP Partie7_Exo1</title>
</head>
<body>
  <?php
  //Créer un formulaire demandant le nom et le prénom.
  //Ce formulaire doit rediriger vers la page user.php avec la méthode GET.
  ?>
    <form  action="user.php" method="get">
    <p>  <label for="nom">Nom :</label>
        <input type="text" name="nom" value=""></p>
    <p>  <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" value=""></p>
        <button type="submit" name="button">Submit</button>
    </form>
</body>
</html>
