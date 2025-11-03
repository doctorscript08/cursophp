<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P001</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h1>Praticando PHP</h1>
    <?php
        echo "Comando de saída: \"echo\".<br>";
        print "Comando de saída \"print\".";
    ?>
    
    <h2>Função para manipular datas com php <strong>date()</strong></h2>
    <p>
        Hoje são <?=date("d/m/Y")?>, ou seja, <?=date("D")?> de <?=date("M")?> do ano de <?=date("Y")?>
    </p>
    <p>
        Neste momento são <?=date("g/i/s")?>
    </p>

    <h2>Funções para pegar e mudar o fuso horário do servidor <strong>date_default_timezone_get()</strong> e <strong>date_default_timezone_set()</strong></h2>
    <p>
        Fuso horário do servidor: <?=date_default_timezone_get()?>
    </p>
    <p>
        <?=date_default_timezone_set("Africa/Luanda")?>
        Fuso horário de Angola: <?=date_default_timezone_get()?>
    </p>
</body>
</html>