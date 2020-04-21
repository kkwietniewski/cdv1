<?php
    $data = getdate();

    $h1 = $data['hours'];
    $m1 = $data['minutes'];
    $s1 = $data['seconds'];
    $y1 = 2020;
    $m1 = 4;
    $d1 = 21;

    $time1 = mktime($h1, $m1, $s1, $m1, $d1, $y1);

    $h2 = 0;
    $m2 = 0;
    $s2 = 0;
    $y2 = 2018;
    $m2 = 4;
    $d2 = 21;

    $time2 = mktime($h2, $m2, $s2, $m2, $d2, $y2);

    $seconds = abs($time1 - $time2);//zwracanie wartości nieujemnych
    $minutes = floor($seconds / 60);//obicnanie ułamkłów
    $days = floor($minutes / (60*24));
    $years = number_format($days / 365, 4);//wyświetlanie 4 miejsc po przecinku

    echo "Ilość sekund: $seconds<br>";
    echo "Ilość minut: $minutes<br>";
    echo "Ilość dni: $days<br>";
    echo "Ilość lat: $years<br>";
?>