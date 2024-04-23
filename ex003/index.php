<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>

    <h1>Teste de tipos primitivos</h1>
    <?php 

        // $num = 0x1A;
        // echo "O valor da variável é $num";

        // $v = true;
        // var_dump($v);

        // $num = 3e2;
        // echo "O valor é $num";

        // $vet = [6, 2, 9, 3, 56];
        // echo $vet;

        class Pessoa {
            private string $nome;
        }
        $p = new Pessoa;
        var_dump($p)
    ?>
</body>
</html>