<!DOCTYPE html>
<html lang="pt-AO">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 05</title>
</head>
<body>
    <h1>Abrir conta Bancária</h1>
    <pre>
        <?php
            require_once 'Conta.php';

            $p1 = new Conta;
            $p2 = new Conta;

            echo $p1->abrirConta('Jubileu', 1111, 'cc');
            echo $p2->abrirConta('Creuza', 2222, 'cp');

            echo $p1->depositar(300);
            echo $p2->depositar(500);

            echo $p2->sacar(100);

            echo $p1->pagarMensalidade();
            echo $p2->pagarMensalidade();

            echo $p2->sacar(1000);

            echo $p1->fecharConta();
            echo $p2->fecharConta();

            echo $p1->sacar(338);
            echo $p2->sacar(530);

            echo $p1->fecharConta();
            echo $p2->fecharConta();

            print_r($p1);
            print_r($p2);
        ?>
    </pre>
</body>
</html>