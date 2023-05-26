<?php
session_start();
  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['form']) && $_POST['form'] === "formulaire_ajout_article") {
        if (!empty($_POST['titre']) && !empty($_POST['contenu'])) {

            require_once '../../conf/database.php';

            $titre = $_POST['titre'];
            $contenu = $_POST['contenu'];
            $auteur = $_SESSION['users']['user_id'];
            $image = $_FILES['image']['name'];
            $tag = $_POST['tag'];

            // Vérifier si un fichier d'image a été téléchargé
            if (isset($_FILES['image'])) {
                $imageTmp = $_FILES['image']['tmp_name'];

                // Déplacer le fichier téléchargé vers l'emplacement souhaité
                $targetDir = 'imagepost/';
                $targetFilePath = $targetDir.$image;
                move_uploaded_file($imageTmp, __DIR__ . '/../../' . $targetFilePath);
            } else {
                $image = '';
            }

            $data = [
                "nom" => $titre,
                "contenu" => $contenu,
                "auteur" => $auteur,
                "image" => $targetFilePath,
                "tag" => $tag,
            ];

            $request_insert = $database->prepare("INSERT INTO articles (titre,contenu,auteur,image,tag) VALUES (:nom,:contenu,:auteur,:image,:tag)");
            $article_inserted = $request_insert->execute($data);

            header('Location: ../../index2.php');
        }
    }
}