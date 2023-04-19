<?php
require_once './conf/database.php';

// Requête pour récupérer les articles
$request = $database->prepare("SELECT * FROM tweet");
$request->execute();
$articles = $request->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] == "GET") {
  if (!empty($_GET['prenom']) && !empty($_GET['message'])) {
    $prenom = $_GET['prenom'];
    $message = $_GET['message'];
  }

  if (!empty($_GET['recherche'])) {
    $data = [
      "recherche" => "%" . $_GET['recherche'] . "%",
    ];

    $request_search = $database->prepare("SELECT * FROM tweet WHERE contenu LIKE :recherche");
    $request_search->execute($data);
    $articles = $request_search->fetchAll(PDO::FETCH_ASSOC);
  }
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if (isset($_POST['form']) && $_POST['form'] === "formulaire_ajout_article") {
    if (!empty($_POST['titre']) && !empty($_POST['contenu'])) {
      $titre = $_POST['titre'];
      $contenu = $_POST['contenu'];

      $data = [
        "nom" => $titre,
        "contenu" => $contenu,

      ];

      $request_insert = $database->prepare("INSERT INTO tweet (nom,contenu, date) VALUES (:nom,:contenu, NOW())");
      $article_inserted = $request_insert->execute($data);
    }
  }

  if (isset($_POST['form']) && $_POST['form'] === "formulaire_suppression_article") {
    if (!empty($_POST['tweet_id'])) {
      $data = [
        "tweet_id" => $_POST['tweet_id'],
      ];

      $request_delete = $database->prepare("DELETE FROM tweet WHERE id = :article_id");
      $article_deleted = $request_delete->execute($data);
    }
  }
}

require_once 'index.template.php';