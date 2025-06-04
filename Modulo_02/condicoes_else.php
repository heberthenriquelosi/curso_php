<?php

// Verifica se o Aluno foi reprovado
// (else) Senão
$nota_aluno = 6.0; // Agora a nota é de reprovação
$media_para_aprovar = 7.0;

echo "A nota do aluno foi: " . $nota_aluno . "<br>";

if ($nota_aluno >= $media_para_aprovar) {
    echo "<strong>Parabéns! Aluno APROVADO!</strong>";
} else {
    echo "<strong>Que pena! Aluno REPROVADO.</strong>";
}

?>