<?php
require_once('connect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Students List</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<section>
		<div style="text-align: center;">
			<h2 style="color: #009afc; margin: 0;font-family: Arial; padding: 20px;">Students List</h2>
		</div>
		<form action="add.php" method="POST" enctype="multipart/form-data" style="display: flex; justify-content: center; margin-top: 10px;">
			<div class="form-group">
				<input name="name" type="text" class="form-control" placeholder="Имя" style="margin-left: 10px;">
			</div>
							
			<div class="form-group">
				<input name="surname" type="text" class="form-control" placeholder="Фамилия" style="margin-left: 10px;">
			</div>

			<div class="form-group">
				<input name="email" type="text" class="form-control" placeholder="Почта" style="margin-left: 10px;">
			</div>

			<button type="submit" style="height: auto;">ADD</button>
			
		</form>

		<div class="info-list" style="margin-top: 30px;">
		<?php 
			
			$sql = "SELECT * FROM students";
			$result = $db->query($sql);
			$products = $result->fetchAll(PDO::FETCH_ASSOC);


			foreach ($products as $product) {
				echo '<div class="info-lis" style="display: flex;justify-content: space-around; text-align: center;">';
				 include 'info.php';
				echo "</div>";
			}

		 ?>

				
		</div>
	</section>
	




 
 <div style="text-align: center; padding: 20px; position: relative; bottom: 0;">
		<a href="http://webstudio.madicom.kz/" target="_blank">
			<img src="logo.png">
		</a>
	</div>
	
</body>
</html>
