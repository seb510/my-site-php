<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-
    scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>PHP веб сайта</title>
</head>
<body>
    <?php require "blocks/header.php" ?>
    <div class="container mt-5">
        <h3 class="mb-5">Наши статьи</h3>
        <div class="content d-flex flex-wrap">
            <?php 
                for ($i=0; $i < 6 ; $i++) :
            ?>
            <div class="card shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Информация</h4>
                </div>
                <div class="card-body">
                    <img src="img/<?php echo ($i + 1) ?>.jpg" alt="Изображения" class="img-thumbnail">
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>10 users included</li>
                        <li>2 GB of storage</li>
                        <li>Email support</li>
                        <li>Help center access</li>
                    </ul>
                    <a href="#" type="button" class="btn btn-lg btn-block btn-outline-primary">Подробнее</a>
                </div>
            </div>
            <?php endfor ?>
        </div>
    </div>
    <?php require "blocks/footer.php" ?>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</body>
</html>