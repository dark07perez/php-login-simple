<?php
  session_name();
  session_start();

  session_unset();

  session_destroy();

  header('Location: /php-login');
?>
