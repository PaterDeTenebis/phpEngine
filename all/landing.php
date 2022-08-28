<?php
include 'constructor/templateMain.php';

top('Landing Page');
?>
<section class="face">
    <div class="container">
        <header class="header">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="#"><img class="logo" src="img/Logo.png" alt="Logo"><span>trender <br> global</span></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Главная</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">О Нас</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#contacts">Контакты</a>
                        </li>
                    </ul>
                    <? 
                        if($_SESSION['id']) {
                            echo '
                                <div class="headAuth">
                                    <a class="headAuth_item" href="/profile">
                                        Кабинет
                                    </a>
                                </div>';
                        } else {
                            echo '
                                <div class="headAuth">
                                    <a class="headAuth_item" href="/signIn">
                                        Авторизация
                                    </a>
                                    <a class="headAuth_item" href="/register">
                                        Регистрация
                                    </a>
                                </div>';
                        }
                    ?>
                </div>
            </nav>
        </header>
        <div class="wellcome">
            <div class="sloganTop">
                <span class="sloganTop_text">
                    Добро пожаловать в Trender Global
                </span>
            </div>
            <div class="wellcome_top">
                <div class="wellcome_top_holder wow slideInLeft" data-wow-duration="1s">
                    <div class="wellcome_top_feature">
                        <div class="wellcome_top_feature_img"><img src="img/check.png" alt=""></div>
                        <div class="wellcome_top_feature_text">
                            Уникальный, листинговый <br>
                            крипто-робот
                        </div>
                    </div>
                    <div class="wellcome_top_feature">
                        <div class="wellcome_top_feature_img"><img src="img/check.png" alt=""></div>
                        <div class="wellcome_top_feature_text">
                            Самая прибыльная <br> маркетинговая модель
                        </div>
                    </div>
                </div>
                <div class="logoMainWrapper">

                    <img src="img/faceLogo.png" alt="logo Letter" class="logoLetter">
                </div>

                <div class="wellcome_top_holder wow slideInRight" data-wow-duration="1s">
                    <div class="wellcome_top_feature">
                        <div class="wellcome_top_feature_img"><img src="img/check.png" alt=""></div>
                        <div class="wellcome_top_feature_text">
                            Пошаговое обучение <br>
                            работе с инструментами
                        </div>
                    </div>
                    <div class="wellcome_top_feature">
                        <div class="wellcome_top_feature_img"><img src="img/check.png" alt=""></div>
                        <div class="wellcome_top_feature_text">
                            Постоянное пополнение <br>
                            спектра услуг
                        </div>
                    </div>
                </div>
            </div>
            <div class="wellcome_bot">
                <div class="wellcome_bot_slogan">
                    <span>Твой бесконечный генератор</span>
                </div>
                <div class="wellcome_bot_manText">
                    <span>
                        пассивного дохода
                    </span>
                </div>
                <div class="wellcome_bot_btn">
                    <button class="btnMain">стать партнером</button>
                </div>

            </div>
        </div>
    </div>
</section>
<section class="about" id="about">
    <div class="container">
        <div class="heading">
            <span class="textG">
                О нас
            </span>
            <span class="textWhite">
                О нас
            </span>
        </div>
        <div class="about_main">
            <div class="about_main_item">
                <div class="about_main_text_content">
                    <span class="textWhite">
                        <strong>Trender Global</strong> - это уникальная маркетинговая модель, которая позволяет абсолютно каждому человеку получать неограниченный пассивный доход. Мы создали не только самую быструю и высокодоходную модель в сети интернет, но и усилили ее актуальными, инновационными продуктами крипто-индустрии. Становясь частью Trender Global, Вы получаете возможность зарабатывать тысячи, сотни тысяч и даже миллионы долларов с первого месяца, продвигая экологичные, качественные и прибыльные инструменты. Наша миссия - нести в рынок лучшие крипто-возможности и делать это на совесть. Если Вы понимаете, что наши ценности Вам откликаются - <strong>Добро пожаловать</strong>.
                    </span>
                </div>
                <button class="btnMain">скачать pdf-презентацию</button>

            </div>
            <div class="about_main_item">
                <div class="about_main_item_holder">
                    <img src="img/dollar2.png" alt="" class="safe1">
                    <img src="img/safe.png" alt="safe" id="safe">
                    <img src="img/dollar1.png" alt="" class="safe2">
                    <button class="watchPres">
                        смотреть <br>
                        промо-видео
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="contacts" id="contacts">
    <div class="container">
        <div class="heading">
            <span class="textG">
                Контакты
            </span>
            <span class="textWhite">
                Контакты
            </span>
        </div>
        <div class="contacts_main">
            <div class="contacts_img" id="tg1">
                <img src="img/1.png" alt="">
            </div>
            <div class="contacts_main_side">
                <div class="cText">
                    Следить за новостями проекта можно <br> в нашем телеграм-канале:
                </div>
                <button class="btnMain">ссылка на телеграм</button>
            </div>
            <div class="contacts_main_side">
                <button class="watchPres">
                    Обратиться в службу поддержки в телеграм
                </button>

                <div class="contacts_img" id="tg2">
                    <img src="img/2.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="#"><img class="logo" src="img/Logo.png" alt="Logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">О Нас</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Контакты</a>
                    </li>
                </ul>
                <div class="headAuth">
                    <button class="headAuth_item">
                        Вход
                    </button>

                    <button class="headAuth_item">
                        Регистрация
                    </button>
                </div>

            </div>
        </nav>
        <div class="footer_bot">

            <div class="res">
                <span class="textGray">
                    © 2022 TrenderGlobal. All rights reserved
                </span>
            </div>
        </div>
    </div>
</footer>

<?php
bottom();
?>