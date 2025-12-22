<?php
    declare(strict_types=1);

    echo "<h1>Conversão e definição de tipos</h1>";

    function sum(int $a, int $b): int {
        return $a + $b;
    }

    echo sum(5, 10). "<br>";

    $name = (int) "Kelson";
    echo $name. "<br>";

    $age = 18;

    $sum = (int) $name + $age;
    #$sum = settype($name, "integer");

    echo "<br>". $sum;

    echo "<hr>";
    echo "<h1>Verficação e validação de valores e tipos</h1>";

    echo "name: ";
    var_dump($name);
    echo "| var_dump: mostra o tipo e o valor da expessão.";

    echo "<br>name é do tipo: ". get_debug_type($name). " | get_debug_type: mostra o tipo da expressão.<br>";

    $legal_age = is_array($age) ? "true" : "false";
    echo $legal_age. " | is_type: valida o tipo da variável.";

    echo "<hr>";
    echo "<h1>Subtipagem</h1>";

    class A{};
    class B extends A {};
    class C{};
    class D extends B {};

    function relationship(A $a) {
        echo "I accept!<br>";
    }

    relationship(new B); #funciona, porque B herda de A e apresenta exactamente o mesmo comportamento
    #relationship(new C); não funciona, porque C não possui nenhuma relacção com A, mesmo que apresente o mesmo comportamento
    relationship(new D); #funciona, porque D herda de B que é filha de A, ou seja, têm relacção

    echo "<hr>";
    echo "<h1>Tipos atômicos</h1>";

    echo "<h2>Escalares</h2>";
    echo "<p>Representam valores únicos, sem estrutura interna.</p>";
    echo "<p>São os tipos: int, string, float/decimal e bool.</p>";

    echo "<h2>Definidos pelo usuário</h2>";
    echo "<p>São tipos que o usuário cria ou define e usa.</p>";
    echo "<p>Podem ser: classes, interfaces e enumerações.</p>";

    echo "<h2>Compostos</h2>";
    echo "<p>São tipos que apresentam uma estrutura interna, ou seja, podem armazenar ou agrupar vários outros tipos ou valores dentro de si.</p>";
    echo "<p>Podem ser: arrays, objectos, callable e interable.</p>";

    echo "<hr>";
?>