<?php 
  $plant = $_GET;
  $plant = filter_var($plant, FILTER_SANITIZE_SPECIAL_CHARS);
  
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