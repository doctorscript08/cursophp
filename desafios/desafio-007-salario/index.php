<!DOCTYPE html>
<html lang="pt-AO">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SALÁRIO</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
        $minimo = 1_380.60;
        $salario = $_GET['salario'] ?? $minimo;
        $qtd_salarios = intdiv($salario, $minimo);
        $acrescimo = $salario % $minimo;

        $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
        $salario_fmt = numfmt_format_currency($padrao, $salario, "BRL");
        $acrescimo_fmt = numfmt_format_currency($padrao, $acrescimo, "BRL");
    ?>

    <main>
        <h1>Informe se Salário</h1>

        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="csalario">Salário (R$)</label>
            <input type="number" name="salario" id="csalario" step="0.001" value="<?=$salario?>">
            
            <p>Considerando o salário mínimo de <strong>R$<?=number_format($minimo, 2, ',', '.')?></strong></p>

            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Resultado Final</h2>
        <p>Quem recebe um salário de <?=$salario_fmt?> ganha <strong><?=$qtd_salarios?> salários mínimos </strong> + <?=$acrescimo_fmt?>.</p>
    </section>
</body>
</html>