<!DOCTYPE html>
<html lang="pt-AO">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESAFIO 003</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas</h1>

        <?php
            $valor = $_GET["valor"] ?? 0;
            /*echo "Seus R\$" . number_format($valor, 2, ",", ".") . " equivalem a <strong>US$ " . number_format(($valor / 5.17), 2, ",", ".") . "</strong>;"*/

            #Formatação de moedas com internacionalização
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<p>Seus " . numfmt_format_currency($padrao, $valor, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, ($valor / 5.17), "USD") . "</strong></p>";
        ?>

        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>