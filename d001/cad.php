<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado Final</h1>
    </header>
    <section>
        <?php 
            $numero = $_GET["numero"] ?? "Inválido";

            echo "<p> O número escolhido foi $numero! </p>"
        ?>
        <a href="javascript:history.go(-1)">&#8592; Voltar aos desafios</a>
    </section>
</body>
</html>