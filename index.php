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
$a = str_replace( array( "\r\n" , "\t" ) , array( "[NEW*LINE]" , "[tAbul*Ator]" ) , $_POST['data'] ); 

print "<table border=\"1\">"; 
foreach( explode( "[NEW*LINE]" , $a ) AS $lines ) { 
    print "<tr>"; 
    foreach( explode( "[tAbul*Ator]" , $lines ) AS $li ) { 
        print "<td>"; 
        print $li ; 
        print "</td>"; 
    } 

    print "</tr>"; 
} 
print "</table>"; 
}
?>
