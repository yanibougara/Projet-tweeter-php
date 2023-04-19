

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style type="text/css">
        @font-face {
        font-family: "IrishGrover";
        src:url('IrishGrover.ttf')
        }

        @font-face {
        font-family: "Roboto-Light";
        src:url('Roboto-Light.ttf')
        }
       
    </style>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
     
    <div class="container">
    
      <div class="child">1
          <div class="accl">acceuil
          <i class="fa-solid fa-right-to-bracket fa-beat-fade" style="  margin-left: -85px;font-size: 20px;"></i>
          </div>
          <div class="deco">deconnexion
          <i class="fa-solid fa-house fa-beat-fade" style="color: #171111;margin-left: -130px;font-size: 20px;"></i>
          </div>
          <div class="prof">profil
          <i class="fa-solid fa-user fa-beat-fade" style="margin-left: -70px;"></i>
          </div>
     </div>


     <div class="son">2
  
        <div class="rechercheorange">
<div class="lll">
<img  class ="orange" src="orange.png" style="width: 70px;height: 70px;margin-left: -350px;margin-top: -30px;">
            <div class="search" style="width: 10px;height: 60px;">
  

            </div>



            <?php 
            require_once 'database.php';

            $query = 'SELECT * FROM articles';
            $recup = $database->query($query);
            $posts = $recup->fetchAll();
            
            foreach($posts as $post):

            ?>

            /* <div style="background-color:#73b9db;border-radius:10px;border:3px solid grey;font-family:IrishGrover;";>
              <h1><?php echo $post['titre']; ?></h1>
              <h1 class="policecontenu"><?php echo $post['contenu']; ?></h1>
              <h3 class="modif"><?php echo $post['date']; ?></h3>
              <form method="POST" action="delete.php">
                <input type="hidden" name="post_id" value="<?php echo $post['id']?>">

              <button type="submit" class="btn btn-dark" style="font-family:IrishGrover;margin-left:360px;color:#4abdf4;background-color: gray;">supprimer</button>
            </form>
            </div> */

            <?php endforeach; ?>
            </div>
        </div>

     </div>
     <div class="last">3
        <div class="troisieme-box">
               

        <div class="listtag">
        <div class="tag">
       <ul>
        <button type="button" class="btn btn-primary" style="font-family:IrishGrover;">football</button>
        <button type="button" class="btn btn-secondary" style="font-family:IrishGrover;">Santé</button>
        <button type="button" class="btn btn-success" style="font-family:IrishGrover;">jeux-video</button>
        <button type="button" class="btn btn-danger" style="font-family:IrishGrover;">actualité</button>
        <button type="button" class="btn btn-warning" style="font-family:IrishGrover;">travail</button>
        <button type="button" class="btn btn-info" style="font-family:IrishGrover;">technologie</button>
        <button type="button" class="btn btn-light" style="font-family:IrishGrover;">monde</button>
        <button type="button" class="btn btn-dark" style="font-family:IrishGrover;">politique</button>
    </div>
       </ul>
   
        </div>



        <p style="height: 30px;width: 120px;background-color:#07ACB5;margin-left: 80px;margin-top:10px;border:3px solid gray;border-radius:5px;">Créer un POST</p>
        <form action="envoiTweet.php" method="POST" style="background-color: #07ACB5;height: 355px;width: 300px;border:3px solid gray;border-radius:10px;">
          <input type="hidden" name="form" value="formulaire_ajout_article">
          <label for="titre">Titre :</label>
          <input type="text" name="titre" id="titre" required style="height: 50px;width: 250px;margin-left: 20px;border: 3px solid grey;background-color: #c4b8b8;">
          <br>
          <label for="contenu">Contenu :</label>
          <br>
          <textarea name="contenu" id="contenu" cols="30" rows="10" required="" style="height: 200px;width: 250px;margin-left: 20px;border: 3px solid grey;background-color: #c4b8b8;font-family:IrishGrover;";
 ></textarea>
          <br>
          <input  class="abcd"type="submit" value="Envoyer" style="background-color: gray;border-radius: 10px;margin-left: 22px;">
        </form>






        <div class="box">
            <a href="#popup" class="button">publier un post</a>
        </div>
    <div id="popup" class="overlay">


        <div class="popup">
            <h2>écris un post</h2>
            <a href="#" class="cross">&times;</a>
            <!-- &times; cela représente la croix -->
            <form>
                <label for="message">Message :</label>
                <textarea id="message" name="message"></textarea>
                <input type="submit" value="publier">
            </form>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-image" viewBox="0 0 16 16">
                <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                <path d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12z"/>
              </svg>
        </div>

 
    </div>
        </div>
     </div>
</div>





<!-- script pour sauvegarder dans le post non terminé dans le local storage -->
<script>
    // sélectionnez les éléments à manipuler
/* const messageInput = document.getElementById('message');
const postForm = document.querySelector('form');

// écoutez l'événement de soumission du formulaire
postForm.addEventListener('submit', (event) => {
  event.preventDefault(); // empêchez la soumission par défaut du formulaire
  
  const message = messageInput.value;
  
  // Publiez le message sur le serveur ici...
  
  // Supprimez les données du brouillon du localStorage
  localStorage.removeItem('draftMessage');
  localStorage.removeItem('selectedTag');
  
  // Réinitialisez l'input et le select
  messageInput.value = '';
  tagSelect.value = '';
}); */

// écoutez l'événement de saisie de l'utilisateur dans l'input de message
messageInput.addEventListener('input', () => {
  // stockez le contenu de l'input dans le localStorage
  localStorage.setItem('draftMessage', messageInput.value);
});

// vérifiez si un message en cours d'écriture existe dans le localStorage
const draftMessage = localStorage.getItem('draftMessage');
if (draftMessage) {
  // remplacez le contenu de l'input par le message en cours d'écriture
  messageInput.value = draftMessage;
}








  // Sélectionne l'icône de poubelle
  const deleteButton = document.querySelector("#delete-post");

  // Ajoute un écouteur d'événement sur le clic de l'icône
  deleteButton.addEventListener("click", function() {
    // Affiche une boîte de dialogue de confirmation
    const confirmed = confirm("Voulez-vous vraiment supprimer ce post ?");

    // Si l'utilisateur a confirmé la suppression, redirige vers la page de suppression
    if (confirmed) {
      window.location.href = "/supprimer-post/" + postId;
    }
  });






</script>


</body>
</html>



