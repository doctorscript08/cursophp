<!DOCTYPE html>
<html lang="pt-AO">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULANDO IDADES</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <main>
        <?php
            $ano_nasc = $_GET['ano_nasc'] ?? 0;
            $ano_act = $_GET['ano_act'] ?? date('Y');
            $idade = 0;
        ?>
        <h1>Calculando a sua idade</h1>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="ano_nasc">Em que ano você nasceu?</label>
            <input type="number" name="ano_nasc" id="ano_nasc" value="<?= $ano_nasc ?>" max="<?= date('Y') ?>">

            <label for="ano_act">Quer saber sua idade em que ano? (actualmente estamos em <?= date('Y') ?>)</label>
            <input type="number" name="ano_act" id="ano_act" min="<?= date('Y') ?>" value="<?= $ano_act ?>">

            <input type="submit" value="Qual será a minha idade?">
        </form>
    </main>

    <?php
        $idade = ($ano_act - $ano_nasc);
    ?>

    <section>
        <h2>Resultado</h2>
        <p>
            <?php if ($idade === 1): ?>
                Quem nasceu em <?=$ano_nasc?> vai ter <strong><?=$idade?> ano</strong> em <?=$ano_act?>!
            <?php else: ?>
                Quem nasceu em <?=$ano_nasc?> vai ter <strong><?=$idade?> anos</strong> em <?=$ano_act?>!
            <?php endif;?>
        </p>
    </section>
</body>

</html>