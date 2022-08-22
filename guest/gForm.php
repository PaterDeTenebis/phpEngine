<?php

if ($_POST['login_f']) {
    message('Auth');
} else if ($_POST['register_f']) {
    go('signIn');
} else if ($_POST['recovery_f']) {
    message('recovery');
} else if ($_POST['confirm_f']) {
    message('confirm');
}
