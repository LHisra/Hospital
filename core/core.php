<?php
  # EL NÚCLEO DE LA APLICACIÓN
  session_start();
  // Constantes de Conexion
  define('DB_MOTOR', 'mysql');
  // define('DB_MOTOR', 'pgsql');
  // define('DB_MOTOR', 'mysql');
  define('DB_HOST','localhost');
  define('DB_USER','root');
  define('DB_PASS','');
  define('DB_NAME','materiales');
  // Constantes de la APP
  define('HTML_DIR','html/');
  define('HTML_PERMANENTES','html/permanentes/');
  define('APP_TITLE', 'Hospital');
  define('APP_URL', 'http://localhost/Hospital');
  #Estructura
  //funciones
  require('core/bin/functions/Encrypt.php');
  require('core/bin/functions/Users.php');
  require('core/bin/functions/Permanentes.php');
  //Clases
  require('core/models/class.Conexion.php');
  require('core/models/class.Users.php');
  require('core/models/class.Permanentes.php');
  //Variable global
  $_users = Users();
  $_permanentes = Permanentes();
?>
