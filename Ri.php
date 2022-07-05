

<?php
$new = $_GET['email'];
$xx = rand();
mail($new,"Result Report Test - ".$xx,"WORKING !");
print "<b>send an report to [".$_POST['email']."] - $xx</b>"; 

?>
