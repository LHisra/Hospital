<!DOCTYPE>
<html>
  <head>
    <title> <?php echo APP_TITLE; ?></title>
    <base href="<?php APP_URL ?>"  />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <?php
      if(isset($_SESSION['app_id'])){
        require (HTML_DIR.'overall/headAdmin.html');
      }else{
        require (HTML_DIR.'overall/headIndex.html');
      }
    ?>

  </head>
