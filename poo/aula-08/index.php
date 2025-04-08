<!DOCTYPE html>
<html lang="pt-AO">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 08</title>
</head>
<body>
    <pre>
        <?php 
            require_once('Pessoa.php');
            require_once('Livro.php');

            $p[0] = new Pessoa('Kelson de Sousa', 18, 'M');
            $p[1] = new Pessoa('Késia de Sousa', 22, 'F');

            $l[0] = new Livro('A ditadura da beleza', 'Augusto Cury', 500, $p[1], false, 0);
            $l[1] = new Livro('Entendendo algoritmos', 'Aditya Y.Bhargava', 354, $p[0], true, 70);

            $l[0]->abrir();
            $l[0]->avancarPag();
            $l[0]->folhear(58);
            $l[0]->voltarPag();

            echo $l[0]->detalhes();

            $l[1]->fechar();
            $l[1]->abrir();
            $l[1]->folhear(75);
            echo $l[1]->detalhes();
        ?>
    </pre>
</body>
</html>