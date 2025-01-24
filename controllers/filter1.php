<?php
// session_start();
include 'db.php';
// session_start();
$category = $_POST['category']; 
$id =  $_POST['id']; 
$rows = mysqli_query($conn, "SELECT * FROM `products` WHERE `category`='$category' ORDER BY `products`.`offer` ASC");

foreach ($rows as $row) {
    $nameqty = $row['name'];
    $sql = mysqli_query($conn, "SELECT * FROM `add_to_cart` WHERE `name`='$nameqty' AND `purchase_id`='$id'");
    $data = mysqli_fetch_assoc($sql);
    $check = mysqli_num_rows($sql);
    $inCartQty = $check == 1 ? $data['qty'] : 0;

    echo '<div class="card-prod">';
    echo '<div class="img-hold">';
    echo '<img src="assets/imgs/' . $row['image'] . '" alt="">';
    echo '<span class="offer">';
    echo '<span>' . $row['offer'] . '&#x25 Off</span>';
    echo '</span>';
    echo '</div>';
    echo '<div class="card-content-">';
    echo '<div class="img-info">' . $row['name'] . '</div>';
    echo '<div class="price-bar">';
    echo '<div class="disc-price">&#8377 ' . $row['discprice'] . '</div>';
    echo '<span class="org-price">&#8377 ' . $row['orgprice'] . '</span>';
    echo '<div class="no qty-' . $row['id'] . '">(' . $inCartQty . ' in cart)</div>';
    echo '</div>';
    echo '<div class="sendmore">';
    echo '<button class="red-qty" onclick="red(\'qty-item-' . $row['id'] . '\')">-</button>';
    echo '<div id="qty-item-' . $row['id'] . '">1</div>';
    echo '<button class="inc-qty" onclick="inc(\'qty-item-' . $row['id'] . '\')">+</button>';
    echo '</div>';
    echo '<div class="add-cart">';
    echo '<button class="add-btn" onclick="sendcart(\'' . $row['name'] . '\',' . $row['discprice'] . ',\'' . $row['image'] . '\',\'' . $id . '\',\'' . $category . '\',\'qty-item-' . $row['id'] . '\')">Add</button>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
}
?>
