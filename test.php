<?php
include('db.php');
$sql = "select * from restaurant";
$result = mysqli_query($db, $sql);

$order_sql = "SELECT * FROM `order`;";
$order_result = mysqli_query($db, $order_sql);
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
    $img_sql = "select * from restaurant_images where restaurant_id = $restaurant_id limit 1";
    $img_result = mysqli_query($db, $img_sql);
    $img_row = mysqli_fetch_assoc($img_result);

    $meal_sql = "select * from meal where restaurant_id = $restaurant_id";
    $meal_result = mysqli_query($db, $meal_sql);
    while ($row = mysqli_fetch_assoc($meal_result)){
      $temp = str_replace(',', '<br>', $row['meal_menu']);
      // echo $temp;
      // echo '<br><br>';
    }

    // 요일, 시간대 개수 출력
    $weekday_sql = "select COUNT(DISTINCT weekday) as weekday_count from meal where restaurant_id = $restaurant_id";
    $weekday_result = mysqli_query($db, $weekday_sql);
    $row = mysqli_fetch_assoc($weekday_result);
    //echo $row['weekday_count'];
    //echo "<br>";

    $serving_time_sql = "select COUNT(DISTINCT serving_time) as serving_time_count from meal where restaurant_id = $restaurant_id";
    $serving_time_result = mysqli_query($db, $serving_time_sql);
    $row = mysqli_fetch_assoc($serving_time_result);
    //echo $row['serving_time_count'];

    // 요일, 시간대 개수 출력
    $weekday_sql = "select DISTINCT weekday from meal where restaurant_id = $restaurant_id";
    $weekday_result = mysqli_query($db, $weekday_sql);
    while ($row = mysqli_fetch_assoc($weekday_result)){
      //echo $row['weekday'];
    }

    $user_id = 2076073;
    //$payment_sql = "select * from order where user_id = $user_id";

    $search_result_sql = "select DISTINCT meal_id from menu where menu_name = '흑미밥'";
    $search_result = mysqli_query($db, $search_result_sql);
    while($row = mysqli_fetch_assoc($search_result)){
      echo count($row);
    }

    $search_result_count_sql = "select count(*) as count from (select DISTINCT meal_id from menu where menu_name = '흑미밥') temp";
    $search_result_count = mysqli_query($db, $search_result_count_sql);
    $count = mysqli_fetch_assoc($search_result_count)['count'];
    echo $count;
    


    ?>

    <p><?=$img_row['image_url']?></p>

    -

<?php } ?>
</body>
</html>