<?php
include 'constructor/templateCabinet.php';
$get_bal   = mysqli_query($conn, "SELECT * FROM users_finance WHERE user_id = '$_SESSION[id]'");
$row        = mysqli_fetch_array($get_bal);
$id            = $row['user_id'];
$login            = htmlspecialchars($row['login']);
$usdbal = $row['usd_balance'];
top('Cabinet | Replenishment');
?>
<main class="main">
    <header>
        <button class="navToggler">
            <i class="fas fa-bars"></i>
        </button>
        <div class="pageName">
            <span>Replenishment <?=$_SESSION['login']?></span>
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

        <div class="panelTopline wDrawTopline">
            <div class="card cardPack">
                <div class="cardPack_top">
                    <div class="block">
                        <span class="textCommon textLight">Пополнение средств</span>
                        <span class="textSmall textSecondary">Пополнение средств кабинета</span>
                    </div>
                    <button class="cardOptions textSecondary"><i class="fas fa-ellipsis-h"></i></button>
                </div>
                <div class="cardPack_mid">
                    <button class="wdwBtn" id="tron" >
                        <img src="/assetsCabinet/img/tron.png" alt="tron">
                        <span>Tron</span>
                    </button>
                    <button class="wdwBtn" id="tether" >
                        <img src="/assetsCabinet/img/Tether.png" alt="tron">
                        <span>Tether</span>
                    </button>
                </div>
                <div class="cardPack_bot">

                    <input type="number" placeholder="Введите количество..." id="wSumm">

                    <button class="btnMain" onclick="postQuery('aForm', 'replen', 'wSumm.tron.tether')">
                        Пополнить
                    </button>
                </div>

            </div>
            <div class="panelTopline_side wDrawTopline">
                <div class="card cardPack cardLong cardQual" id="cardBalW">
                    <span class="textCommon textLight">Баланс кошелька</span>
                    <div class="cardPack_top">
                        <span class="textSmall textSecondary">Баланс внутреннего счета кабинета</span>
                    </div>
                    <div class="dBigHolder">
                        <img src="img/dBig.png" alt="">
                    </div>
                </div>
                <div class="card cardHigh cardDark">
                    <span class="textCommon textLight">Всего пополнено</span>
                    <div class="cardPack_top">
                        <span class="textSmall textSecondary">Пополнения за всё время</span>
                    </div>
                    <span class="textGreat textLight">5 000<span class="textGolden">$</span></span>

                    <button class="btnSecondary">
                        пополнить
                    </button>

                </div>
                <div class="card cardHigh cardDark">
                    <span class="textCommon textLight">Доступный баланс</span>
                    <div class="cardPack_top">
                        <span class="textSmall textSecondary">Вашего кошелька</span>
                    </div>
                    <span class="textGreat textLight"><?echo $usdbal;?><span class="textGolden">$</span></span>
                    <button class="btnSecondary">
                        вывести
                    </button>

                </div>
            </div>
        </div>
        <div class="card cardLong tableCard">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">дата</th>
                        <th scope="col">сумма</th>
                        <th scope="col">счёт</th>
                        <th scope="col">система</th>
                        <th scope="col">статус</th>
                        <th scope="col">тип</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1488</th>
                        <td class="textSecondary">07.11.2021</td>
                        <td>500 usd</td>
                        <td>#1</td>
                        <td class="textGolden">Tron</td>
                        <td class="textSuccess">выполнено</td>
                        <td>активный</td>

                    </tr>
                    <tr>
                        <th scope="row">1488</th>
                        <td class="textSecondary">07.11.2021</td>
                        <td>500 usd</td>
                        <td>#1</td>
                        <td class="textGolden">Tron</td>
                        <td class="textSuccess">выполнено</td>
                        <td>активный</td>

                    </tr>
                    <tr>
                        <th scope="row">1488</th>
                        <td class="textSecondary">07.11.2021</td>
                        <td>500 usd</td>
                        <td>#1</td>
                        <td class="textGolden">Tron</td>
                        <td class="textSuccess">выполнено</td>
                        <td>активный</td>

                    </tr>
                </tbody>
            </table>
        </div>
        <button class="tableMore">
            смотреть всю историю
        </button>

    </section>
</main>

<?php
bottom();
?>