<?php
include 'constructor/templateCabinet.php';

top('Cabinet | Referrals');


?>
<main class="main">
    <header>
        <button class="navToggler">
            <i class="fas fa-bars"></i>
        </button>
        <div class="pageName">
            <span>Referrals</span>
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
                        <th scope="col">Login</th>
                        <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?
                    $query = mysqli_query($conn, "SELECT * FROM `users` WHERE  `ref` = $_SESSION[id]");
                    if (!mysqli_num_rows($query)) {
                        echo '<p>Referral list is empty</p>';
                    } else {
                        while ($row = mysqli_fetch_assoc($query))
                            echo '
                                    <tr>
                                        <th scope="row">' . $row['id'] . '</th>
                                        <td class="textSecondary">' . $row['login'] . '</td>
                                        <td>' . $row['mail'] . '</td>
                                    </tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <button class="tableMore">
            Показать все
        </button>
    </section>
</main>

<?php
bottom();
?>