


<?php require '../conf/database.php'; ?>
<?php
 session_start();
?>

<?php

if (isset($_POST['post_id'])) {
    $post_id = $_POST['post_id'];
    $delete_query = "DELETE FROM articles WHERE id = $post_id";
    $database->exec($delete_query);
}
// On récupère le profil qu'on souhaite consulter

if (isset($_GET['user_username'])) {
  // Récupérez le pseudo de la personne à partir de l'URL
  // On le stoque dans la varaible pseudo
  $pseudo = $_GET['user_username'];
} else if (isset($_SESSION["users"])) {
  // Sinon on regarde si l'utilisateur est connécté (s'il y a une session)
  // On stoque le pseudo de la session dans la variable pseudo
  $pseudo = $_SESSION['users']['user_username'];
  $userid = $_SESSION['users']['user_id'];
} else {
  // Sinon (si il n'a ni spécifié pseudo, ou s'il n'est pas connécté) on le redirige vers la page d'accueil
  header("Location: /index.php");
  exit();
}

$data = ['user_username' => $pseudo];

// On récupère les infos selon la base de donnée
$request = $database->prepare("SELECT * FROM users WHERE user_username = :user_username");
$request->execute($data);
$user = $request->fetch();

$data2 = ['user_id' => $userid];

$query = $database->prepare('SELECT * FROM articles WHERE auteur = :user_id ORDER BY id DESC');
$query->execute($data2);
$posts = $query->fetchAll();


// On affiche les infos récupérés
// (ici de facon brute mais il faut le mettre en page avec de l'HTML)

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navbar</title>
    <link rel="stylesheet" href="../css/composants/pp.css">
    <link rel="stylesheet" href="/css/composants/modal.css">

    <script defer src="./js/localstorage.js"></script>
    <script defer src="./js/app.js"></script>
</head>
    <body>

<div class="all">

<aside>
        <div class="contenu">
            <div class="titres">


                  <h1>profil de <?= $user["user_username"] ?></h1>
                  <h1>Email: <?= $user["user_email"] ?></h1>
                 
                  <a href="../index2.php" class="menulist">
        <img class="icon" src="./images/icons/sidebar/accueil_vide.png" alt="🏠" />
        <h2>Accueil</h2>
      </a>
</div>
           </div>
       </div>

</aside>

<div class="tweetuser">

</div class="divprofil">

<?php foreach ($posts as $post) : ?>
  

  <div class="publication <?php echo $post['tag']; ?> tag-<?php echo $post['tag']; ?>" style="background-color:#73b9db;border-radius:10px;border:1px solid grey;font-family:IrishGrover;">
      <h1><?php echo $post['titre']; ?></h1>
      <h1 class="policecontenu"><?php echo $post['contenu']; ?></h1>
      <h3 class="modif"><?php echo $post['date']; ?></h3>
      <h3><?php echo $post['auteur']; ?></h3>
      <?php if (!empty($post['image'])) : ?>
          <img src="../<?php echo $post['image']?>" alt="Image du post" width="300" height="200" >
      <?php endif; ?>
      <form method="POST" onsubmit="return confirm('Voulez-vous vraiment supprimer cet élément ?');" action="">
          <input type="hidden" name="post_id" value="<?php echo $post['id'] ?>">
          <h3><?php echo $post['tag']; ?></h3>
          <button type="submit" class="btn btn-dark" style="font-family:IrishGrover;margin-left:360px;color:#4abdf4;background-color: gray;">supprimer</button>
      </form>
  </div>

<?php endforeach; ?>



</div>
    
    </body>
    

<style>
.publication{
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 55%;
    height: 50%;
    padding: 20px;
    margin: 10px;
    margin-left: 246px;
}

.all{
    display: flex;
    width: 216px;
    height: 10px;
    background: linear-gradient(135deg, #58bacd 0%, #68f798 100%);
}
    

.tweetuser{
display: flex;
width:10px ;
height:10px ;

}

body{
background: linear-gradient(135deg, #58bacd 0%, #4cc0eb8f 100%);
}
</style>

</body>


</html>




