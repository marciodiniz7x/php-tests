<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Antecessor e Sucessor</title>
</head>
<body>
    <header>
        <h1>Resultado Final</h1>
    </header>
    <main class="resultado">
        <div>
        <?php 
            $numero = $_REQUEST["numero"] ?? "Inválido";
            $antecessor = $numero - 1;
            $sucessor = $numero + 1;

            echo "
            <p> O número escolhido foi <strong>$numero</strong></p>

            <p> O seu antecessor é <strong>$antecessor</strong></p>

            <p> O seu sucessor é <strong>$sucessor</strong> </p>
            "
        ?>
        </div>
        <a href="javascript:history.go(-1)">&#8592; Voltar aos desafios</a>
    </main>
</body>
</html>