<?php
/* Настройки сайта */
require("config/common.php");

/* Подключение к БД */
require("includes/mysqli.inc.php");
?>
<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Team Cook">
    <meta name="keywords" content="холодильник, рецепты">

    <title>Fridge</title>

    <!-- CSS -->
    <?php require("templates/styles.tpl.php"); ?>
  </head>
  <body>
    <?php require("templates/header.tpl.php"); ?>
    
  <div class="container-fluid">
    <div class="row">
      <?php require("templates/sidebar.tpl.php"); ?>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 pt-3 pb-2 mb-3 ">
        <?php require("templates/index.tpl.php"); ?>
      </main>
    </div>
  </div>

  <?php require("templates/scripts.tpl.php"); ?>
  </body>
</html>