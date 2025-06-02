<?php

// Verificar se um aluno foi aprovado
$nota_aluno =8.5;
$media_para_aprovar = 7.0;

echo "A nota do aluno foi: " . $nota_aluno . "<br>";

// A condição é: a nota do aluno é MAIOR OU IGUAL (>=) à média?

if ($nota_aluno >= $media_para_aprovar) {
    echo "<strong>Parabens! Aluno APROVADO!<strong>";
}

?>