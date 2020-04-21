<?php
    // echo date("Y");//year
    echo date("Y-m-d"), "<br>";//małe litery z 0
    echo date("Y-F-d"), "<br>";//F to słownie 
    echo date("H-i-s"), "<br>";//godziny,min, sec

    echo "Dzień tygodnia:",date("w"),"<br>";
    echo "Numer tygodnia:",date("W"),"<br>";
    echo "Dzień roku:",date("z"),"<br>";//0-365, niedziela = 0

    //drugi sposób
    $data = getdate();//tablica
    echo '<pre>';
    print_r($data);
    echo '</pre>';

    echo "Dzień tygodnia: ", $data['weekday'],"<br>";
    $day = $data['wday'];
    switch ($day) {
        case '0':
            $day = 'niedziela';
            break;
        case '1':
            $day = 'poniedziałek';
            break;
        case '2':
            $day = 'wtorek';
            break;
    }
    echo "Dzień tygodnia: ", $day,"<br>";

    //znacznik czasu
    $y1 = 2020;
    $m1 = 4;
    $d1 = 21;
    $time1 = mktime(0, 0, 0, $m1, $d1, $y1);
    echo $time1;
?>