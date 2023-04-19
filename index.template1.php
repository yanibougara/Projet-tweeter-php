<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style1.css?v=1" />
  <title>Cours de PHP</title>
</head>
<body>
  <!-- <?php require_once '../header.template.php' ?> -->
  <main>


    <h1>twitter</h1>
    <form action="" method="GET" class="tweet">



<label for="prenom">Prénom :</label>

      <input type="text" name="prenom" id="prenom" required>
      <br>
      <label for="message">Message :</label>
      <br>
      <textarea name="message" id="message" cols="30" rows="10" required></textarea>
      <br>
      <input type="submit" value="Envoyer">
    </form>
    <br>
    <?php if (!empty($prenom) && !empty($prenom)) : ?>
      <h2>Données :</h2>
      <?= "Prénom : $prenom" ?>
      <?= "Message : $message" ?>
    <?php endif; ?>

    <br>
    <p>Créer un POST</p>
    <form action="" method="POST">
      <input type="hidden" name="form" value="formulaire_ajout_article">
      <label for="titre">Titre :</label>
      <input type="text" name="titre" id="titre" required>
      <br>
      <label for="contenu">Contenu :</label>
      <br>
      <textarea name="contenu" id="contenu" cols="30" rows="10" required></textarea>
      <br>
      <input type="submit" value="Envoyer">
    </form>
    <br>
    <?php if (!empty($titre) && !empty($contenu)) : ?>
      <h2>Ajouter un article :</h2>
      <?= "Titre : $titre" ?>
      <?= "Contenu : $contenu" ?>
    <?php endif; ?>

    <?php if (isset($article_inserted) && $article_inserted) : ?>
      <h2 style="color: green">Article ajouté avec succès</h2>
    <?php elseif (isset($article_inserted) && !$article_inserted) : ?>
      <h2 style="color: red">Erreur lors de l'ajout de l'article</h2>
    <?php endif; ?>

    <br><br>
    <h2>Articles</h2>
    <br>
    <form action="" method="get">
      <label for="recherche">Recherche :</label>
      <input type="text" name="recherche" id="recherche">
    </form>
    <br>
    <?php
    // echo "<pre>";
    // print_r($articles);
    // echo "</pre>";

    foreach ($articles as $article) {

      echo "<p>" . $article["contenu"] . "</p>";
      echo "<p>Article écrit le " . date("d/m/Y", strtotime($article['date'])) .
        " à " . date("H:i", strtotime($article['date']));
    ?>
      <form action="delete.php" method="POST">
        <input type="hidden" name="form" value="formulaire_suppression_article">
        <input type="hidden" name="article_id" value="<?= $article['id'] ?>">
        <input type="submit" value="Supprimer">
      </form>
    <?php
    }
    ?>
  </main>



</body>

</html>
