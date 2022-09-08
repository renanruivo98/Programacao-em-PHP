<!DOCTYPE html>
<html>
<body>

<?php
 $vetor[1]= 10;
 $vetor[2]= -5;
 $vetor[3]= -10;
 $vetor[4]= 8;
 $vetor[5]= 20;
 
 $positivo= 0;
 $negativo= 0;
 $diferenca = 0;
 
 if ($vetor[1] > 0){
 $positivo = $positivo + 1;
 }
 else{
 $negativo = $negativo + 1;
 }
  if ($vetor[2] > 0){
 $positivo = $positivo + 1;
 }
 else{
 $negativo = $negativo + 1;
 }
  if ($vetor[3] > 0){
 $positivo = $positivo + 1;
 }
 else{
 $negativo = $negativo + 1;
 }
  if ($vetor[4] > 0){
 $positivo = $positivo + 1;
 }
 else{
 $negativo = $negativo + 1;
 }
  if ($vetor[5] > 0){
 $positivo = $positivo + 1;
 }
 else{
 $negativo = $negativo + 1;
 }
  if ($positivo > $negativo){
 $diferenca =  $positivo - $negativo;
 echo " o array possui mais numeros positivos, com uma quantidade de " . $positivo . "e possui" . $diferenca . "a mais que o negativo";
 }
 else{
  $diferenca =  $negativo - $positivo ;
 echo " o array possui mais numeros negativos, com uma quantidade de " . $negativo . " e possui" . $diferenca . "a mais que o possitivo";
 }
   


 
?> 

</body>
</html>
