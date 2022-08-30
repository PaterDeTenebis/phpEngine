<?php
function top($title)
{
    echo '<!DOCTYPE html>
        <html>
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <title>' . $title . '</title>
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
                <link rel="stylesheet" href="/../fonts/fonts.css?ver=0.1">
                <link rel="stylesheet" href="/assetsCabinet/css/fa-svg-with-js.min.css">
                <link rel="stylesheet" href="/assetsCabinet/css/style.css?ver=0.1">
            </head>
            <body>
                <aside class="sidebar">
                    <div class="logo">
                        <a href="/"><img src="/assetsCabinet/img/logo.png" alt="logo"></a>
                        <button class="sbCloser"><i class="fas fa-times"></i></button>
                    </div>
                    <div class="sidebar_menu">
                        <div class="sidebar_menu_heading">
                            <span>Меню</span>
                        </div>
                        <div class="sidebar_menu_item">
                            <div class="sidebar_menu_item_img"><img src="/assetsCabinet/img/options.png" alt="options"></div>
                            <div class="sidebar_menu_item_text"><a href="/profile">Панель управления</a></div>
                        </div>
                        <div class="sidebarDrop">
                            <div class="sidebar_menu_item ">
                                <div class="sidebar_menu_item_img"><img src="/assetsCabinet/img/wallet.png" alt="organization"></div>
                                <div class="sidebar_menu_item_text"><a href="#" >Кошелек</a></div>
                                
                            </div>
                            <ul class="sidebar_menu_item_list">
                                <li><a href="/replen">Пополнение</a></li>
                                <li><a href="#">Перевод</a></li>
                                <li><a href="/withdraw">Вывод</a></li>
                            </ul>
                        </div>
                        <div class="sidebar_menu_item">
<<<<<<< HEAD
                            <div class="sidebar_menu_item_img"><img src="/assetsCabinet/img/options.png" alt="options"></div>
                            <div class="sidebar_menu_item_text"><a href="/referals">Referals</a></div>
                        </div>
                        <div class="sidebar_menu_item">
                            <div class="sidebar_menu_item_img"><img src="/assetsCabinet/img/user.png" alt="user"></div>
                            <div class="sidebar_menu_item_text"><a href="/history">History</a></div>
                        </div>
                        <div class="sidebar_menu_item">
                            <div class="sidebar_menu_item_img"><img src="/assetsCabinet/img/user.png" alt="user"></div>
                            <div class="sidebar_menu_item_text"><a href="/settings" >Профиль</a></div>
                        </div>
                        <div class="sidebar_menu_item">
                            <div class="sidebar_menu_item_img"><img src="/assetsCabinet/img/log-out.png" alt="log out"></div>
                            <div class="sidebar_menu_item_text"><a href="/logout" >Выход</a></div>
=======
                            <div class="sidebar_menu_item_img"><img src="/assetsCabinet/img/user.png" alt="user"></div>
                            <div class="sidebar_menu_item_text"><a href="/history">History</a></div>
                        </div>
                        <div class="sidebar_menu_item">
                            <div class="sidebar_menu_item_img"><img src="/assetsCabinet/img/user.png" alt="user"></div>
                            <div class="sidebar_menu_item_text"><a href="#" >Профиль</a></div>
                        </div>
                        <div class="sidebar_menu_item">
                            <div class="sidebar_menu_item_img"><img src="/assetsCabinet/img/log-out.png" alt="log out"></div>
                            <div class="sidebar_menu_item_text"><a href="#" >Выход</a></div>
>>>>>>> e3d9d1a (history in process)
                        </div>
                    </div>
                    <div class="tgChannel_sb">
                        <a href="#" class="tgLink textCommon textLight">Telegram channel <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div class="copyright">
                        <span>© 2022 All Rights Reserved</span>
                    </div>
                </aside>';
}

function bottom()
{
    echo '</body>
                <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<<<<<<< HEAD
                <script src="/assetsCabinet/js/bootstrap.min.js"></script>
                <script src="/assetsCabinet/js/fontawesome-all.min.js"></script>
                <script src="/assetsCabinet/js/jquery.js"></script>
                <script src="/assetsCabinet/js/main.js"></script>
                <script src="/assetsCabinet/js/func.js"></script>
                <script src="/ajax/ajaxSignIn.js"></script>
=======
                <script src="assetsCabinet/js/bootstrap.min.js"></script>
                <script src="/assetsCabinet/js/fontawesome-all.min.js"></script>
                <script src="/assetsCabinet/js/main.js"></script>
                <script src="/assetsCabinet/js/func.js"></script>
>>>>>>> e3d9d1a (history in process)
        <html>';
}
