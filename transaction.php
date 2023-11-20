<?php
include('db.php');

$mysqli->begin_transaction();
$insert1 = $mysqli->query(" <<< UPDATE REVIEW >>> ");
$insert2 = $mysqli->query(" <<< LOGGED IN >>> ");

if($insert1 && $insert2) {
    $mysqli->commit();
    echo "User information updated successfully";

} else {
    $mysqli->rollback();
    echo "Transaction failed: " . $e->getMessage();

}

// 사용방법 따라서 php 닫는부분 뺄수도 있음
$mysqli->close();

?>
