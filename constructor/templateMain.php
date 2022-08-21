<?php 
function top($title)
{
    echo '<!DOCTYPE html>
        <html>
            <head>
                <meta charset="UTF-8">
                <title>' . $title . '</title>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
                <link rel="stylesheet" href="/fonts/RoadRadio/stylesheet.css?ver=0.2">
                <link rel="stylesheet" href="/css/fa-svg-with-js.min.css">
                <link rel="stylesheet" href="/css/animate.css">
                <link rel="stylesheet" href="/css/style.css?ver=0.2">
            </head>
            <body>';
}

function bottom()
{
    echo '</body>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
            <script src="/js/fontawesome-all.min.js"></script>
            <script src="/js/wow.min.js"></script>
            <script src="/js/jquery.ScrollMagic.min.js"></script>
            <script src="/js/ScrollMagic.min.js"></script>
            <script src="/js/scripts.js"></script>
        <html>';
}