<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafios</title>
</head>

<body>
    <h1>Desafios</h1>
    <section class="desafios desafio001">
        <div class="title">
            <h1>Desafio 01</h1>
            <h4>Antecessor e Sucessor</h4>
        </div>

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

        <div class="title">
            <h1>Desafio 02</h1>
            <h4>Números Aleatórios</h4>
        </div>
        <div>
            <form action="d002.php" method="get">
                <label for="numero">
                    <span>Gere um número aleatório entre 0 e 100:</span>
                </label>
                <input type="submit" value="Gerar" id="aleatorio" class="submits">
            </form>
        </div>

    </section>

    <section class="desafios desafio003">

        <div class="title">
            <h1>Desafio 03</h1>
            <h4>Conversor de Moedas</h4>
        </div>
        <div>
            <form action="d003.php" method="get">
                <label for="numero">
                    <span>Quantos reais você tem na carteira?</span>
                </label>
                <input type="number" name="numero" id="numero" step="0.01">
                <input type="submit" value="Converter" id="aleatorio" class="submits">
            </form>
        </div>

    </section>

    <section class="desafios desafio004">

        <div class="title">
            <h1>Desafio 04</h1>
            <h4>Conversor de Moedas com API</h4>
        </div>
        <div>
            <form action="d004-api.php" method="get">
                <label for="numero">
                    <span>Quantos reais você tem na carteira?</span>
                </label>
                <input type="number" name="numero" id="numero" step="0.01">
                <input type="submit" value="Converter" class="submits">
            </form>
        </div>

    </section>

    <section class="desafios desafio005">

        <div class="title">
            <h1>Desafio 05</h1>
            <h4>Analisador de Número Real</h4>
        </div>
        <div>
            <form action="d005.php" method="get">
                <label for="numero">
                    <span>Digite um número real:</span>
                </label>
                <input type="text" name="numero" id="numero">
                <input type="submit" value="Analisar" class="submits">
            </form>

        </div>

    </section>

</body>

</html>