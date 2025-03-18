<!DOCTYPE html>
<html lang="pt-AO">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 04</title>
</head>
<body>
    <pre>
        <?php
            require_once "Caneta.php";
            $c1 = new Caneta('Bic', 'Azul', 0.5);
            print_r($c1);

            $c2 = new Caneta('STYLO', 'Vermelha', 0.7);
            print_r($c2);
        ?>
    </pre>
</body>
</html>