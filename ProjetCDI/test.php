<?php
// Récupérez le pseudo de la personne à partir de l'URL
if (isset($_GET['pseudo'])) {
  $pseudo = $_GET['pseudo'];
  
} else {
  // Redirigez vers une page d'erreur si le pseudo n'est pas spécifié dans l'URL
  header("Location: /profil.php");
  exit();
}

echo $pseudo ;
