<?php
include 'constructor/templateSignIn.php';

top('Confirmation');
?>
<div class="signIn_main">
    <h1>Подтверждение</h1>
    <div class="signIn_card">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Подтверждение</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="signIn_card_input">
                    <span>Код</span>
                    <input type="text" id="code">
                </div>
                <div class="signIn_card_input">
                    <span>Введите ответ на вопрос:</span>
                    <input type="text" placeholder="<? questionShow() ?>" id="question">
                </div>
                <div class="signIn_card_btn">
                    <button class="btnMain" onclick="postQuery('gForm', 'confirm', 'code.question')">
                        Подтвердить
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
bottom();
?>