<!DOCTYPE html>
<html>
<body>

<?php
$media = 0;
$soma= 0;
$v = array(1,2,3,4,5,6,7,8,9,10);
for($i = 0; $i <= 10;$i++)
{

$soma = $soma + $v[$i];


}
$media = $soma / 10;
echo "a media é $media"
?>  

</body>
</html>
