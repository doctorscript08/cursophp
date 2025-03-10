<!DOCTYPE html>
<html lang="pt-AO">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAIXA ELECTÔNICO</title>
    <link rel="stylesheet" href="../style.css">
    <style>
        img {
            height: 50px;
            margin: 5px;
        }
    </style>
</head>

<body>
    <?php 
        $valor = $_GET['valor'] ?? 0;
    ?>
    <main>
        <h1>Caixa Electrônico</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="valor">Qual valor você deseja sacar? (R$)<sup>*</sup></label>
            <input type="number" name="valor" id="valor" step="5" value="<?=$valor?>" required>

            <p style="font-size: 0.8em;">Só estão disponíveis as notas de: R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>

    <?php 
        $notas_100 = intdiv($valor, 100);
        $notas_50 = intdiv(($valor - ($notas_100 * 100)), 50);
        $notas_10 = intdiv((($valor - ($notas_100 * 100)) - ($notas_50 * 50)), 10);
        $notas_5 = intdiv((($valor - ($notas_100 * 100)) - ($notas_50 * 50)) - ($notas_10 * 10), 5);
    ?>

    <section>
        <h2>Saque de R$<?=number_format($valor, 2, ',', '.')?> realizado</h2>
        O caixa electrônico vai te entregar as seguintes notas:
        <ul>
            <li>
                <img src="./_imagens/100-reais.jpg" alt="Nota de R$100">x<?=$notas_100?>
            </li>
            <li>
                <img src="./_imagens/50-reais.jpg" alt="Nota de R$50">x<?=$notas_50?>
            </li>
            <li>
                <img src="./_imagens/10-reais.jpg" alt="Nota de R$10">x<?=$notas_10?>
            </li>
            <li>
                <img src="./_imagens/5-reais.jpg" alt="Nota de R$5">x<?=$notas_5?>
            </li>
        </ul>
    </section>
</body>

</html>