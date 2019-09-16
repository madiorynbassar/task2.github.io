<?php
require_once('connect.php');


$sql = "DELETE FROM students WHERE students.id = :id ";

$del = $db->prepare($sql);
$del->bindValue(':id',$_POST['user_id']);

$del->execute();

header("location: index.php", true, 301 ); exit;

?>