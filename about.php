<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-
    scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Контактная форма</title>
</head>
<body>
  <?php require "blocks/header.php" ?>

  <div class="container mt-5">
    <h3>Контактная форма</h3>
    <form action="check.php" method="post">
      <input type="name" id="name" name="name" class="form-control" placeholder="Введите Имя" required>
      <input type="email" id="email" name="email"  class="form-control" placeholder="Введите Email" required>
      <textarea name="message" id="text" class="form-control" placeholder="Введите сообщение" required></textarea>
      <button type="submit" id="send" name="send" class="btn btn-success">Отправить</button>
    </form>
  </div>

  <?php require "blocks/footer.php" ?>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/main.js"></script>
</body>
</html>