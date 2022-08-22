<?php
include 'constructor/templateSignIn.php';

top('Recover Password');
?>
<div class="signIn_main">
    <h1>Восстановить пароль</h1>
    <div class="signIn_card">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Восстановление пароля</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="signIn_card_input">
                    <span>E-mail</span>
                    <input type="text" id="EMail">
                </div>
                <div class="signIn_card_input">
                    <span>Капча</span>
                    <input type="text" placeholder="Question" id="question">
                </div>
                <div class="signIn_card_btn">
                    <button class="btnMain" onclick="postQuery('gForm', 'recovery', 'EMail.question')">
                        Восстановить
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
bottom();
?>