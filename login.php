<?php
session_start();

/* Настройки сайта */
require("config/common.php");

/* Подключение к БД */
require("includes/mysqli.inc.php");

/* Если нажата кнопка войти */
if(isset($_POST["loginSubmit"]))
{
  $formError = "";

  /* Получаем email и пароль из формы */
  $email = $_POST["email"];
  /* Генерируем хэш пароля  */
  $password = $_POST["password"];

  /* Проверяем наличие в БД пользователя */
  if (!empty($email) || !empty($password)) {
    $result = $mysqli->query("SELECT * FROM users WHERE email='$email'");
    if($result->num_rows == 1)
    {
      while ($row = $result->fetch_assoc()) {
        if (password_verify($password, $row['password'])) {
            $_SESSION["id"] = $row["id"];
            $_SESSION["name"] = $row["name"];
            header("Location: add.php");
        }
        else
          $formError = "Неверные Email или пароль";
      }
    }
    else
      $formError = "Пользователь с таким email не найден";
  } else
    $formError = "Введите Email и Password";
  $formError = '<div class="alert alert-warning" role="alert">'.$formError.'</div>';
}
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
        <?php require("templates/login.tpl.php"); ?>
    </div>
  </div>

  <?php require("templates/scripts.tpl.php"); ?>
  </body>
</html>