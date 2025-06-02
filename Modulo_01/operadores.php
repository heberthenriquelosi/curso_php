<?php
$Professor = 3;
$sala = 6;
$alunos = 8;
$alunas = 11;

// Soma
$soma = $alunas + $alunos;
echo "A soma é: " . $soma . "<br>"; //a tag <br> pula uma linha no HTML.

// Subtração
$subtracao = $sala - $Professor;
echo "A subtração é: " . $subtracao . "<br>";

// Multiplicação
$multiplicacao = $alunos * $alunas;
echo "A multiplicação é: " . $multiplicacao . "<br>";

// Divisão
$divisao = $Professor / $sala;
echo "A divisão é: " . $divisao . "<br>";

// Resto
$resto = $alunas % 3; // 11 dividido por 3 é 3 e sobra 2. Resultado: 2
echo "O resto da Divisaão de Alunas por 3 é: " . $resto . "<br>";

?>