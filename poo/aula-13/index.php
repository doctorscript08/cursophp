<!DOCTYPE html>
<html lang="pt-AO">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 13</title>
</head>
<body>
    <pre>
        <?php
            require_once 'Video.php';
            require_once 'Gafanhoto.php';
            require_once 'Visualizacao.php';

            $v[0] = new Video('Aula 1 de POO');
            $v[1] = new Video('Aula 2 de PHP');
            $v[2] = new Video('Aula 15 de HTML5');

            $g[0] = new Gafanhoto("Kelson", 18, 'M', 'doctorscript');
            $g[1] = new Gafanhoto("Creuza", 15, 'F', 'creuzita');

            $vis[0] = new Visualizacao($g[0], $v[1]);
            $vis[1] = new Visualizacao($g[0], $v[2]);

            $vis[0]->avaliar();
            $vis[0]->avaliar_percentagem(85);

            print_r($vis);
        ?>
    </pre>
</body>
</html>