<?php 
  session_start();
  unset($_SESSION['login']);
  unset($_SESSION['senha_us']);
  session_destroy();
  header('Location: telalogin.php');
?>
