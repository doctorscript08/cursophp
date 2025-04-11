<!DOCTYPE html>
<html lang="pt-AO">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 11</title>
</head>
<body>
    <?php 
        require_once 'Mamifero.php';
        require_once 'Reptil.php';
        require_once 'Peixe.php';
        require_once 'Canguru.php';
        require_once 'Cachorro.php';
        require_once 'Cobra.php';
        require_once 'Tartaruga.php';
        require_once 'GoldFish.php';
        require_once 'Arara.php';

        $m = new Mamifero();
        $a = new Ave();
        $r = new Reptil();

        /*$m->setCorPelo('Castanho');
        $m->setPeso(33.5);
        echo $m->locomover();

        echo $a->locomover();

        echo $r->locomover();
        echo $c->locomover();
        echo $k->locomover();
        echo $t->locomover();*/

        $k = new Canguru();
        $c = new Cachorro();
        $t = new Tartaruga();
        
        echo $m->emitirSom();
        echo $c->emitirSom();
        echo $k->emitirSom();
    ?>
</body>
</html>