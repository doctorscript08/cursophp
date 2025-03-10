<!DOCTYPE html>
<html lang="pt-AO">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESAFIO PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de Número Real</h1>
        <?php 
            $num = $_POST['num'] ?? 0;

            echo "<p>Analisando o número <strong>" . number_format($num, 3, ",", ".") . "</strong> informado pelo usuário:</p>";

            $int = intval($num);
            $fra = $num - $int;

            echo "<ul><li>A parte inteira do número é: <strong>" . number_format($int, 0, ",", ".") . "</strong></li> <li>A parte decimal do número é: <strong>" . number_format($fra, 3, ",", ".") . "</strong></li></ul>";
        ?>

        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>