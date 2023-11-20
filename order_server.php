<!-- order_server.php: 주문 폼 처리 -->

<?php
include('db.php');
$user_id = $_SESSION['user_id'];
$restaurant_id = mysqli_real_escape_string($db, $_POST['restaurant_id']);
$meal_id = mysqli_real_escape_string($db, $_POST['meal_id']);
$price = mysqli_real_escape_string($db, $_POST['price']);
$payment_method = $_POST['payment_method'];
$order_datetime = date("Y-m-d H:i:s");
$receive_datetime = date("Y-m-d H:i:s");

$sql = "INSERT INTO `order` (`user_id`, `restaurant_id`, `meal_id`, `price`, `payment_method`, `order_datetime`, `receive_datetime`) 
    VALUES ('$user_id', '$restaurant_id', '$meal_id', '$price', '$payment_method', '$order_datetime', '$receive_datetime')";
$result = mysqli_query($db, $sql);

header("location: restaurant_detail.php?restaurant_id=$restaurant_id");

exit();




?>