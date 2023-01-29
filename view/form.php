<form action="<?php $_SERVER['PHP_SELF'] ?>" method="GET">
  <label for="plant-input">Enter plant</label>
  <input type="text" name="plant" id="plant-input" pattern="[a-zA-Z]+" title=" Only alphabetical characters are allowed" placeholder="broccoli, carrots, etc.">
  <input type="submit" value="Submit">
  <input type="reset" value="Reset">
</form>