<!DOCTYPE html>
<html lang="pt-AO">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 10</title>
</head>
<body>
    <pre>
        <?php
            require_once 'Visitante.php';
            require_once 'Aluno.php';
            require_once 'Bolsista.php';

            $v1 = new Visitante('Tomás', 45, 'M');
            $a1 = new Aluno('Maria', 14, 'F', 001, 'Enfermagem');
            $b1 = new Bolsista('João', 20, 'M', 002, 'Designer', '001');

            echo $a1->pagar_mensalidade();
            echo $b1->renovar_bolsa();
            echo $b1->pagar_mensalidade();

            print_r($a1);
            print_r($b1);
        ?>
    </pre>
</body>
</html>