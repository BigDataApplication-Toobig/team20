<!-- review_modify.php: 리뷰 수정 폼 처리 -->

<?php
include('db.php');

$ratings = mysqli_real_escape_string($db, $_POST['ratings']);
$content = mysqli_real_escape_string($db, $_POST['content']);
$image_url = mysqli_real_escape_string($db, $_POST['image_url']);


$review_id = mysqli_real_escape_string($db, $_POST['review_id']);


//<!-- Project results -->
//<!-- (3-3) UPDATE function -->
$sql = "UPDATE `review` SET `ratings`='$ratings',`content`='$content',`image_url`='$image_url' WHERE `review_id`='$review_id'";
$result = mysqli_query($db, $sql);


header("location: mypage.php");

exit();

?>