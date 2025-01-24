<?php
include("db.php");
session_start();

$session_id = session_id();
if (isset($_SESSION['name'])) {
    $session_id = $_SESSION['id'];
}
$total = [];
$rows = mysqli_query($conn, "SELECT * FROM `add_to_cart` WHERE `purchase_id`='$session_id'");

foreach ($rows as $row) {
    echo '<div class="add-prods">';
    echo '<img src="assets/imgs/' . $row['image'] . '" alt="">';
    echo '<div class="add-imgdata">';
    echo '<div>' . $row['name'] . '</div>';
    echo '<div class="item-qty">Per Qty /- <span><b>'.$row['qty'].'</b></span></div>';
    echo '<div class="price-bar">';
    echo '<div class="disc-price-">&#8377 ' . $row['final_price'] . '</div>';
    echo '</div></div>';
    echo '<div class="remove-btn1">';
    echo '<a onclick="removecart(\''.$row['name'].'\','.$row['id'].')" >Remove</a>';
    echo '</div></div>';
    array_push($total, $row['final_price']);
}

$total_price = array_sum($total);

echo '<div class="purchase-btn">';
echo '<div class="total">Your Total = &#8377<span id="price">' . $total_price . '</span></div>';
echo '<button onclick="window.location.href=\'payment.php\'">Purchase</button>';
echo '</div>';
?>
