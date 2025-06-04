<?php

// =======================================================
// ETAPA 1: DEFINIÇÃO DAS VARIÁVEIS (DADOS DE ENTRADA)
// =======================================================
$nome_produto = "Homocinética GOL G5 1.0 2012";
$preco_produto = 150.50;
$quantidade_comprada = 2;
$valor_pago = 200; // Mudei para 200 para testar o caminho do "ERRO"

// =======================================================
// ETAPA 2: LÓGICA E CÁLCULOS
// =======================================================

// Calculamos o total multiplicando o preço pela quantidade
$total_a_pagar = $preco_produto * $quantidade_comprada;

// =======================================================
// ETAPA 3: DECISÃO E APRESENTAÇÃO
// =======================================================

// A condição principal: o dinheiro é suficiente?
if ($valor_pago >= $total_a_pagar) {

    // Se o dinheiro for suficiente, calculamos o troco e mostramos o recibo
    $troco = $valor_pago - $total_a_pagar;

    echo "<strong>Recibo da Compra</strong><br>";
    echo "------------------------------------<br>";
    echo "Produto: " . $nome_produto . "<br>";
    echo "Preço Unitário: R$ " . $preco_produto . "<br>";
    echo "Quantidade: " . $quantidade_comprada . "<br>";
    echo "<hr>";
    echo "Total a Pagar: R$ " . $total_a_pagar . "<br>";
    echo "Valor Entregue: R$ " . $valor_pago . "<br>";
    echo "<strong>Troco: R$ " . $troco . "</strong><br>";

} else {

    // Se o dinheiro NÃO for suficiente, calculamos o quanto falta e mostramos o erro
    $faltam = $total_a_pagar - $valor_pago;

    echo "<strong>ERRO: Pagamento Recusado!</strong><br>";
    // Adicionei o ponto que faltava e um espaço para ficar mais legível
    echo "O valor pago (R$ " . $valor_pago . ") não é suficiente para a compra de R$ " . $total_a_pagar . ".<br>";
    echo "<strong>Faltam: R$ " . $faltam . "</strong>";
}

?>