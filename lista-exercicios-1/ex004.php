<!DOCTYPE html>
<html>
<body>

<?php
 $n1 = 2;
 $n2 = 55;
 $opção = 2;
 $resultado = 0;
 if ($opção == 1){
 $resultado = $n1 + $n2;
 echo "o resultado é " .  $resultado;
 }
 if ($opção == 2){
 if($n1 > $n2){
 $resultado = $n1 - $n2;
 echo "o resultado é " .  $resultado;
 }
 else{
 $resultado = $n2 - $n1;
 echo "o resultado é " .  $resultado;
 }
 }
 if ($opção == 3){
 $resultado = $n1 * $n2;
 echo "o resultado é " .  $resultado;
 }
 if ($opção == 4){
  if($n2 == 0){
  echo "divisão por 0 é invalido";
  }
  else{
 $resultado = $n1 / $n2;
 echo "o resultado é " .  $resultado;
 }
 }
 ?>
</body>
</html>
