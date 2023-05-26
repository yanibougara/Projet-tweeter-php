<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

<?php 
session_start();
//  Cette ligne démarre une session PHP, permettant de stocker des variables de session pour l'utilisateur.
if(!empty($_POST)){

if(isset($_POST["user_email"],$_POST["user_pass"])
&& !empty($_POST["user_email"]  && !empty($_POST["user_pass"]))
//if (!empty($_POST)) {: Cette condition vérifie si le formulaire a été soumis. Elle s'assure que la variable $_POST n'est pas vide, ce qui indiquerait que des données ont été envoyées via une requête POST.
){
//if (isset($_POST["email"], $_POST["pass"]) && !empty($_POST["email"]) && !empty($_POST["pass"])) {: Cette condition vérifie si les champs requis, tels que "email" et "pass" (mot de passe), existent dans le tableau $_POST et ne sont pas vides. Si les champs sont présents et remplis, le code à l'intérieur du bloc sera exécuté.
if(!filter_var($_POST["user_email"],FILTER_VALIDATE_EMAIL)){
//if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {: Cette condition vérifie si la valeur du champ "email" n'est pas un format d'email valide. La fonction filter_var() avec le filtre FILTER_VALIDATE_EMAIL est utilisée pour effectuer cette vérification. Si l'email n'est pas valide, le code à l'intérieur du bloc sera exécuté et affichera un message d'erreur.
die("ceci n'est pas un email");
}


require_once "../conf/database.php";
//require_once "../conf/database.php";: Cette ligne inclut le fichier "database.php" qui contient les informations de connexion à la base de données. Cela permet d'établir une connexion à la base de données pour effectuer des requêtes.
$sql = "SELECT * FROM users WHERE user_email = :user_email";
//SELECT * FROM users WHERE email = :email: Cette requête SQL sélectionne toutes les colonnes de la table "users" où l'adresse email correspond à la valeur ":email". ":email" est un paramètre nommé qui sera lié à la valeur de $_POST["email"] lors de l'exécution de la requête.
$query = $database->prepare($sql);

$query->bindValue(":user_email",$_POST["user_email"], PDO::PARAM_STR);
//$query->bindValue(":email", $_POST["email"], PDO::PARAM_STR);: Cette ligne lie la valeur de $_POST["email"] au paramètre nommé ":email" dans la requête préparée. Cela sécurise la requête en évitant les injections SQL.

$query->execute();

//$query->execute();: Cette ligne exécute la requête préparée avec les valeurs liées. Elle récupère les enregistrements correspondants de la base de données.

$user = $query->fetch();
//$user = $query->fetch();: Cette ligne récupère le premier enregistrement (utilisateur) retourné par la requête. Les données sont stockées dans la variable $user.
if(!$user){
    die("l'utilisateur n'existe pas");
}
//if (!$user) { die("l'utilisateur n'existe pas"); }: Cette condition vérifie si la variable $user est vide, ce qui signifie qu'aucun utilisateur correspondant n'a été trouvé dans la base de données. Si c'est le cas, le code à l'intérieur du bloc sera exécuté et affichera un message d'erreur.


if (!password_verify($_POST["user_pass"],$user["user_pass"]))
die("les mdp ne correspondent pas");




// ici l'utilisateur est le mot de pass sont correcte
// je vais pouvoir connecter l'utilisateur
//je demarre la session php
session_start();
// je stock dans $_SESSION les informations de l'utilisateur
$_SESSION["users"] = [
    "user_id" => $user["user_id"],
    "user_username" => $user["user_username"],
    "user_email" => $_POST ["user_email"],
];

header('Location: ../index2.php');
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navbar</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<form method="post">
    <div>
        <label for="email">mail</label>
        <input type="email" name="user_email" id="email">
    </div>
    <div>
        <label for="pass">mdp</label>
        <input type="password" name="user_pass" id="pass">
    </div>
    <button type="submit">me connecter</button>
</form>
</body>
</html>


