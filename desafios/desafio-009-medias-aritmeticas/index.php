<!DOCTYPE html>
<html lang="pt-AO">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MÉDIAS ARITMÉTICAS</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
        $n1 = $_GET['valor_1'] ?? 1;
        $n2 = $_GET['valor_2'] ?? 1;
        $p1 = $_GET['peso_1'] ?? 1;
        $p2 = $_GET['peso_2'] ?? 1;
    ?>

    <main>
        <h1>Médias Aritméticas</h1>

        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valor_1">1º Valor</label>
            <input type="number" name="valor_1" id="valor_1" step="0.001" value="<?=$n1?>" required>

            <label for="peso_1">1º Peso</label>
            <input type="number" name="peso_1" id="peso_1" value="<?=$p1?>" required>

            <label for="valor_2">2º Valor</label>
            <input type="number" name="valor_2" id="valor_2" step="0.001" value="<?=$n2?>" required>

            <label for="peso_2">2º Peso</label>
            <input type="number" name="peso_2" id="peso_2" value="<?=$p2?>" required>

            <input type="submit" value="Calcular Médias">
        </form>
    </main>


    <section>
        <h2>Cálculo das Médias</h2>
        <p>Analisando os valores <?=$n1?> e <?=$n2?>:</p>
        <ul>
            <li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a <?=$media_arit = number_format((($n1 + $n2) / 2), 2, ',', '.')?></li>
            <li>A <strong>Médias Aritmética Ponderada</strong> com pesos 1 e 1 é igual a <?=$media_pond = number_format((($n1 * $p1) + ($n2 * $p2)) / ($p1 + $p2), 2, ',', '.')?></li>
        </ul>
    </section>
</body>
</html>