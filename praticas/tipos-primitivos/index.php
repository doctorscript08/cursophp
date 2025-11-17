<?php 
    $a_bool = true;
    $a_str = "foo";
    $a_str2 = "foo";
    $an_int = 12;

    echo get_debug_type($a_bool). "<br>";
    echo get_debug_type($a_str). "<br>";

    if (is_int($an_int)) {
        $an_int += 4;
    }

    var_dump($an_int);

    if (is_string($a_bool)) {
        echo $a_bool;
    }

    class A{};
    class B{};

    /*function foo(A $x) {
        get_debug_type($x);
    }

    foo(new B()); dá erro, porque a função espera um objecto do tipo A, não B*/

    interface Animal {
        public function fazerSom();
    }

    class Cachorro implements Animal {
        public function fazerSom() {
            echo "au au";
        }
    }

    function emitirSom(Animal $a) {
        $a->fazerSom();
    }

    emitirSom(new Cachorro); #isto funciona, porque Cachorro implementa Animal, ou seja, é um subtipo
?>