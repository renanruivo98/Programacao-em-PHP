<!DOCTYPE html>
<html>
<body>

<?php


$v = array(1,2,3,4,5,6,7,8,9,10);
$nota= $v[0] ;
for($i = 1; $i < 10; $i++)
{
if($v[$i] < $nota){
$nota = $v[$i];
}

}
echo " a menor nota é:  $nota "

?>  

</body>
</html>
