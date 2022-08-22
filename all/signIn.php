<?php
include 'constructor/templateSignIn.php';

top('Sign In');
?>
<div class="signIn_main">
    <h1>Вход в систему</h1>
    <div class="signIn_card">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Вход</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Регистрация</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="signIn_card_input">
                    <span>Логин</span>
                    <input type="text">
                </div>
                <div class="signIn_card_input">
                    <span>Пароль</span>
                    <input type="password">
                </div>
                <div class="signIn_card_btn">
                    <button class="btnMain">
                        Войти
                    </button>
                </div>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="signIn_card_input">
                    <span>E-mail</span>
                    <input type="text">
                </div>
                <div class="signIn_card_input">
                    <span>Логин</span>
                    <input type="text">
                </div>
                <div class="signIn_card_input">
                    <span>Пароль</span>
                    <input type="text">
                </div>
                <div class="signIn_card_input">
                    <span>Повторите пароль</span>
                    <input type="text">
                </div>
                <div class="signIn_card_btn">
                    <button class="btnMain">
                        Регистрация
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
bottom();
?>