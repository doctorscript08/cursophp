<!DOCTYPE html>
<html lang="pt-AO">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULADORA DE TEMPO</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
        $tempo = $_GET['tempo'] ?? 0;
    ?>

    <main>
        <h2>Calculadora de Tempo</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="tempo">Qual é o total em segundos?</label>
            <input type="number" name="tempo" id="tempo" value="<?=$tempo?>">

            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Totalizando tudo</h2>
        <?php 
            $semanas = intval($tempo / 604800);
            $dias = intval(($tempo % 604800) / 86400);
            $horas = intval(($tempo % 86400) / 3600);
            $minutos = intval(($tempo % 3600) / 60);
            $segundos = intval(($tempo % 3600) % 60);
        ?>
        <p>
            Analizando o valor que você digitou, <strong><?=$tempo?> segundos</strong> equivalem a um total de:
        </p>
        <ul>
            <li><?=$semanas?> semanas</li>
            <li><?=$dias?> dias</li>
            <li><?=$horas?> horas</li>
            <li><?=$minutos?> minutos</li>
            <li><?=$segundos?> segundos</li>
        </ul>
    </section>
</body>
</html>