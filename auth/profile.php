<?php
include 'constructor/templateCabinet.php';

top('Cabinet|Control Panel');
?>
    <main class="main">
        <header>
            <button class="navToggler">
                <i class="fas fa-bars"></i>
            </button>
            <div class="pageName">
                <span>Панель управления</span>
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
                <div class="card cardSmol" >
                    <div class="line">
                        <div class="d-flex justify-content-between flex-wrap">
                            <div class="">
                                <div class="cardPack_top">
                                    <span class="textSmall textSecondary">Реферальная ссылка:</span>
                                </div>
                                <span class="textComon textLight">fsffdfsdf.com</span>
                            </div>
                            <button class="copy">
                                <i class="fas fa-copy"></i>
                            </button>
                        </div>
                        
                        
                    </div>
                    <div class="line">
                        
                        <div class="cardPack_top">
                            <span class="textSmall textSecondary">Дней в системе:</span>
                        </div>
                        <span class="textGreat textLight">14</span>
                    </div>
                </div>
                <div class="card cardMed" >
                    <div class="d-flex">
                        <div class="">
                            <div class="line">
                                <div class="cardPack_top">
                                    <span class="textSmall textSecondary">Выводы за всё время</span>
                                </div>
                                <span class="textGreat textLight">5 000<span class="textGolden">$</span></span>
                            </div>
                            <div class="line">
                                <div class="cardPack_top">
                                    <span class="textSmall textSecondary">Выводы за всё время</span>
                                </div>
                                <span class="textGreat textLight">5 000<span class="textGolden">$</span></span>
                            </div>
                        </div>
                        <div class="dBigHolder">
                            <img src="img/dBig.png" alt="">
                        </div>
                    </div>
                    
                    
                </div>
                <div class="card cardMed" >
                    <div class="line">
                        <div class="d-flex justify-content-between">
                            <div class="">
                                <div class="cardPack_top">
                                    <span class="textSmall textSecondary">Выводы за всё время</span>
                                </div>
                                <span class="textGreat textLight">5 000<span class="textGolden">$</span></span>
                            </div>
                            <button class="btnSecondary" style="width: 150px;">
                                пополнить
                            </button>
                        </div>
                        
                        
                    </div>
                    <div class="line">
                        <div class="d-flex justify-content-between">
                            <div class="">
                                <div class="cardPack_top">
                                    <span class="textSmall textSecondary">Выводы за всё время</span>
                                </div>
                                <span class="textGreat textLight">5 000<span class="textGolden">$</span></span>
                            </div>
                            <button class="btnSecondary" style="width: 150px;">
                                вывести
                            </button>
                        </div>
                        
                        
                    </div>
                
                </div>
            </div>
            <div class="card cardLong " style="margin-top: 20px;">
                <div class="d-flex flex-wrap justify-content-between">
                    
                    <button class="programs_item pItemS">
                        <span class="textLight textBig fwb">
                            $100
                        </span>
                        <div class="pItem_status">
                            <img src="img/check.png" alt="">
                        </div>
                    </button>
                    <button class="programs_item pItemS">
                        <span class="textLight textBig fwb">
                            $100
                        </span>
                        <div class="pItem_status">
                            <img src="img/check.png" alt="">
                        </div>
                    </button>
                    <button class="programs_item pItemS">
                        <span class="textLight textBig fwb">
                            $100
                        </span>
                        <div class="pItem_status">
                            <img src="img/check.png" alt="">
                        </div>
                    </button>
                    <button class="programs_item pItemS">
                        <span class="textLight textBig fwb">
                            $100
                        </span>
                        <div class="pItem_status">
                            <img src="img/check.png" alt="">
                        </div>
                    </button>
                    <button class="programs_item pItemS">
                        <span class="textLight textBig fwb">
                            $100
                        </span>
                        <div class="pItem_status">
                            <img src="img/check.png" alt="">
                        </div>
                    </button>
                    <button class="programs_item pItemE">
                        <span class="textLight textBig fwb">
                            $100
                        </span>
                        <div class="pItem_status">
                            <img src="img/close.png" alt="">
                        </div>
                    </button>
                    <button class="programs_item pItemE">
                        <span class="textLight textBig fwb">
                            $100
                        </span>
                        <div class="pItem_status">
                            <img src="img/close.png" alt="">
                        </div>
                    </button>
                    <button class="programs_item pItemE">
                        <span class="textLight textBig fwb">
                            $100
                        </span>
                        <div class="pItem_status">
                            <img src="img/close.png" alt="">
                        </div>
                    </button>
                    <button class="programs_item pItemE">
                        <span class="textLight textBig fwb">
                            $100
                        </span>
                        <div class="pItem_status">
                            <img src="img/close.png" alt="">
                        </div>
                    </button>
                    <button class="programs_item pItemE">
                        <span class="textLight textBig fwb">
                            $100
                        </span>
                        <div class="pItem_status">
                            <img src="img/close.png" alt="">
                        </div>
                    </button>
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