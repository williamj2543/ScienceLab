<title>Lab Generator</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<form action="index.php">
<div class="form-group">
  <label for="comment">Paste Data from excel:</label>
  <textarea class="form-control" rows="20" name="data"></textarea>
  <input type="submit" value="Submit">
</div>
</form>
<?php
if(!empty($_POST)){
  print_r($_POST['data']);
}
?>
