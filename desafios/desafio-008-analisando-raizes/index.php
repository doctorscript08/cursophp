<!DOCTYPE html>
<html lang="pt-AO">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANALISANDO RAÍZES</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <?php 
        $num = $_GET['num'] ?? 0;
        $raizq = number_format(sqrt($num), 3, ',', '.');
        $raizc = number_format(pow($num, (1/3)), 3, ',', '.');
    ?>

    <main>
        <h1>Informe um número</h1>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="num">Número</label>
            <input type="number" name="num" id="num" step="0.001" value="<?=$num?>">

            <input type="submit" value="Calcular Raízes">
        </form>
    </main>

    <section>
        <h2>Resultado Final</h2>
        <p>
            Analisando o <strong>número <?=$num?></strong>, temos:
            <ul>
                <li>A sua raíz quadrada é <strong><?=$raizq?></strong></li>
                <li>A sua raíz cúbica é <strong><?=$raizc?></strong></li>
            </ul>
        </p>
    </section>
</body>

</html>