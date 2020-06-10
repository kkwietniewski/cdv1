<?php
    session_start();

    if (!empty($_POST['email']) && !empty($_POST['pass'])) {
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        require_once './connect.php';

        //sprawdzenie czy istnieje w bazie danych email podany przez uzytkownika

        $sql = "SELECT * FROM `user` WHERE `email` = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $error = 0;
        
        if ($result->num_rows == 1) {
            //adres poczty elektronicznej istnieje w bazie danych
            $user = $result->fetch_assoc();
            //echo $user['pass'];
            if (password_verify($pass, $user['pass'])) {
                header ('location: ../pages/logged/admin.php');
            //     switch ($user['status_id']) {
            //         case 1:
            //             $_SESSION['logged']['name'] = $user['name'];
            //             $_SESSION['logged']['surname'] = $user['surname'];
            //             $_SESSION['logged']['email'] = $user['email'];
            //             $_SESSION['logged']['permission'] = $user['permission'];

            //         break;
            //         case 2:
            //             $_SESSION['error'] = 'Konto jest nieaktywne<br>Email:'.$user['email'];
            //         break;
            //         case 3:
            //             $_SESSION['error'] = 'Konto jest zablokowane';
            //         break;
                    exit();
            }
            else{
                $error = 1;
                $_SESSION['error'] = 'Błędny login lub haslo!';
            }
            
            if ($user['status_id'] != 1) {
                header ('location: ../');
            }
            else{
                switch ($$user['permission_id']) {
                    case 1:
                        header ('location: ../pages/logged/admin.php');
                    break;
                    
                    case 2:
                    header ('location: ../pages/logged/admin.php');
                    break;

                    case 3:
                    header ('location: ../pages/logged/admin.php');
                    break;
                }
            }
                // exit();
        }  
        else{
            $error = 1;
            $_SESSION['error'] = 'Błędny login lub haslo!';
        }
        if($error == 1){
            ?>
            <script>
                history.back();
            </script>
            <?php
            exit();
        }
        echo 'test';
    }
    else{
        $error = 1;
        $_SESSION['error'] = 'Wypełnij wszystkie pola!';
        ?>
            <script>
                history.back();
            </script>
            <?php
    }
?>