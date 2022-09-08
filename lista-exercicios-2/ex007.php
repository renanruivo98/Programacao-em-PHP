<!DOCTYPE html>
<html>
<body>

<?php
$age = array("Renan"=>"19", " Pedro"=>"37", "Joe"=>"43");
asort($age);
foreach($age as $x => $val) {
  echo "$x = $val<br>";
}
?>

</body>
</html>
