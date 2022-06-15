<?php
declare(strict_types=1);
session_start();
$name = $_SESSION['name'];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>PHP Form</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form class="box-info" action="exit.php" method="POST">
  <?php echo "<span class='user_name'>Вы вошли под именем: $name</span>";?>
  <input type="submit" name="submit" value="Выйти" />
</form>
</body>
</html>

