<?php
include 'constructor/templateCabinet.php';

top('Cabinet | Settings');
?>
<main class="main">
    <header>
        <button class="navToggler">
            <i class="fas fa-bars"></i>
        </button>
        <div class="pageName">
            <span>Settings <?=$_SESSION['login']?></span>
        </div>
        <div class="langs">
            <select name="langs_select" id="langs_select">
                <option value="ru">ru</option>
                <option value="en">en</option>
                <option value="ua">ua</option>
            </select>
        </div>
    </header>
    <section class="content">
        <div class="profileContent">
            <div class="card cardLong cardDark">
                <div class="cardPack_top">
                    <span class="textCommon textLight ttu">Настройки профиля</span>
                    <button class="cardOptions textSecondary"><i class="fas fa-ellipsis-h"></i></button>
                </div>
                <div class="d-flex justify-content-between flex-wrap">
                    <div class="profileContent_cardItem">
                        <div class="profileContent_cardItem_img">
                            <img src="img/avatar.png" alt="avatar">
                        </div>
                        <button class="btnSecondary">
                            сменить фото
                        </button>
                        <a href="#" class="textLight textCommon">Привязать телеграм</a>
                    </div>
                    <div class="profileContent_cardItem">

                        <input type="text" placeholder="Ваше имя" id="pName">


                        <input type="text" placeholder="Ваше отчество" id="pSurname">


                        <input type="text" placeholder="телефон" id="pPhone">

                    </div>
                    <div class="profileContent_cardItem">

                        <input type="text" placeholder="Ваша фамилия" id="pSecName">


                        <input type="text" placeholder="Ваш e-mail" id="EMail">


                        <input type="text" placeholder="Телеграм" id="telegram">

                    </div>
                    <div class="profileContent_cardItem">

                        <input type="password" class="passInp" placeholder="Ваш пароль" id="password">


                        <input type="password" class="passInp" placeholder="Повторите ваш пароль" id="rePass">

                        <button class="btnMain" onclick="postQuery('aForm', 'edit', 'EMail.pName.pSurname.pPhone.pSecName.telegram.password.rePass')">
                            сохранить настройки
                        </button>
                    </div>
                </div>
            </div>

            <!-- <div class="card cardLong cl2 cardDark">
                <div class="cardPack_top">
                    <span class="textCommon textLight ttu">Настройки дополнительной безопасности</span>
                    <button class="cardOptions textSecondary"><i class="fas fa-ellipsis-h"></i></button>
                </div>
                <div class="d-flex justify-content-between flex-wrap">
                    <div class="profileContent2fa">
                        <span class="textLight textCommon">Двухфакторная авторизация Google - <span class="textSuccess">Включен</span> </span>
                        <br>
                        <br>
                        <span class="textLight textCommon">
                            Двойная аутентификация защищает от несанкционированного <br>
                            доступа к вашему внутреннему кабинету
                        </span>
                        <br>
                        <div class="d-flex justify-content-between flex-wrap">
                            <div class="search passInp">
                                <input type="password" placeholder="Ваш пароль">
                            </div>
                            <button class="btnSecondary">
                                сохранить google
                            </button>
                        </div>
                    </div>
                    <div class="profileContent2fa">
                        <span class="textLight textCommon">Пинкод для финансовых операций - <span class="textError">Выключен</span> </span>
                        <div class="d-flex justify-content-between flex-wrap">
                            <div class="search ">
                                <input type="password" placeholder="Ваш код">
                            </div>
                            <div class="faInfo">
                                <span class="textLight textSmall">
                                    Администрация не несет <br>
                                    ответственности за вывод <br>
                                    средств с Вашего аккаунта.
                                </span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between flex-wrap">
                            <div class="search ">
                                <input type="password" placeholder="Повторите ваш код">
                            </div>
                            <button class="btnMain">
                                сохранить код
                            </button>
                        </div>
                    </div>
                </div>

            </div> -->
        </div>
    </section>
</main>

<?php
bottom();
?>