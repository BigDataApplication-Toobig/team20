<?php
include('db.php');

$mysqli->begin_transaction();
$insert1 = $mysqli->query(" <<< INSERT Query1 >>> ");
$insert2 = $mysqli->query(" <<< INSERT Query2 >>> ");

if($insert1 && $insert2) {
    $mysqli->commit();
} else {
    $mysqli->rollback();
}




// 사용방법 따라서 php 닫는부분 뺄수도 있음
?>