<?php
declare(strict_types=1);

session_start();

if(!isset($_SESSION['name'])) {
  include "login.php";
}
else {
  include "welcome.php";
}