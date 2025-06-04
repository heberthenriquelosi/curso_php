
<?php

// Variaveis

$nome_produto = "Homocinética GOL G5 1.0 2012";
$preco_produto = 150.50; // Corrigido: sem aspas
$quantidade_comprada = 2; // Corrigido: sem aspas
$valor_pago = 2000; // Corrigido: sem aspas


// Calculamos o total multiplicando o preço pela quantidade

$total_a_pagar = $preco_produto * $quantidade_comprada;


// Calculamos o troco usando o total que acabamos de calcular

$troco = $valor_pago - $total_a_pagar;


// Calculamos o valor que falta usando o total a pagar - o valor pago

$resto = $total_a_pagar - $valor_pago;


// APRESENTAÇÃO (EXIBIÇÃO DOS RESULTADOS

if ($valor_pago >= $total_a_pagar) {

 echo "<strong>Recibo da Compra</strong><br>";

echo "------------------------------------<br>";
echo "Produto: " . $nome_produto . "<br>";
echo "Preço Unitário: R$ " . $preco_produto . "<br>";
echo "Quantidade: " . $quantidade_comprada . "<br>";
echo "<hr>"; // <hr> cria uma linha horizontal, fica bom para recibos
echo "Total a Pagar: R$ " . $total_a_pagar . "<br>";
echo "Valor Entregue: R$ " . $valor_pago . "<br>";
echo "<strong>Troco: R$ " . $troco . "</strong><br>";


} else {

echo "<strong>ERRO: Pagamento Recusado!</strong>" . "<br>";
echo "O valor pago R$ " . $valor_pago . "Não é suficiente para a compra de R$ " . $total_a_pagar . "<br>";
echo "Faltam R$ " . $resto;

}

?>