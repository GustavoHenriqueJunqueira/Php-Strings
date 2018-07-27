<?php

$nome = "Gustavo";  // Variavel com aspas duplas.

$nome2 = 'Treinamentos'; //Variavel cim aspas silples.

var_dump($nome, $nome2); //para o var_dump não faz diferença já que ele irá interpretar que é uma variavel e que ela tem alguma palavra ou numero atribuido.

echo"<br/>";

echo"abc $nome"; // usando o echo para mostrar na tela com aspas duplas ele irá fazer uma verificação no texto e ver se nada que foi escrito é uma variavel ai no meio.

echo"<br/>";

echo"abc $nome2"; // Já com aspas simples ele enterpreta apenas tudo como texto e mostra na tela o nome da variavel e não o seu valor. 


?>