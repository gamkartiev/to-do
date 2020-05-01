<?php
require("dbConnect.php");
$task = $_POST['task'];

if($_GET['action']==delete) {
    $id = $_GET['id'];

    $sql = 'DELETE FROM `tasks` WHERE `id`=?';
    $query = $pdo->prepare($sql);
    $query->execute([$id]);

    header("Location: /");
}

if($task == '') {
  echo 'Пустое поле задания';
  exit;
}




$sql = 'INSERT INTO tasks(task) VALUES(:task)';
$query = $pdo->prepare($sql);
$query->execute(['task' => $task]);

header("Location: /");

 ?>
