<!DOCTYPE html>
<html lang="pt-AO">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESAFIO 002</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>

        <?php
            $num = mt_rand(0, 100);
            echo "<p>Gerando um número aleatório entre 0 e 100... <br>O valor gerado foi <strong>$num</strong></p>"
        ?>

        <button onclick="javascript:document.location.reload()">&#x1F504 Gerar Outro</button>
    </main>
</body>

</html>