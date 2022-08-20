<?
if ($_SERVER['REQUEST_URI'] == '/') $page = 'home';
else {
    $page = substr($_SERVER['REQUEST_URI'], 1);
    if (!preg_match('/^[A-z0-9]{3-15}$/', $page)) exit('url error');
}

session_start();

if (file_exists('all/' . $page . '.php')) include 'all/' . $page . '.php';
else if ($_SESSION['ulogin'] != 1 and file_exists('guest/' . $page . '.php')) include 'guest' . $page . '.php';
else if ($_SESSION['ulogin'] == 1 and file_exists('auth/' . $page . '.php')) include 'auth/' . $page . '.php';
else exit('Page not found');

function top($title)
{
    echo '<!DOCTYPE html>
        <html>
            <head>
                <meta charset="UTF-8">
                <title>' . $title . '</title>
                <link rel="stylesheet" href="/css/style.css">
            </head>
            <body>';
}

function bottom()
{
    echo '</body>
            <html>';
}
