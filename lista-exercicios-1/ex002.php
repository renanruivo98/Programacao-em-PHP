<!DOCTYPE html>
<html>
<body>

<?php
 $vetor[1]= 10;
 $vetor[2]= 19;
 $vetor[3]= 20;
 $vetor[4]= 8;
 $vetor[5]= 65;
 
 $maioridade= 0;

 
 if ($vetor[1] > 18){
 $maioridade =  $maioridade + 1;
 }
 if ($vetor[2] > 18){
 $maioridade =  $maioridade + 1;
 }
 if ($vetor[3] > 18){
 $maioridade =  $maioridade + 1;
 }
 if ($vetor[4] > 18){
 $maioridade =  $maioridade + 1;
 }
 if ($vetor[5] > 18){
 $maioridade =  $maioridade + 1;
 }
 
 echo "tem " .  $maioridade  . " pessoas maiores de idade";


 
?> 

</body>
</html>