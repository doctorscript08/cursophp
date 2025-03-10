<!DOCTYPE html>
<html lang="pt-AO">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESAFIO 001</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <p>
            <?php
                $numero = $_GET["numero"] ?? 0;

                echo "O número escolhido foi $numero <br>O seu <em>antecessor</em> é " . ($numero - 1) . "<br>O seu <em>sucessor</em> é " . ($numero + 1)
            ?>
        </p>

        <button onclick="javascript:history.go(-1)">&#x2b05 Voltar</button>
    </main>
</body>
</html>