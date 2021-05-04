<!DOCTYPE html>
<html lang="ru">
<head>
	<?php 
		require_once 'connect.php';
	?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-
    scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
    <title>Контактная форма</title>
</head>
<body>
  <?php require "blocks/header.php" ?>

  <div class="container mt-5">
    <div class="form__block">
		<h3>Список дел</h3>
		<form class='form__list' action="add.php" method="post">
			<input type="name" id="task" name="task" class="form-control" placeholder="Нужно сделать" required>
			<button type="submit" id="sendTask" name="sendTask" class="btn btn-success">Отправить</button>
		</form>
	</div>
	<div class="block__list">
	<h3 class="blck__list-title">Мой список</h3>

		<?php
			echo '<ul class="block__item">';
			$query = $pdo->query('SELECT * FROM `tasks` ORDER BY `id` DESC');
			while ($row = $query->fetch(PDO::FETCH_OBJ)) {
				echo '<li class="block__item-list"><span>'.$row->task .'</span><a href="/delete.php?id='.$row->id.'"><button type="button" class="btn-delete">Удалить</button></a></li>';
			}
			echo '</ul>';
		
		?>
	</div>
  </div>

  <?php require "blocks/footer.php" ?>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/main.js"></script>
</body>
</html>