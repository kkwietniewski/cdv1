<?php
    // echo $_POST['cityid'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $birthday = $_POST['birthday'];
    $cityid = $_POST['cityid'];

    if (!empty($name) && !empty($surname) && !empty($birthday) && !empty($cityid)) {
 
        require_once './connect.php';// ./ katalog bierzący
        
        $sql = "INSERT INTO user (`city_id`, `name`, `surname`, `birthday`) VALUES('$cityid', '$name', '$surname', '$birthday')";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        header('location: ../1_shop.php');
    }else{
        header('location: ../1_shop.php');

    }
?>