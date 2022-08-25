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
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="signIn_card_input">
                    <span>Логин</span>
                    <input type="text" id="logIn">
                </div>
                <div class="signIn_card_input">
                    <span>Пароль</span>
                    <input type="password" id="password">
                </div>
                <div class="signIn_card_input">
                    <span>Введите ответ на вопрос:</span>
                    <input type="text" placeholder="<? questionShow() ?>" id="question">
                </div>
                <div class="signIn_card_btn">
                    <button class="btnMain" onclick="postQuery('gForm', 'login', 'logIn.password.question')">
                        Войти
                    </button>
                </div>
                <div class="signIn_card_btn">
                    <a class="btnMain" href="/recoverPass" style="font-size: 14px;">
                        Восстановить пароль
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
bottom();
?>