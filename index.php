<?php

  if (array_key_exists('plant', $_GET)) {
    // receive GET data from form
    $plant = $_GET['plant'];

    // filter for special characters
    $plant = filter_var($plant, FILTER_SANITIZE_SPECIAL_CHARS);

    var_dump($plant);

    // if there's user input
    if (!empty($plant)) {
      $plantArray = include("./extras/plants.php");
    }

    // search array from ./extras/plants.php
    
  }

?>


<!DOCTYPE html>
<html>

<head>
  <title>Companion Planting Advice</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/main.css">
</head>

<body>
  <?php include("./view/header.php") ?>
  <?php include("./view/form.php") ?>
  <?php
  if (!empty($plant))
    include("./view/list.php")
  ?>

  <?php include("./view/footer.php") ?>
</body>

</html>