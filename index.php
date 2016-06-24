<title>Lab Generator</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<form action="index.php" method="post">
<div class="form-group">
  <label for="comment">Paste Data from excel:</label>
  <textarea class="form-control" rows="20" name="data"></textarea>
  <input type="submit" value="Submit">
</div>
</form>
<?php
if(!empty($_POST)){
  $rows = array_map('str_getcsv', $_POST['data']);
$header = array_shift($rows);
$csv = array();
foreach ($rows as $row) {
   $csv[] = array_combine($header, $row);
}
print_r($csv);
}
?>
