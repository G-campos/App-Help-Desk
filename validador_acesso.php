<?php
  session_start();
  define('__APP_ROOT__', dirname(__DIR__));
  
  if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM'){
    header('Location: ' . __APP_ROOT__ . '/public/index.php?login=erro2');
  }
