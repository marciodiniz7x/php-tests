<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafios</title>
</head>

<body>
    <h1>Desafios</h1>
    <section class="desafios desafio001">
        <h1>Desafio 01</h1>

        <div>
            <form action="d001.php" method="get">
                <label for="numero">
                    <span>Informe um número:</span>
                </label>
                <input type="number" name="numero" id="numero">
                <input type="submit" value="Calcular" id="calcular" class="submits">
            </form>
        </div>
    </section>

    <section class="desafios desafio002">
        <h1>Desafio 02</h1>
           
        <?php
        include 'd002.php';
        ?>
           
        <a href="index.php" class="submits">Gerar Outro</a>
        
    </section>

</body>

</html>