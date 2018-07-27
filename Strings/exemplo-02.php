<?php

$nome = "joão rangel";

echo strtoupper($nome); // A função strtoupper converte os textos para letras maiusculas. 

echo "<br/>";

$nome = strtolower ($nome); // A função strtolower converte os textos para letras minusculas.

echo $nome;

echo"<br/>";

echo ucwords($nome); // Esta função converte apenas a primeira letra da parala para maiuscula. 

echo"<br/>";

echo ucfirst ($nome); //Esta função converte apenas a primeira letra da palavra, supondo que o nome comtem duas palavras, apenas a primeira será em maiusculo.
?> 