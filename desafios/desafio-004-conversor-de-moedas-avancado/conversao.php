<!DOCTYPE html>
<html lang="pt-AO">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESAFIO 004</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas</h1>

        <?php
            #Cotação Vinda da API do Banco Central do Brasil
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
    
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=' . $inicio . '&@dataFinalCotacao=' . $fim . '&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
    
            $dados = json_decode(file_get_contents($url), true);
    
            $cotacao = $dados["value"][0]["cotacaoCompra"];

            #Valor digitado pelo usuário
            $valor = $_GET["valor"] ?? 0;

            #Conversão para dólar
            $dolar = $valor / $cotacao;
            /*echo "Seus R\$" . number_format($valor, 2, ",", ".") . " equivalem a <strong>US$ " . number_format(($valor / 5.17), 2, ",", ".") . "</strong>;"*/

            #Formatação de moedas com internacionalização
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<p>Seus " . numfmt_format_currency($padrao, $valor, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong></p>";
        ?>

        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>