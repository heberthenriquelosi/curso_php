<?php

$nota_aluno = 5.5; // Nota para recuperação
$media_para_aprovar = 7.0;
$media_para_recuperacao = 5.0;

echo "A nota do aluno foi: " . $nota_aluno . "<br>";

if ($nota_aluno >= $media_para_aprovar) {
    echo "<strong>Situação: Aluno APROVADO!</strong>";
} elseif ($nota_aluno >= $media_para_recuperacao) {
    echo "<strong>Situação: Aluno em RECUPERAÇÃO.</strong>";
} else {
    echo "<strong>Situação: Aluno REPROVADO.</strong>";
}

?>