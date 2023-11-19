<?php
include('db.php');
$review_id = mysqli_real_escape_string($db, $_POST['review_id']);

$sql = "DELETE FROM `review` WHERE `review_id`=$review_id";
$result = mysqli_query($db, $sql);

header("location: mypage.php");
// 수정 필요 리뷰삭제완료메세지 작성해야함
exit();

?>
