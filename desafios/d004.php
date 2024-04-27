<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Conversor de Moedas com API</title>
</head>
<body>
    <header>
        <h1>Resultado da Conversão</h1>
    </header>
    <main>
        <div class="resultado">
            <?php 
            
            $numero = $_GET['numero'] ?? "Número inválido";
            $numero = str_replace(',', '.', $numero);
            $numero = floatval($numero);
            $converteParaDolar = $numero / 5.12;
            $converteParaDolar = number_format($converteParaDolar, 2);
            $converteParaDolar = str_replace('.', ',', $converteParaDolar);
            $numero = number_format($numero, 2);
            $numero = str_replace('.', ',', $numero);
            echo "Seus R$ $numero equivalem a <strong>US$ $converteParaDolar</strong>
            <p><strong>* Cotação fixa de R$ 5,12 </strong>informada diretamenta no código. </p> "
            ?>
        </div>
        <a href="javascript:history.go(-1)">&#8592; Voltar aos desafios</a>
    </main>
</body>
</html>