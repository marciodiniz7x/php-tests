<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Analisador de Número Real</title>
</head>
<body>
    <header>
        <h1>Resultado da Análise</h1>
    </header>
    <main>
        <div class="resultado">
            <?php 
            $numero = $_GET['numero'] ?? "Digite um número válido";
            $numero = str_replace(',', '.', $numero);
            $numero = floatval($numero);
            $numero = number_format($numero, 3);

            $numInt = intval($numero);
            $numFrac = fmod($numero, 1);

            $numero = str_replace('.', ',', $numero);
            echo "
            <p>Analisando o número <strong>$numero</strong> informado pelo usuário:</p>
            <p>• A parte inteira do número é <strong>$numInt</strong> </p>
            <p>• A parte fracionária do número é <strong>$numFrac</strong> </p>
            ";
            ?>
        </div>
        <a href="javascript:history.go(-1)">&#8592; Voltar aos desafios</a>
    </main>
</body>
</html>