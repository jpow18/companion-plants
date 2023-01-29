<?php

  if (array_key_exists('plant', $_GET)) {
    // receive GET data from form
    $plant = $_GET['plant'];

    // filter for special characters
    $plant = filter_var($plant, FILTER_SANITIZE_SPECIAL_CHARS);

    // if there's user input
    if (!empty($plant)) {
      $plantsArray = include_once('./extras/plants.php');
    }

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
  if (!empty($plant)) {
    include("./view/list.php");
    if (!empty($plantsArray)) {
      $found = false;
      $count = 0;
      foreach ($plantsArray as $key => $value) {
        if ($key == $plant) {
          $found = true;
          if ($count == 0) {
            echo "<h4>Here are some companion plants for {$plant}";
          }
          echo "<ul>";
          foreach ($value as $companion) {
            echo "<li>" . $companion . "</li>";
          }
          echo "<ul>";
          break;
          }
        }
      if (!$found) {
        echo "<h3>I'm sorry. We haven't organized
           companion plants for that one.<br>Please drop
            us a line at the email below.</h3>";
      }
    }
  }
  ?>

  <?php include("./view/footer.php") ?>
</body>

</html>