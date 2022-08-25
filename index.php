<?php
if ($_SERVER['REQUEST_URI'] == '/') {
    $page = 'landing';
} else {
    $page = substr($_SERVER['REQUEST_URI'], 1);
    if (!preg_match('/^[A-z0-9]{3,15}$/ ', $page)) {
        exit('Url error');
    }
}

$conn = mysqli_connect('localhost', 'serg', 'gK3gW2kE', 'testserg');

if(!$conn) {
    exit('MySQL Error!');
}

session_start();


if (file_exists('all/' . $page . '.php')) {
    include 'all/' . $page . '.php';
} else if (!$_SESSION['id'] and file_exists('guest/' . $page . '.php')) {
    include 'guest/' . $page . '.php';
} else if ($_SESSION['id'] and file_exists('auth/' . $page . '.php')) {
    include 'auth/' . $page . '.php';
} else {
    notFound();
}

function message($text)
{
    exit('{"message" : "' . $text . '"}');
}

function go($url)
{
    exit('{"go" : "' . $url . '"}');
}

function random_str($num = 30) {
    return substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'), 0, $num);
}

function notFound() {
    exit('Page not found');
}

function questionShow()
{
    $questions = array(
        1 => 'Столица Украины?',
        2 => 'Столица США?',
        3 => 'Столица Англии?',
        4 => 'Столица Франции?',
        5 => 'Столица Германии?',
    );

    $num = mt_rand(1, count($questions));
    $_SESSION['question'] = $num;
    echo $questions[$num];
}

function questionValidator()
{
    $answers = array(
        1 => 'киев',
        2 => 'вашингтон',
        3 => 'лондон',
        4 => 'париж',
        5 => 'берлин',
    );

    if ($_SESSION['question'] != array_search(strtolower($_POST['question']), $answers)) {
        message('Ответ не верный');
    }
}

function emailValidator() {
    if(! filter_var($_POST['EMail'], FILTER_VALIDATE_EMAIL)) {
        message('Wrong E-mail entered');
    }
}

function passwordValidator() {
    if(! preg_match('/^[A-z0-9]{10,30}$/ ', $_POST['password'])) {
        message('Wrong password');
    } else {
        $_POST['password'] = md5($_POST['password']);
    }

}