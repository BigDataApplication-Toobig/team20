<?php
include('db.php');
$sql = "select * from restaurant";
$result = mysqli_query($db, $sql);
?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
</head>
<body>
<?php foreach($result as $row){ ?>
    <p><?= $row['restaurant_name']  ?></p>
<?php } ?>
</body>
</html>