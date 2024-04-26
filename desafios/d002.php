<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado aleatório</title>
</head>
<body>
    <header>
        <h1>Resultado Final</h1>
    </header>
    <main class="resultado">
        <div>
        <?php 
            $numeroAleatorio = rand(1, 100);
            echo "
            Gerando um número aleatório entre 0 e 100...
            <p>O valor gerado foi <strong>$numeroAleatorio</strong></p>"
        ?>
        </div>
        <a href="d002.php">↺ Gerar outro</a><br>
        <a href="javascript:history.go(-1)">&#8592; Voltar aos desafios</a>
    </main>
</body>
</html>