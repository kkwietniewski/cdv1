<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/1_table.css">
    <title>Shop - user</title>
</head>
<body>
    <h3>Tabela user</h3>
    <?php
        //Wyświetla tylko warning i nie przerwywa wyświetlania reszty pliku
        // include_once './scripts/connect1.php';

        require_once './scripts/connect.php';
        require_once './scripts/function.php';

        // $sql = "SELECT * FROM `user`";
        $sql = "SELECT * FROM user INNER JOIN city USING(city_id)";
        echo <<<TABLE
        <table>
        <tr>
            <th>Id</th>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>Data urodzenia</th>
            <th>Rok urodzenia</th>
            <th>Miasto</th>
        </tr>
TABLE;
        if($result = mysqli_query($conn, $sql)){
            echo '<tr>';
            while($row = mysqli_fetch_assoc($result)){
                $year = year($row['birthday']);
                // echo $year;
                if($year == 0000){
                    $year = '-';
                }
                echo <<<ROW
                    <tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['surname']}</td>
                        <td>{$row['birthday']}</td>
                        <td>$year</td>
                        <td>{$row['city']}</td>
                        <td><a href="./script/del_user.php?id=$row[id]">Usuń</a></td>
                    </tr>
                ROW;
            }
            echo '</tr>';
            echo '</table>';
        }
    ?>
    <h3>Koniec pliku</h3>
</body>
</html>