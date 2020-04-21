<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e2</title>
</head>
<body>
    <form method="POST">
        <input name="login" type="text" placeholder="login" autofocus>
        <input type="submit" value="Zatwierdź">
    </form>
    <?php
    $censure = array("czarny", "biały");
    $replace = array("_#***#_","_#***#_"); 
    if(!empty($_POST['login'])){
        // echo $_POST['login'],"<br>";

        $validLogin = str_ireplace($censure, $replace, $_POST['login']);
        //W heredoc nie można dać zmiennej $_POST['login'] w takiej postaci trzeba usunać albo '', albo dodać {} do całego wyrazenia
        echo <<<E
        Dane przed poprawą: {$_POST['login']}<br>
        Dane po poprawie: $validLogin<br>
    E;
    }
    ?>
</body>
</html>