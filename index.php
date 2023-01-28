<?php

// receive GET data from form
$plant = filter_input(INPUT_GET, 'plant', FILTER_SANITIZE_STRING);

// filter for special characters
$plant = filter_var($plant, FILTER_SANITIZE_SPECIAL_CHARS);

// validate that it has only alphabetic characters
if (!ctype_alpha($plant)) {
  echo "<script>modal('Only alphabetic characters are allowed.');</script>";
} else {
  // do something with the valid input
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