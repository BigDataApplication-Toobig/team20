<!-- review_delete.php: 리뷰 삭제 폼 처리 -->

<?php
include('db.php');
$review_id = mysqli_real_escape_string($db, $_POST['review_id']);

//<!-- Project results -->
//<!-- (3-2) DELETE function -->
$sql = "DELETE FROM `review` WHERE `review_id`=$review_id";
$result = mysqli_query($db, $sql);

header("location: mypage.php");

exit();

?>