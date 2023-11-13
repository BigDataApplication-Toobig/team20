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
    <?php 
    $restaurant_id = $row['restaurant_id'];
    $img_sql = "select * from restaurant_images where restaurant_id = '$restaurant_id' limit 1";
    $img_result = mysqli_query($db, $img_sql);
    ?>
    <p><?= $img_result["image_url"]?></p>z
<?php } ?>
</body>
</html>