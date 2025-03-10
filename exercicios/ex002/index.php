<!DOCTYPE html>
<html lang="pt-AO">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Exemplo de PHP</h1>

    <?php
        date_default_timezone_set("Africa/Luanda");
        echo date_default_timezone_get();
        echo "Hoje é dia " . date("d/M/Y");
        echo " e a hora é " . date("g:i:s T");
    ?>
</body>
</html>