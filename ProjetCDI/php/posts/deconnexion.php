
<?php require '../../conf/database.php' ;

session_start();
session_destroy();


// unset permet de supprimer une variable
header("Location: ../login.php");

die() ;
?>