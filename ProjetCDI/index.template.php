



<?php


session_start();
//Initialisation de la session : La fonction session_start() est appelée pour démarrer une session PHP, permettant de stocker et d'accéder à des variables de session.
require_once './conf/database.php';
//Inclusion du fichier de configuration de la base de données : Le code utilise un fichier de configuration (database.php) pour établir une connexion à la base de données.


if ($_SERVER['REQUEST_METHOD'] == "POST") {
  //la méthode de requête est POST, le code vérifie le formulaire spécifié. S'il s'agit du formulaire d'ajout d'un nouvel article 
  //$_SERVER — Variables de serveur et d'exécution
  if (isset($_POST['form']) && $_POST['form'] === "formulaire_ajout_article") {
    // les valeurs des champs titre, contenu, auteur, et pseudo sont récupérées à partir des données POST.  
    if (!empty($_POST['titre']) && !empty($_POST['contenu'])) {
      $titre = $_POST['titre'];
      $contenu = $_POST['contenu'];
      $image = $_POST['image'];
      $tag = $_POST['tag'];
    
 //$titre , $contenu , $auteur sont des requetes sql
    

      $data = [
        "user_id" => $id,
        "nom" => $titre,
        "contenu" => $contenu,
        "pseudo" => $pseudo,  
        "image" => $image,
        "tag"  => $tag,
      ];
//une requête SQL est exécutée pour insérer un nouvel article dans la table tweet avec les valeurs fournies. S'il s'agit du formulaire de suppression d'un article 
      $request_insert = $database->prepare("INSERT INTO tweet (nom,contenu, date,auteur,image,tag) VALUES (:nom,:contenu, NOW(),:auteur,:image,:tag)");
      $article_inserted = $request_insert->execute($data);
      //Lorsque je préparez une requête SQL, la base de données peut la compiler une fois et la réutiliser plusieurs fois avec différentes valeurs de paramètres. 
    }
  }

  if (isset($_POST['form']) && $_POST['form'] === "formulaire_suppression_article") {
    //(formulaire_suppression_article), l'ID de l'article à supprimer est extrait des données POST, puis une requête SQL est exécutée pour supprimer l'article correspondant de la table tweet.
    if (!empty($_POST['tweet_id'])) {
      $data = [
        "tweet_id" => $_POST['tweet_id'],
      ];

      $request_delete = $database->prepare("DELETE FROM tweet WHERE id = :article_id");
      //Traitement d'un formulaire d'inscription utilisateur : Le code contient une requête SQL pour insérer les informations d'un nouvel utilisateur dans la table users. Les valeurs des champs pseudo, email et pass sont utilisées pour insérer les données.
      $article_deleted = $request_delete->execute($data);
    }
  }
}




$sql= "INSERT INTO users (username , email,pass) VALUES (:pseudo, :email, '$pass')'";
//LE value permet de lier les valeurs :pseudo , :email etc.. aux clés username ,email etc..
//deux-points suivi de la clé dutableau, on va pouvoir lier la valeur du tableau $data ligne 57 à la requête





 if (isset($_FILES['image'])) {

//   // Vérifier que l'image est valide
$valid_formats = array("jpg", "jpeg", "png", "gif");
$file_extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
  if (!in_array($file_extension, $valid_formats)) {
 echo "Le format de l'image n'est pas autorisé. Seuls les formats JPG, PNG et GIF sont acceptés.";
     exit;
   }

//   // Vérifier que l'image ne dépasse pas la taille maximale de 2Mo
   $max_size = 2 * 1024 * 1024; // 2Mo en octets
 if ($_FILES['image']['size'] > $max_size) {
   echo "L'image est trop lourde. La taille maximale autorisée est de 2Mo.";
    exit;
  }}







  
require_once 'index.template.php';
?>