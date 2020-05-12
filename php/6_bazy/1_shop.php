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
                <td><a href="./scripts/del_user.php?id=$row[id]">Usuń</a></td>
                </tr>
ROW;
            }
            echo '</table>';
            //mysqli_close($conn);
        }
        ?>
    <?php
    // $cities_sql = "SELECT id, name FROM city";
    // $city_id = Array();
    // $city_names = Array();
    // if ($cities_result = mysqli_query($conn, $cities_sql)) {
    //     while(strlen($cities_row['name'] != 0)){
    //         if(strlen($cities_row['name']) != 0){
    //             $city_names[] = $cities_row['name'];
    //         }
    //         if(strlen($cities_row['id']) != 0){
    //             $city_id[] = $cities_row['id'];
    //         }
    //     }
    // }
    
    // var_dump($cities_names)
    // var_dump($city_id);
    
    if (isset($_GET['add_user'])) {
        echo "<h3>Dodawanie użytkownika</h3>";
        ?>
            <form action="./scripts/add_user.php" method="post">
                <input type="text" name="name" placeholder="Imię"><br>
                <input type="text" name="surname" placeholder="Nazwisko"><br>
                Data urodzenia: <input type="date" name="birthday"><br>
                Lista: <select name="cityid">
                    <?php
                    // require_once './scripts/connect.php';
                    $sql = "SELECT * FROM city";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        $city = $row[city];
                        $cityid= $row[city_id];
                        echo "<option value=\"$cityid\">$city</option>";
                    }

                    ?>
                </select><br>
                <input type="submit" name="button" value="Dodaj użytkonika"><br>
            </form>
        <?php
    }else{
        echo <<<H
        <h3>
        <!-- Od razu znak ? -->
            <a href="?add_user=">Dodaj użytkownika</a>
        </h3>

H;
    }
    ?>
</body>
</html>