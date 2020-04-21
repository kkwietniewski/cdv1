<?php
//rzutowanie typu danych
    function value($a):bool{
        if ($a< 0) {
            return "ujemna";
        }else if ($a > 0) {
            return "dodatnia";
        }else {
            "zero";
        }
    }

    $x = value(-5);
    echo $x;
    echo gettype($x),"<br>";

    function getValue():int{
        return 10.55;
    }

    echo getValue(),"<br>";//traktuje wartość jako int

    // //zasięg zmiennych
    // $x=10;//globalna
    // function show(){
    //     echo "Wartośc zmiennej $x";
    // }
    // show();//wyświetli błąd z Undefined variable

    $x=10;//globalna
    function show(){
        echo "Wartośc zmiennej ",$GLOBALS['x'];
        
        $GLOBALS['x'] += 1;
        echo "Wartośc zmiennej ",$GLOBALS['x']; 
    }
    show();
    echo "Wartośc zmiennej ",$GLOBALS['x'];

    function show1(){
        global $x;//deklaracja zmiennej globalnej
        echo "Wartośc zmiennej $x";
        $x += 1;
        echo "Wartośc zmiennej $x"; 
    }
    show1();

    echo "<hr>";

    function add(){
        $num = 10;
        echo "\$num = $num<br>";
        $num += 10;
    }
    add();
    add();
    add();

    function add1(){
        static $num = 10;//pamiętanie wartośći, odnoszenie się do adresu
        echo "\$num = $num<br>";
        $num += 10;
    }
    add1();
    add1();
    add1();

    //argumenty
    function add2($x, $y=1){
        return $x + $y;
    }

    $z = 20;

    $num = add2($z, 6);
    echo $num, "<br>";

    $num = add2(2, 6);
    echo $num, "<br>";

    $num = add2(3);
    echo $num, "<br>";

    //argumenty i typy danych
    function multi(float $x, int $y){
        return $x * $y;
    }

    echo multi(3, 4);//12
    echo multi(3.5, 2);//7
    echo multi(2, 3.5);//6
?>