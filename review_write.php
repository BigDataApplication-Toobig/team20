<!-- review_write.php: 리뷰 작성 폼 처리 -->

<?php
include('db.php');
$user_id = $_SESSION['user_id'];
$restaurant_id = mysqli_real_escape_string($db, $_POST['restaurant_id']);
$meal_id = mysqli_real_escape_string($db, $_POST['meal_id']);
$ratings = mysqli_real_escape_string($db, $_POST['ratings']);
$content = mysqli_real_escape_string($db, $_POST['content']);
$image_url = mysqli_real_escape_string($db, $_POST['image_url']);
$created_datetime = date("Y-m-d H:i:s");



$sql = "INSERT INTO `review`(`restaurant_id`, `user_id`, `meal_id`, `ratings`, `content`, `image_url`, `created_dt`) VALUES ('$restaurant_id','$user_id','$meal_id','$ratings','$content','$image_url','$created_datetime')";
$result = mysqli_query($db, $sql);

header("location: mypage.php");

exit();

?>