<!DOCTYPE html>
<html lang="pt-AO">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 06</title>
</head>
<body>
    <h1>Projecto Controle Remoto</h1>
    <?php
        require_once("ControleRemoto.php");

        $c1 = new ControleRemoto();
        echo $c1->ligar();
        echo $c1->play();
        echo $c1->pause();
        echo $c1->abrirMenu();
    ?>
</body>
</html>