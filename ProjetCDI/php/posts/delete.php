



<?php
require_once '../../conf/database.php';

$data = [
  "tweet_id" => $_POST['post_id'],
];
//test





//test

$request_delete = $database->prepare("DELETE FROM articles WHERE id = :tweet_id");
$tweet_deleted = $request_delete->execute($data);

header('Location: ../../index2.php');
//header est une redirection
?>