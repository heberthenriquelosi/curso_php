<?php

//Revisão do Código
//Você acertou em 90% do caminho. Tenho duas dicas de ouro que vão refinar seu código e te poupar de muitas dores de cabeça no futuro.

//Dica 1: A "Pegadinha" dos Números como Texto
//Note que você colocou os valores numéricos entre aspas:
//Quando colocamos algo entre aspas, dizemos ao PHP que aquilo é um texto (string), e não um número para fazer contas.
//A Regra é:
//Se for um texto, use aspas.
//Se for um número (integer ou float), não use aspas.
//EXEMPLO: "Dois Mil e vinte cinco" / $ano: 2025;

//Dica 2: Separar a Lógica da Apresentação
//Seu código faz os cálculos dentro do echo. Funciona, mas pode deixar o código confuso. Uma das práticas mais importantes em programação é separar as responsabilidades:
//Primeiro, fazemos todos os cálculos e guardamos os resultados em variáveis.
//Depois, exibimos os resultados que já estão prontos.


// =======================================================
// ETAPA 1: DEFINIÇÃO DAS VARIÁVEIS (DADOS DE ENTRADA)
// =======================================================
$nome_produto = "Homocinética GOL G5 1.0 2012";
$preco_produto = 150.50; // Corrigido: sem aspas
$quantidade_comprada = 2;    // Corrigido: sem aspas
$valor_pago = 400;   // Corrigido: sem aspas


// =======================================================
// ETAPA 2: LÓGICA E CÁLCULOS
// =======================================================

// Calculamos o total multiplicando o preço pela quantidade
$total_a_pagar = $preco_produto * $quantidade_comprada;

// Calculamos o troco usando o total que acabamos de calcular
$troco = $valor_pago - $total_a_pagar;


// =======================================================
// ETAPA 3: APRESENTAÇÃO (EXIBIÇÃO DOS RESULTADOS)
// =======================================================
echo "<strong>Recibo da Compra</strong><br>";
echo "------------------------------------<br>";
echo "Produto: " . $nome_produto . "<br>";
echo "Preço Unitário: R$ " . $preco_produto . "<br>";
echo "Quantidade: " . $quantidade_comprada . "<br>";
echo "<hr>"; // <hr> cria uma linha horizontal, fica bom para recibos
echo "Total a Pagar: R$ " . $total_a_pagar . "<br>";
echo "Valor Entregue: R$ " . $valor_pago . "<br>";
echo "<strong>Troco: R$ " . $troco . "</strong><br>";

?>