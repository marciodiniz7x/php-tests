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

            
            $inicio = date('m-d-Y', strtotime("-7 days"));
            $fim = date('m-d-Y');

            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);
            $cotacao = $dados["value"][0]["cotacaoCompra"]; 


            $valor = $_GET['numero'] ?? 0;         
            $valorConvertido = $valor / $cotacao;
            
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "Seus R$ " . numfmt_format_currency($padrao, $valor, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $valorConvertido, "USD") . 
            " <p><strong>* Cotação atualizada </strong>e informada pela API do Banco Central. </p> "
            ?>
        </div>
        <a href="javascript:history.go(-1)">&#8592; Voltar aos desafios</a>
    </main>
</body>
</html>