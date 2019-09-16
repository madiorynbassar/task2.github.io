<?php
require_once('connect.php');

$sql = "UPDATE students SET name = :name , surname = :surname , email = :email  WHERE students.id = :id ";

$upd = $db->prepare($sql);
$upd->bindValue(':id',$_POST['user_id']);
$upd->bindValue(':name',$_POST['user_name']);
$upd->bindValue(':surname',$_POST['user_surname']);
$upd->bindValue(':email',$_POST['user_email']);

$upd->execute();

header("location: index.php", true, 301 ); exit;

?>