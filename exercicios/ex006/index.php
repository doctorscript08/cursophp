<!DOCTYPE html>
<html lang="pt-AO">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXPRESSÕES ARITMÉTICAS</title>
</head>
<body>
    <?php 
        $res = 50 / (2 + 3) **2;
        echo "<p>O resultado é $res!</p>";

        #Funções Aritméticas
        $r1 = abs(-5);
        echo "<p>abs(-5) = $r1!</p>";

        $r2 = base_convert(50, 10, 16);
        echo "<p>base_convert(50, 10, 16) = $r2!</p>";

        $r3 = ceil(hypot(5, 5));
        echo "<p>ceil(hypot(5, 5)) = $r3!</p>";

        $r4 = floor(5.5);
        echo "<p>floor(5.5) = $r4!</p>";

        $r5 = round(10.90);
        echo "<p>round(10.90) = $r5!</p>";

        $r6 = intdiv(10, 4);
        echo "<p>intdiv(10, 4) = $r6!</p>";

        $r7 = min(5, 1, 4, 3, 6, 8, 0, -1, -10000, 200);
        echo "<p>min(5, 1, 4, 3, 6, 8, 0, -1, -10000, 200) = $r7</p>";

        $r8 = max(5, 1, 4, 3, 6, 8, 0, -1, -10000, 200);
        echo "<p>max(5, 1, 4, 3, 6, 8, 0, -1, -10000, 200) = $r8</p>";

        $r9 = pi();
        echo "<p>pi() = $r9! Ou M_PI = " . M_PI . "</p>";

        $r10 = pow(5, 2);
        echo "<p>pow(5, 2) = $r10</p>";

        $r11 = sin(60);
        echo "<p>sin(60) = $r11</p>";

        $r12 = cos(60);
        echo "<p>cos(60) = $r12</p>";

        $r13 = tan(60);
        echo "<p>tan(60) = $r13</p>";

        $r14 = sqrt(100);
        echo "<p>sqrt(100) = $r14</p>";

        #Operadores Aritméticos
        $soma = "2" + "2";
        echo "<p>$soma</p>";

        $subtracao = 5 - 2;
        echo "<p>$subtracao</p>";

        $multiplicacao = 5 * 2;
        echo "<p>$multiplicacao</p>";

        $divisao = 5 / 2;
        echo "<p>$divisao</p>";

        $modulo = 5 % 2;
        echo "<p>$modulo</p>";

        $exponenciacao = 5 ** 2;
        echo "<p>$exponenciacao</p>";
    ?>
</body>
</html>