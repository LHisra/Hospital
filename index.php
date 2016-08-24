<?php
  require('core/core.php');
  if (isset($_SESSION['app_id'])) {
    // if (file_exists('core/controllers/'.strtolower($_GET['view']).'Controller.php')) {
    //   include('core/controllers/'.strtolower($_GET['view']).'Controller.php');
    // }else {
    //   include('core/controllers/errorController.php');
    // }
    include (HTML_DIR.'index/home.php');
  }else {
    include('core/controllers/indexController.php');
  }
?>
