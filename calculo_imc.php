<?php
// RECEBENDO DADOS DO FORMULÁRIO
   $peso = $_POST ['peso'];
   $altura = $_POST ['altura'];
   $IMC = $peso / ($altura * $altura);
   $IMC = round ($IMC , 2);

   if ($IMC < 18.5) {
    echo "Abaixo do peso normal" . $IMC ;
   }
    
   elseif ($IMC) {
    echo "peso normal " .|$IMC;
   }

   elseif ($IMC) {
    echo " Excesso peso  " .|$IMC;
   }

   elseif ($IMC) {
    echo " Obesidade classe I"  .|$IMC;
   }

   elseif ($IMC) {
    echo "Obesidade classe II " .|$IMC;
   }

   elseif ($IMC) {
    echo "Obesidade classe III " .|$IMC;
   }
?>