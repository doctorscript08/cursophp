<!DOCTYPE html>
<html lang="pt-AO">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 09</title>
</head>
<body>
    <pre>
        <?php
            require_once('Pessoa.php');
            require_once('Professor.php');
            require_once('Aluno.php');
            require_once('Funcionario.php');
            $p1 = new Pessoa('Kelson de Sousa', 18, 'M');
            $p2 = new Aluno(001, 'Inforgest', 'Kelson de Sousa', 18, 'M');
            $p3 = new Professor('Programação', 500000, 'Raúl', 54, 'M');
            $p4 = new Funcionario('RH', true, 'Fabiana', 34,  'F');

            $p3->receber_aumento(500000);
            print_r($p2);
            print_r($p3);
            print_r($p4);
        ?>
    </pre>
</body>
</html>