<!-- Ścieżka powinna wyglądać tak C:\xampp\htdocs\git\nazwa_katalogu\php\1_zmienne.php -->
<?php
    echo "CDV<br>";
    echo "CDV<br>";

    $name = 'Janusz'; // zmienne z $
    echo "<br>Mam na imię: $name";// Różnica między "", a '', pojedyncze tylko do teksu.
    echo "<br>Mam na imię: ".$name;//konkatenacja
    echo "<br>Mam na imię: ",$name,"<br>";//interpolacja

    //$imię // można nazywac z polskimi znakam, ale sie nie powinno, wiekość ma znaczenie

    $dec = 100;//dziesietnie
    $hex = 0xB;//hexadecymalne 11
    $oct = 021;//oktadec 17
    $bin = 0b1010;//binarne 10

    echo $bin;


    $x = 5.7;

    //składnia heredoc

    $name = "Anna";
    $surname = "Nowak";
    
    //<<< - operator
    //ETYKIETA to nazwa etykiety, rozpoczynamy nią i zamykamy jak znacznikami np. div
    //1.Powszechny błąd spacja po ETYKIETA <--Tak jak tu
    //2.Spacja przed ' ETYKIETA;'
    echo <<<ETYKIETA
        <br>Dane użytkownika<br>
        Imię: $name<br>
        Nazwisko: $surname<hr>
ETYKIETA;

    //Powinno się robić etykiety z dużej, bo mogą się powtórzyć
    //Przekierowanie musi mieć przypisanie =
    //Wielokrotne wyświetlanie
    $data =<<<SHOW
        New data<br>
SHOW;

    echo $data;

    //składnia nowdoc

    $name = "Tadeusz";
    //heredoc
    echo <<<E
    Imię: $name<br>
E;
    //nowdoc
    echo <<<'E'
    Imię: $name<br>
E;

?>