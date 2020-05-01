<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <title>To-do лист</title>
</head>

<body>

<div class="container">
  <h1> Список дел </h1>
  <form class="" action="/add.php" method="post">
    <input type="text" name="task" id="task" placeholder="добавить дело" class="form-control">
    <button type="submit" name="button" class="btn btn-success">Добавить</button>
  </form>
</div>


<?php
require("dbConnect.php");

echo '<ul>';
$query = $pdo->query('SELECT * FROM `tasks` ORDER BY `id` DESC');
while($row = $query->fetch(PDO::FETCH_OBJ)) {
  echo '<li><b>'.$row->task.'</b><a href="/add.php?action=delete&id='.$row->id.'"><button>Удалить</button></a></li>';
}
echo '</ul>';
?>
</body>
</html>
