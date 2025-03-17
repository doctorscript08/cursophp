<!DOCTYPE html>
<html lang="pt-AO">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02</title>
</head>
<body>
    <?php 
        require_once 'Caneta.php';

        $c1 = new Caneta;
        $c1->modelo = "Bic";
        $c1->cor = "Azul";
        $c1->ponta = 0.5;
        $c1->carga = 100;
        $c1->tampada = false;

        $c1->tampar();
        echo $c1->rabiscar();
        print_r($c1);

        $c2 = new Caneta;

        $c2->modelo = "STYLO TRIP GRIP";
        $c2->cor = "Vermelha";
        $c2->ponta = 0.7;
        $c2->carga = 40;
        $c2->tampada = true;

        echo "<br>";
        print_r($c2);
    ?>
</body>
</html>