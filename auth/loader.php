<?
$query = mysqli_query($conn, 'SELECT * FROM `history` ORDER BY `id` LIMIT ' . $_SESSION['loader'] . ', 2');
if (!mysqli_num_rows($query)) {
    if ($_SESSION['loader'] == 0) {
        exit('Empty');
    } else {
        exit('End of list');
    }
    exit;
} else {
    $_SESSION['loader'] += 2;
    while ($row = mysqli_fetch_assoc($query)) {
        if ($row['status'] == 'Success') {
            $specCalss = 'textSuccess';
        } else {
            $specCalss = 'textError';
        }
        echo '<tr>
                <th scope="row">' . $row['id'] . '</th>
                <td class="textSecondary">' . $row['type'] . '</td>
                <td>' . $row['summ'] . '</td>
                <td class="' . $specCalss . '">' . $row['status'] . '</td>
              </tr>';
    }
}
