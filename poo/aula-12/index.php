<!DOCTYPE html>
<html lang="pt-AO">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 12</title>
</head>
<body>
    <?php

use PgSql\Lob;

        require_once 'Mamifero.php';
        require_once 'Cachorro.php';
        require_once 'Lobo.php';

        $m = new Mamifero();
        $l = new Lobo();
        $c = new Cachorro();

        echo $c->emitirSom();
        echo $c->reagir_frase("Toma comida seu bosta");
        echo $c->reagir_dono(false);
        echo $c->reagir_hora(19);
        echo $c->reagir_idade(9, 9)
    ?>
</body>
</html>