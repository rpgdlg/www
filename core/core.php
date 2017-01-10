<?php

  /*  ARCHIVO DE CONFIGURACION  */

  session_start();

  #Constantes de conexion
  define('DB_HOST', 'localhost');
  define('DB_USER', 'root');
  define('DB_PASS', '');
  define('DB_NAME', 'benevento');

  #Constantes de la APP
  define('HTML_DIR','html/');
  define('APP_TITLE', 'Benevento');
  define('APP_COPY', 'Copyright &copy; ' . date('Y', time()) . ' Daniel García Landeros Software. ');
  define('APP_URL', 'http://localhost/');

  #Estructura
  require('vendor/autoload.php');
  require('core/models/classConexion.php');
  require('core/bin/functions/Encrypt.php');
  require('core/bin/functions/Users.php');

  $users = Users();

 ?>
