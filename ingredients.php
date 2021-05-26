<?php
/* Настройки сайта */
require("config/common.php");

/* Подключение к БД */
require("includes/mysqli.inc.php");

/* Проверка авторизации */
require("includes/auth.inc.php");

$ingMeasureOptions = "";
$result = $mysqli->query("SELECT * FROM measure");
while($row = $result->fetch_assoc()){
  $measureId = $row["id"];
  $measureName = $row["name"];
  $measureShortname = $row["shortname"];
  $ingMeasureOptions .= "<option value=\"$measureId\">$measureShortname</option>";
}

if(isset($_POST["addSubmit"]))
{
  $ingName = $_POST["ingName"];
  $ingMeasure = $_POST["ingMeasure"];

  $mysqli->query("INSERT INTO products (name, measure_id) VALUES ('$ingName', $ingMeasure)");
}
?>
<!doctype html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSS -->
  <?php require("templates/styles.tpl.php"); ?>
  <link rel="stylesheet" href="vendor/leaflet-1.7.1/dist/leaflet.css">

  <title><?= SITE_NAME ?></title>
</head>

<body>
  <!-- HEADER -->
  <?php require("templates/header.tpl.php"); ?>
  <div class="container-fluid">
    <div class="row">
      <?php require("templates/sidebar.tpl.php"); ?>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 pt-3 pb-2 mb-3 ">
        <?php require("templates/add_ingredient.tpl.php"); ?>
      </main>
    </div>
  </div>
  <!-- JAVASCRIPT -->
  <?php require("templates/scripts.tpl.php"); ?>
  <script src="vendor/leaflet-1.7.1/dist/leaflet.js"></script>

</body>

</html>
<?php
/* Закрываем соединение с БД */
$mysqli->close();
