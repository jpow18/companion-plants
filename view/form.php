<form action="<?php $_SERVER['PHP_SELF'] ?>" method="GET">
  <label for="plant-input">Enter plants (separated by commas):</label>
  <input type="text" name="plant" id="plant-input" placeholder="broccoli, carrots, etc.">
  <span class="error">Only alphabetic characters are allowed.</span>
  <input type="submit" value="Submit">
  <input type="reset" value="Reset">
</form>