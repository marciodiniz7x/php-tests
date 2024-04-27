<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Conversor de Moedas</title>
</head>
<body>
    <header>
        <h1>Resultado da Conversão</h1>
    </header>
    <main>
        <div class="resultado">
            <?php 
            
            $valor = $_GET['numero'] ?? 0;
            $cotacao = 5.12;          
            $valorConvertido = $valor / $cotacao;           
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "Seus R$ " . numfmt_format_currency($padrao, $valor, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $valorConvertido, "USD") . 
            " <p><strong>* Cotação fixa de R$ 5,12 </strong>informada diretamenta no código. </p> "
            ?>
        </div>
        <a href="javascript:history.go(-1)">&#8592; Voltar aos desafios</a>
    </main>
</body>
</html>