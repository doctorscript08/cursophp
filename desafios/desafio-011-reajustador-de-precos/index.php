<!DOCTYPE html>
<html lang="pt-AO">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REAJUSTADOR DE PREÇOS</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
        $preco_produto = $_GET['preco'] ?? 0;
        $percentagem = $_GET['percentagem'] ?? 0;
    ?>
    <main>
        <h2>Reajustador de Preços</h2>

        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="preco">Preço do Produto R$</label>
            <input type="number" name="preco" id="preco" step="0.001" value="<?=$preco_produto?>">

            <label for="percentagem">Qual será o percentual de reajuste? (<strong><span id="p">0</span>%</strong>)</label>
            <input type="range" name="percentagem" id="percentagem" min="0" max="100" step="1" oninput="mudaValor()" value="<?=$percentagem?>">

            <input type="submit" value="Reajustar">
        </form>
    </main>

    <?php
        $reajuste = $preco_produto + ($preco_produto * $percentagem / 100);
    ?>

    <section>
        <h2>Resultado do Reajuste</h2>
        <p>
            O produto que custava R$<?=number_format($preco_produto, 2, ',', '.')?>, com o <strong><?=$percentagem?>% de aumento</strong> vai passar a custar R$<strong><?=number_format($reajuste, 2, ',', '.')?></strong> a partir de agora.
        </p>
    </section>

    <script>
        function mudaValor() {
            document.getElementById('p').innerText = document.getElementById('percentagem').value
        }
    </script>
</body>
</html>