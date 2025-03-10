<!DOCTYPE html>
<html lang="pt-AO">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIPOS DE STRINGS EM PHP</title>
</head>
<body>
    <h1>STRINGS EM PHP</h1>

    <?php 
        $nome = 'Kelson'; #String Single Quoted
        $sobrenome = "de Sousa \u{1F596}"; #String Double Quoted
        $apelido = "Gafanhoto";

        echo "$nome \"$apelido\" $sobrenome";

        const CANAL = "Curso em Vídeo \u{1F499}";

        echo '<br>Eu amo o canal ' . CANAL;
        echo "<br>Estamos no ano de " . date('Y');

        $nome = "Rodrigo";
        $snom = "Nogueira";

        echo "<br>$nome " . '"Minotauro"' ." $snom";

        #Strings Heredoc e Nowdoc
        $curso = "PHP";
        $ano = date('Y');

        echo <<<FRASE
            <br>Estou estudando

                $curso em $ano
        FRASE; #String Heredoc

        $str = <<< 'TESTE'
            Olá, $nome
        TESTE; #String Nowdoc

        echo "<br>$str";
    ?>
</body>
</html>