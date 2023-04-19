<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['form']) && $_POST['form'] === "formulaire_ajout_article") {
      if (!empty($_POST['titre']) && !empty($_POST['contenu'])) {

        require './conf/database.php';

        $titre = $_POST['titre'];
        $contenu = $_POST['contenu'];
  
        $data = [
          "nom" => $titre,
          "contenu" => $contenu,
  
        ];
  
        $request_insert = $database->prepare("INSERT INTO articles (titre,contenu) VALUES (:nom,:contenu)");
        $article_inserted = $request_insert->execute($data);

        header('Location: index3.php');
      }
    }
  
   /*  if (isset($_POST['form']) && $_POST['form'] === "formulaire_suppression_article") {
      if (!empty($_POST['tweet_id'])) {
        $data = [
          "tweet_id" => $_POST['tweet_id'],
        ];
  
        $request_delete = $database->prepare("DELETE FROM tweet WHERE id = :article_id");
        $article_deleted = $request_delete->execute($data);
      }
    } */
  }