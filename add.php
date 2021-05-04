<?php 
    require_once 'connect.php';

    $task = $_POST['task'];
    if($task== '') {
        echo 'ВВедите само задание';
        die();
    }


    $sql = "INSERT INTO tasks(task) VALUES(:task)";
    $query = $pdo->prepare($sql);
    $query->execute(['task'=> $task]);

    header('location: /list.php');

?>