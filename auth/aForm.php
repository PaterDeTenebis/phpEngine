<?php
if ($_POST['edit_f']) {
    if ($_POST['password'] and md5($_POST['password']) != $_SESSION['pass']) {
        passwordValidator();
        mysqli_query($conn, "UPDATE `users` SET `pass` = '$_POST[password]' WHERE id = '$_SESSION[id]'");
        message('Password successfully updated');
    } else if ($_POST['EMail'] and $_POST['EMail'] != $_SESSION['mail']) {
        emailValidator();
        mysqli_query($conn, "UPDATE `users` SET `mail` = '$_POST[EMail]' WHERE id = '$_SESSION[id]'");
        message('Email successfully updated');
    } else if ($_POST['pName'] || $_POST['pSurname'] || $_POST['pPhone'] || $_POST['pSecName'] || $_POST['telegram']) {
        if ($_POST['pName']) {
            mysqli_query($conn, "UPDATE `users` SET `firstname` = '$_POST[pName]' WHERE id = '$_SESSION[id]'");
        }
        if ($_POST['pSurname']) {
            mysqli_query($conn, "UPDATE `users` SET `thirdname` = '$_POST[pSurname]' WHERE id = '$_SESSION[id]'");
        }
        if ($_POST['pPhone']) {
            mysqli_query($conn, "UPDATE `users` SET `phone` = '$_POST[pPhone]' WHERE id = '$_SESSION[id]'");
        }
        if ($_POST['pSecName']) {
            mysqli_query($conn, "UPDATE `users` SET `lastname` = '$_POST[pSecName]' WHERE id = '$_SESSION[id]'");
        }
        if ($_POST['telegram']) {
            mysqli_query($conn, "UPDATE `users` SET `telegram` = '$_POST[telegram]' WHERE id = '$_SESSION[id]'");
        }
        message('Data successfully updated');
    }
}
