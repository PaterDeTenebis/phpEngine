<?php
function top($title)
{
    echo '<!DOCTYPE html>
        <html>
            <head>
                <meta charset="UTF-8">
                <title>' . $title . '</title>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
                <link rel="stylesheet" href="/../fonts/RoadRadio/stylesheet.css?ver=0.3">
                <link rel="stylesheet" href="/css/fa-svg-with-js.min.css">
                <link rel="stylesheet" href="/css/animate.css">
                <link rel="stylesheet" href="/css/style.css?ver=0.2">
            </head>
            <body>';
}

function bottom()
{
    echo '</body>
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
            <script src="/js/jquery.js"></script>
            <script src="/js/wow.min.js"></script>
            <script src="/js/scripts.js"></script>
        <html>';
}
