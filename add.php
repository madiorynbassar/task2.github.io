<?php
require_once('connect.php');


$sql = "INSERT INTO students (name, surname, email) 			
			VALUES (:name, :surname, :email)";

$add = $db->prepare($sql);

$add->bindValue(':name',$_POST['name']);
$add->bindValue(':surname',$_POST['surname']);
$add->bindValue(':email',$_POST['email']);


$add->execute();

header("location: index.php", true, 301 ); exit;

?>