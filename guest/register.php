<?php
include 'constructor/templateSignIn.php';

top('Sign Up');
?>
<div class="signIn_main">
    <h1>Вход в систему</h1>
    <div class="signIn_card">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Регистрация</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="signIn_card_input">
                    <span>E-mail</span>
                    <input type="text" id="EMail">
                </div>
                <div class="signIn_card_input">
                    <span>Логин</span>
                    <input type="text" id="logIn">
                </div>
                <div class="signIn_card_input">
                    <span>Пароль</span>
                    <input type="password" id="password">
                </div>
                <div class="signIn_card_input">
                    <span>Повторите пароль</span>
                    <input type="password" id="rePass">
                </div>
                <div class="signIn_card_input">
                    <span>Введите ответ на вопрос:</span>
                    <input type="text" placeholder="<?questionShow()?>" id="question">
                </div>
                <div class="signIn_card_btn">
                    <button class="btnMain" onclick="postQuery('gForm', 'register', 'EMail.logIn.password.rePass.question')">
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