
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

<link rel="stylesheet" href="../css/composants/bootstrap.css">

<?php
// enregistrement en base de donnée
require_once "../conf/database.php"; 

    session_start();
    if(!empty($_POST)){

if (isset($_POST["user_username"], $_POST["user_email"], $_POST["user_pass"])
//isset — Détermine si une variable est déclarée et est différente de null
&& !empty($_POST["user_username"]) && !empty($_POST["user_email"]) && !empty($_POST["user_pass"])
//empty — Détermine si une variable est vide
){

$formPseudo = strip_tags($_POST["user_username"]);
//strip_tags génère des alertes si les balises sont incomplètes ou erronées
if(!filter_var($_POST["user_email"], FILTER_VALIDATE_EMAIL)){
    //filter_var — Filtre une variable avec un filtre spécifique comme FILTER_VALIDATE_EMAIL
    die("l'adresse email est incorrecte");
}

$formPass = password_hash($_POST["user_pass"],PASSWORD_ARGON2ID);

$sql= 'INSERT INTO users (user_username , user_email, user_pass) VALUES (:user_username, :user_email, :user_pass )';


//query — Envoie une requête à un serveur MySQL
$query = $database->prepare($sql);  
$query->bindValue(":user_username", $formPseudo);
$query->bindValue(":user_email", $_POST["user_email"]);
$query->bindValue(":user_pass", $formPass);
$query->execute();
// bind value sert a associer/connecter les variables php a leurs parametres sql
// je recupere l'id du nouvel utilisateur
$id=$database->lastInsertId();

session_destroy();session_unset();session_start();

// je stock dans $_SESSION les informations de l'utilisateur
$_SESSION["users"] = 
[
    "user_id" => $id,
    "user_username" => $formPseudo,
    "user_email" => $_POST ["user_email"],
];
//je redirige vers la page de connexion
header("location: profil.php");
}else{
    die("le formulaire est incomplet");
}}
    ?>

<div class="login">
    <form method="post">
<div>
    <label for="pseudo"class="form-label">Pseudo</label>
    <!-- label représente l'etiquette blanche dans laquelle je dois ecrire du texte -->
    <input type="text" class="form-control"name="user_username"id="user_username">
</div>
<div>
    <label for="email" class="form-label" >mail</label>
    <input type="email" class="form-control" name="user_email"id="user_email">
</div>
<div>
    <label for="pass" class="form-label">mdp </label>
    <input type="password" class="form-control"name="user_pass"id="user_pass">
</div>
<button type="submit">m'inscrire</button>
</div>
</form>



<style><







