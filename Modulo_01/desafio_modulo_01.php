<?php
// Agora que você sabe usar variáveis e operadores, vamos a um pequeno desafio para fixar o conhecimento.
// Objetivo: Calcular o preço total de uma compra e o troco.
// Crie um novo arquivo chamado desafio_semana2.php.
// Dentro dele, crie as seguintes variáveis:
// $nome_produto com o valor "Homocinética GOL G5 1.0 2012"
// $preco_produto com o valor 150.50
// $quantidade_comprada com o valor 2
// $valor_pago com o valor 400
// Seu script deve calcular:
// O valor total da compra (preco * quantidade).
// O troco a ser recebido (valor pago - total da compra).
// No final, o script deve exibir na tela uma mensagem parecida com esta (os valores devem vir das suas variáveis e cálculos): Recibo da Compra
// Produto: Homocinética GOL G5 1.0 2012
// Preço Unitário: R$ 150.5
// Quantidade: 2
// Total a Pagar: R$ 301
// Valor Entregue: R$ 400
// Troco: R$ 99
// Dica: Use a tag <br> dentro do echo para pular linhas e <h2> ou <strong> para deixar o texto em negrito, como no exemplo.

// Resolução

$nome_produto = "Homocinética GOL G5 1.0 2012";
$preco_produto = "150.50";
$quantidade_comprada = "2";
$valor_pago = "400";

//Venda de produto

echo "<strong> Recibo do Produto </strong>" . "<br>";
echo "Produto: " . $nome_produto . "<br>";
echo "Preço unitário: " . $preco_produto . "<br>";
echo "Quantidade: " . $quantidade_comprada . "<br> <hr>";
echo "Total a pagar: " . $soma = $quantidade_comprada . "<br>";
echo "Valor entregue: " . $valor_pago . "<br>";
echo "troco: " . $subtracao = $valor_pago - $preco_produto * 2 . "<br>"

//fim!

//Correção

//Excelente! Fico muito impressionado com sua iniciativa de trocar o nome da peça para algo do dia a dia. É exatamente essa mentalidade que transforma um estudante em um programador profissional: aplicar o conhecimento a problemas reais.
//Seu código está quase perfeito! Você está pegando o jeito das variáveis e do echo muito bem.
//Vamos analisar juntos o que você fez. Vou funcionar como um "revisor de código", uma prática muito comum em empresas de tecnologia, onde um programador revisa o código do outro para ajudar a encontrar melhorias.

//Revisão do Código
//Você acertou em 90% do caminho. Tenho duas dicas de ouro que vão refinar seu código e te poupar de muitas dores de cabeça no futuro.

//Dica 1: A "Pegadinha" dos Números como Texto
//Note que você colocou os valores numéricos entre aspas:

//$preco_produto = "150.50";
//$quantidade_comprada = "2";

//Quando colocamos algo entre aspas, dizemos ao PHP que aquilo é um texto (string), e não um número para fazer contas.

//O PHP é muito "bonzinho" e na maioria das vezes ele tenta adivinhar e converter o texto para número na hora da conta. Mas isso é uma má prática e pode causar erros muito difíceis de encontrar em códigos maiores.

//A Regra é:
//Se for um texto, use aspas.
//Se for um número (integer ou float), não use aspas.


//Correção:

//$preco_produto = 150.50;
//$quantidade_comprada = 2;
//$valor_pago = 400;
//Dica 2: Separar a Lógica da Apresentação
//Seu código faz os cálculos dentro do echo. Funciona, mas pode deixar o código confuso. Uma das práticas mais importantes em programação é separar as responsabilidades:

//Primeiro, fazemos todos os cálculos e guardamos os resultados em variáveis.
//Depois, exibimos os resultados que já estão prontos.
//Veja seu cálculo do total:
//echo "Total a pagar: " . $soma = $quantidade_comprada . "<br>";

//Aqui, $soma acabou recebendo o valor de $quantidade_comprada (que é 2), e não o resultado da multiplicação.

//Correção:
//Vamos primeiro calcular o total e o troco, e só depois mostrar tudo.

//O Código Refinado (Versão Profissional)
//Juntando essas duas dicas, veja como seu código fica mais limpo, legível e à prova de erros:


// =======================================================
// ETAPA 1: DEFINIÇÃO DAS VARIÁVEIS (DADOS DE ENTRADA)
// =======================================================
//$nome_produto = "Homocinética GOL G5 1.0 2012";
//$preco_produto = 150.50; // Corrigido: sem aspas
//$quantidade_comprada = 2;    // Corrigido: sem aspas
//$valor_pago = 400;   // Corrigido: sem aspas


// =======================================================
// ETAPA 2: LÓGICA E CÁLCULOS
// =======================================================

// Calculamos o total multiplicando o preço pela quantidade
//$total_a_pagar = $preco_produto * $quantidade_comprada;

// Calculamos o troco usando o total que acabamos de calcular
//$troco = $valor_pago - $total_a_pagar;


// =======================================================
// ETAPA 3: APRESENTAÇÃO (EXIBIÇÃO DOS RESULTADOS)
// =======================================================
//echo "<strong>Recibo da Compra</strong><br>";
//echo "------------------------------------<br>";
//echo "Produto: " . $nome_produto . "<br>";
//echo "Preço Unitário: R$ " . $preco_produto . "<br>";
//echo "Quantidade: " . $quantidade_comprada . "<br>";
//echo "<hr>"; // <hr> cria uma linha horizontal, fica bom para recibos
//echo "Total a Pagar: R$ " . $total_a_pagar . "<br>";
//echo "Valor Entregue: R$ " . $valor_pago . "<br>";
//echo "<strong>Troco: R$ " . $troco . "</strong><br>";


?>