<?php
  # EL NÚCLEO DE LA APLICACIÓN
  session_start();
  // Constantes de Conexion
  define('DB_MOTOR', 'mysql');
  define('DB_HOST','localhost');
  define('DB_USER','root');
  define('DB_PASS','');
  define('DB_NAME','materiales');
  // Constantes de la APP
  define('HTML_DIR','html/');
  define('APP_TITLE', 'Hospital');
  define('APP_URL', 'http://localhost/Hospital');
  #Estructura
  //funciones
  require('core/bin/functions/Encrypt.php');
  require('core/bin/functions/Users.php');
  //Clases
  require('core/models/class.Conexion.php');
  require('core/models/class.Users.php');
  //Variable global
  $users = Users();
?>
