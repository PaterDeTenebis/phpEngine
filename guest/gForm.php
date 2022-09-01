<?php

if ($_POST['login_f']) {
    //questionValidator();
    emailValidator();
    passwordValidator();
    if (!mysqli_num_rows(mysqli_query($conn, "SELECT `id` FROM `users` WHERE `mail` = '$_POST[EMail]' AND `pass` = '$_POST[password]'"))) {
        message('Wrong E-mail or password.');
    } else {
        $row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM `users` WHERE `mail` = '$_POST[EMail]'"));
        foreach ($row as $key => $value) {
            $_SESSION[$key] = $value;
        }
        go('profile');
    }
} else if ($_POST['register_f']) {
    emailValidator();
    passwordValidator();
    //questionValidator();
    if (mysqli_num_rows(mysqli_query($conn, "SELECT `id` FROM `users` WHERE `mail` = '$_POST[EMail]'"))) {
        message('This E-mail already exist in our database.');
    } else {
        $code = random_str(8);
        $_SESSION['confirm'] = array(
            'type' => 'register',
            'login' => $_POST['logIn'],
            'email' => $_POST['EMail'],
            'password' => $_POST['password'],
            'code' => $code,
        );
        mail($_POST['EMail'], 'Registraion', "Here is a code to confirm your registraion: $code");
        go('confirm');
    }
    
} else if ($_POST['recovery_f']) {
    emailValidator();
    if (!mysqli_num_rows(mysqli_query($conn, "SELECT `id` FROM `users` WHERE `mail` = '$_POST[EMail]'"))) {
        message('This E-mail does not exist in our database.');
    } else {
        $code = random_str(8);
        $_SESSION['confirm'] = array(
            'type' => 'recovery',
            'email' => $_POST['EMail'],
            'code' => $code,
        );
        mail($_POST['EMail'], 'Password Recovery', "Here is a code to confirm your password recovery: $code");
        go('confirm');
    }
} else if ($_POST['confirm_f']) {
    if ($_SESSION['confirm']['type'] == 'register') {
        if ($_SESSION['confirm']['code'] != $_POST['code']) {
            message('Wrong confirmation code entered.');
        } else {
            if(is_numeric($_COOKIE['ref'])) {
                $ref = $_COOKIE['ref'];
            } else {
                $ref = 0;
            }
            $query = 'INSERT INTO `users` (`login`, `pass`, `mail`, `ref`) VALUES ("' . htmlspecialchars($_SESSION['confirm']['login']) . '", "' . htmlspecialchars($_SESSION['confirm']['password']) . '", "' . htmlspecialchars($_SESSION['confirm']['email'])  . '", '.$ref.')';
            mysqli_query($conn, $query);
            unset($_SESSION['confirm']);
            go('signIn');
        }
    } else if ($_SESSION['confirm']['type'] == 'recovery') {
        if ($_SESSION['confirm']['code'] != $_POST['code']) {
            message('Wrong confirmation code entered.');
        } else {
            $newPass = random_str(10);
            $query = 'UPDATE `users` SET `pass` = "' . md5($newPass) . '" WHERE `mail` = "' . htmlspecialchars($_SESSION['confirm']['email'])  . '"';
            mysqli_query($conn, $query);
            unset($_SESSION['confirm']);
            message("Your new password: $newPass");
        }
    } else {
        notFound();
    }
}
