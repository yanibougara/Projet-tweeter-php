


<?php
require __DIR__ . '/conf/database.php' ;



if (isset($_POST['post_id'])) {
    $post_id = $_POST['post_id'];
    $delete_query = "DELETE FROM articles WHERE id = $post_id";
    $database->exec($delete_query);
}

$query = 'SELECT * FROM articles ORDER BY id DESC';
$recup = $database->query($query);
$posts = $recup->fetchAll();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Publications</title>
</head>

<body>

    <br>
    <form action="" method="get">
      <label for="recherche">Recherche :</label>
      <input type="text" name="recherche" id="recherche">
    </form>
    <br>

    <?php foreach ($posts as $post) : ?>

  <div class="publication  <?php echo $post['tag']; ?> tag-<?php echo $post['tag']; ?>" style="background-color:#73b9db;border-radius:10px;border:1px solid grey;font-family:IrishGrover;">
      <h1><?php echo $post['titre']; ?></h1>
      <h1 class="policecontenu"><?php echo $post['contenu']; ?></h1>
      <h3 class="modif"><?php echo $post['date']; ?></h3>
      <h3><?php echo $post['auteur']; ?></h3>
      <?php if (!empty($post['image'])) : ?>
          <img src="<?php echo $post['image']?>" alt="Image du post">
      <?php endif; ?>



      <form method="POST" onsubmit="return confirm('Voulez-vous vraiment supprimer cet élément ?');" action="">
          <input type="hidden" class="idpost" name="post_id" value="<?php echo $post['id'] ?>">
          <h3><?php echo $post['tag']; ?></h3>



          <?php if(isset($_SESSION['users']) && $post['auteur'] == $_SESSION['users']['user_id']) { 
        // on vérifie si la session est set (isset), si on veut faire l'inverse, on met !isset
        ?> 
          

          <button type="submit" class="btn btn-dark" style="font-family:IrishGrover;margin-left:360px;color:#4abdf4;background-color: gray;">supprimer</button>

          <?php } ?>

      </form>



  </div>

<?php endforeach; ?>

</body>
</html>




































