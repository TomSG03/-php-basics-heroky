<?php

session_start();
if ($_POST['user_name'] !== '') {
  $_SESSION['name'] = $_POST['user_name'];
}

$path = $_SERVER["HTTP_HOST"];
header("Location: https://${path}/index.php");