<?php
include 'constructor/templateCabinet.php';

<<<<<<< HEAD
$_SESSION['loader'] = 0;

top('Cabinet | History');
?>
<main class="main">
    <header>
        <button class="navToggler">
            <i class="fas fa-bars"></i>
        </button>
        <div class="pageName">
            <span>History</span>
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
        
        <div class="card cardLong tableCard">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">type</th>
                        <th scope="col">сумма</th>
                        <th scope="col">статус</th>
                      </tr>
                    </thead>
                    <tbody id="historyBlock">
                    </tbody>
                  </table>
            </div>
            <button class="tableMore" onclick="loadHistory()">Load content</button>

    </section>
</main>

=======
top('Cabinet | History');
?>
    <main class="main">
        <header>
            <button class="navToggler">
                <i class="fas fa-bars"></i>
            </button>
            <div class="pageName">
                <span>History</span>
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
            
        </section>
    </main>
    
>>>>>>> e3d9d1a (history in process)
<?php
bottom();
?>