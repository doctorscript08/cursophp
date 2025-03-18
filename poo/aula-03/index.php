<!DOCTYPE html>
<html lang="pt-AO">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 03</title>
</head>

<body>
    <pre>

        <?php
            require_once "Caneta.php";

            $c1 = new Caneta;
            $c1->modelo = "Bic cristal";
            $c1->cor = "Azul";
            //$c1->ponta = 0.5; Atributo Privado
            //$c1->carga = 99; Atributo Privado
            //$c1->tampada = true; Atributo protegido

            $c1->destampar();
            echo $c1->rabiscar();
            print_r($c1);
        ?>
    </pre>
</body>

</html>