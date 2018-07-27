<?php

$frase = "A repetição é mãe da retenção.";
$palavra = "mãe";

$q = strpos ($frase, $palavra); //Está função faz uma procura dentro de uma frase, estamos procurando a palavra mãe na frase declarado anterior que foi declarado dentro da variavel $frase.

var_dump($q); //Quando usado o var_dump declarando a variave $q irá apresentar na tela o local onde a paravra mãe está na frase. 

$texto = substr ($frase, 0, $q); //Está é outra forma de apresentar tudo o que está escrito até a palavra mãe, já que sabemos que está no 17 iremos fazer com que tudo antes de mãe apareça na tela 

echo"<br/>";

var_dump($texto);

$texto2 = substr($frase, $q + strlen ($palavra), strlen($frase));//está é uma forma mais "elegante" para conseguir escrever o restante da frase depois da palavra mãe. Desta forma foi declarado a variavel $palavra.

echo "<br/>";

echo $texto2;

?>