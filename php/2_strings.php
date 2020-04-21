<?php
    //Problem ze spacją, heredoc trakutuje odstep jako spacje
    $text =<<<TEXT
    CDV - 
    Collegium
    Da Vinci<br>
TEXT;

    echo $text;//W jednej linii
    echo nl2br($text);//funkcja uwzględniająca entery newlinetobr

    echo strtolower($text);//zamiana na małe
    echo strtoupper($text);//zamiana na drukowane
    echo ucfirst($text);//pierwsza litera drukowana uppercasefirst
    echo ucfirst(strtolower(trim($text)));//pierwsza litera drukowana uppercasefirst, trim usuwa spacje

    // echo strtolower($text);
    // echo strtolower($text);
    // $text1 = strtolower(trim($text));
    // $text1 = ucfirst($text1);
    // echo $text1;

    echo ucwords(strtolower(trim($text)));//w każdym słowie robi dużą literę

    $lorem = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt reprehenderit vero maxime dignissimos temporibus asperiores molestiae unde modi non, iure, ratione amet error odio aliquam fugit atque! Libero, quae aperiam.";

    echo $lorem,"<br>";
    $col = wordwrap($lorem, 40, "<br>");//co, co ile ma dzielić, czym (separator)
    // $col = wordwrap($lorem, 40, "<hr>");

    echo $col;

    //usuwanie białych znaków

    $name = " Janusz  ";
    echo strlen($name);//dlugosc ciagu 9
    echo strlen(ltrim($name));//8 left
    echo strlen(rtrim($name));//7 right
    echo strlen(trim($name)), '<br>';//6 dwie strony

    //przeszukiwanie ciagu znaków
    $address = "Poznań, ul. Polna 10, tel. (61) 111 22 33";
    $find = strstr($address, 'tel');//wyszukiwanie do konca stringa
    $find = stristr($address, 'Tel');// bez zwracania uwagi na duże litery
    $find = stristr($address, 'tel', true);// wyszikuje do momentu napotkania 'tel', false domyślnie
    // $find = stristr($address, 64);//wyszukiwanie małpy @
    echo $find, '<br>';

    //funkcja do przetwarzania ciągów znaków
    $surname = substr("Janusz Kowalski", 7, 5);//wycinanie
    echo $surname, "<br>";

    // przetwarzanie ciągów znaków, np. ążźś
    $login = "BĄczekśżźć";//problem z dużymi literami Ą
    $censure = array("ą","ę","ś","ż","ź","ć","ó","ń","ł","Ą");
    $replace = array("a","e","s","z","z","c","o","n","l","a");
    
    $validLogin = str_replace($censure, $replace, $login);//co zamienic, czym w jakiej wartosci
    $validLogin = str_ireplace($censure, $replace, $login);//powinno działać na dużych, ale na polskich nie działa
    echo "Dane przed poprawą: $login<br>";
    echo "Dane po poprawie: $validLogin<br>";

    
?>