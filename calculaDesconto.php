<?php

$valorCompra = $_POST['valorCompra'];
$idade = $_POST['idade'];
$cartao = $_POST['cartao'];

$desconto = 0;

// desconto por idade
if ($idade < 55) {
    $desconto = 0;
} elseif ($idade <= 70) {
    $desconto = 5;
} else {
    $desconto = 7;
}

// desconto do cartão
if ($cartao == "sim") {
    $desconto = $desconto + 5;
}

// desconto
$valorDesconto = $valorCompra * ($desconto / 100);

// valor final
$valorFinal = $valorCompra - $valorDesconto;
?>
<!doctype html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Resultado do Desconto</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <main class="card">
            <h1>Resultado da Compra</h1>
            <p>Valor da compra: R$ <?php echo number_format($valorCompra, 2, ',', '.'); ?></p>
            <p>Idade do cliente: <?php echo htmlspecialchars($idade); ?> anos</p>
            <p>Desconto aplicado: <?php echo $desconto; ?>%</p>
            <p><strong>Valor final: R$ <?php echo number_format($valorFinal, 2, ',', '.'); ?></strong></p>
        </main>
    </body>
</html>