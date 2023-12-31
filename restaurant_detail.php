<!-- restaurant_detail.php: 식당 상세 화면. 식당 정보 조회와 식당 리뷰 바로가기, 식사 조회와 식사 주문 가능 -->

<?php
include('db.php');

if (isset($_GET['restaurant_id'])) {
    // 식당 정보를 가져온다
    $restaurant_id = mysqli_real_escape_string($db, $_GET['restaurant_id']);
    $sql = "select * from restaurant where restaurant_id=$restaurant_id";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_assoc($result);

    $restaurant_name = $row['restaurant_name'];
    $call_number = $row['call_number'];
    $location = $row['location'];
    $introduction = $row['introduction'];
    $available_time = $row['available_time'];
} else {
    echo "error";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- 스타일 초기화 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/reset-css@5.0.1/reset.min.css" />
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Edu+TAS+Beginner:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Black+Han+Sans&family=Jua&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+KR:wght@100;200;300;400;500;600&display=swap" rel="stylesheet">
</head>
<style>
    body {
        font-family: 'IBM Plex Sans KR', sans-serif;
    }

    header {
        position: sticky;
        width: 100%;
        top: 0;
        left: 0;
        /* background-color: rgb(43, 136, 99,0.9); */
        /* background-color: rgba(151, 216, 170, 0.9); */
        background-color: rgb(165, 206, 151);
        color: white;
        /* border-bottom: 1px solid rgb(128, 128, 128,0.5); */
        z-index: 1;
    }

    a {
        text-decoration: none;
        color: white;
    }

    .mb {
        margin-bottom: 10px;
    }

    .btn {
        padding: 5px 10px;
        border: 1px solid rgb(128, 128, 128, 0.5);
        ;
        color: black;
        background-color: rgb(241, 234, 142, 0.8);
        text-align: center;
        cursor: pointer;
        transition: .4s;
    }

    .btn:hover {
        background-color: #9FBB73;
        color: black;
    }

    .header_inner {
        width: 1400px;
        margin: 0 auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 150px;
    }

    .logoBox {
        width: 270px;
        height: 115px;
        position: relative;
    }

    .logo {
        top: 0;
        left: 0;
        position: absolute;
        background-size: cover;
    }

    .menu {
        display: flex;
        font-family: 'Edu Tas Beginner';
        font-style: italic;
        font-size: 25px;
        column-gap: 50px;
    }

    .input_time {
        padding: 5px 10px;
        border: 1px solid rgb(128, 128, 128, 0.5);
    }

    /* MAIN */
    .main_container {
        width: 100%;
        padding: 50px 0;
    }

    .main_container_inner {
        width: 1400px;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        /* background-color: #9FBB73; */
        justify-content: center;
        align-items: center;
        gap: 50px;
    }

    .main_title {
        font-size: 30px;
        font-weight: 600;
        padding-bottom: 5px;
        border-bottom: 2px solid black;
    }

    .main_desc {
        width: 100%;
        height: 400px;
        display: flex;
    }

    .desc_left {
        width: 30%;
        height: 100%;
        padding: 10px 20px;
        box-sizing: border-box;
        border-right: 1px solid rgb(128, 128, 128, 0.3);
    }

    .imgBox {
        width: 100%;
        height: 100%;
        background-color: antiquewhite;
        position: relative;
        overflow: hidden;
        border-radius: 5px;
    }

    .img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .desc_right {
        width: 70%;
        height: 100%;
        padding: 20px;
        display: flex;
        flex-direction: column;
        gap: 20px;
        justify-content: center;
        /* background-color: blue; */
    }

    .desc_title {
        font-size: 18px;
        font-weight: 600;
    }

    .desc {
        font-size: 15px;
        font-weight: 500;
    }

    /* TABLE CONTAINER */
    .table_container {
        width: 100%;
        display: flex;
        justify-content: space-around;
    }

    table {
        border-collapse: collapse;
        border: 1px solid rgb(128, 128, 128, 0.5);
        text-align: center;
    }

    th {
        border: 1px solid rgb(128, 128, 128, 0.5);
        background-color: rgb(241, 234, 142, 0.8);
        padding: 10px;
    }

    td {
        border: 1px solid rgb(128, 128, 128, 0.5);
        padding: 30px 20px;
    }

    td:hover {
        background-color: #9FBB73;
        transition: 0.3s;
    }

    .order {
        width: 40%;
        height: 100%;
        padding: 20px 0;
    }

    .order_title {
        font-size: 30px;
        text-align: center;
        font-weight: 600;
    }

    .order_form {
        border: 1px solid rgb(128, 128, 128, 0.5);
        padding: 30px;
        display: flex;
        flex-direction: column;
        margin-top: 30px;
        gap: 20px;
    }

    .selected_menu {
        font-size: 18px;
        border: 1px solid rgb(128, 128, 128, 0.5);
        padding: 10px;
    }

    .form_question {
        font-size: 18px;
        font-weight: 600;
    }

    .btn_plus {
        padding: 10px;
        border: none;
        border-radius: 4px;
    }

    .footer {
        width: 100%;
        height: 200px;
        border-top: 1px solid #ccc;
    }

    .footer .inner {
        width: 1400px;
        margin: 0 auto;
        display: flex;
        justify-content: space-between;
        padding: 30px 0;
    }

    .footer h1 {
        font-weight: 800;
        font-size: 23px;
        margin-bottom: 5px;
    }

    .footer p {
        font-size: 14px;
        margin-bottom: 20px;
        color: #656565;
        font-weight: 700;
    }

    .footer .menu {
        display: flex;
        margin-bottom: 18px;
    }

    .footer .menu li a {
        margin-right: 15px;
        font-size: 14px;
        color: #000;
        font-weight: 900;
        text-decoration-line: none;
    }

    .footer .name li:first-child {
        margin-bottom: 5px;
    }

    .footer .name li {
        color: #656565;
        font-size: 14px;
        font-weight: 700;
    }

    .footer_right {
        display: flex;
        align-items: end;
    }

    .footer_imgBox {
        width: 120px;
        height: 30px;
        object-fit: cover;
        position: relative;
    }

    .footer_img {
        position: absolute;
        top: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
    }
</style>

<body>
    <!-- HEADER -->
    <header>
        <div class="header_inner">
            <!-- LOGO -->
            <a href="main.php">
                <div class="logoBox">
                    <img class="logo" src="https://img1.daumcdn.net/thumb/R1280x0/?scode=mtistory2&fname=https%3A%2F%2Fblog.kakaocdn.net%2Fdn%2FbRgmby%2Fbtsz938IGZ6%2FX4D9ZSUEJxosZKr1dhekwK%2Fimg.png" alt="">
                </div>
            </a>
            <!-- MENU -->
            <div class="menu">
                <!-- 세션 사용 -->
                <?php if (isset($_SESSION['user_id'])) { ?>
                    <div><a href="mypage.php">My page</a></div>
                    <div><a class="lin" href="logout.php">Log out</a></div>
                <?php } else { ?>
                    <div><a href="login_view.php">login</a></div>
                    <div><a class="lin" href="signup_view.php">sign up</a></div>
                <?php } ?>
            </div>
        </div>
        <p></p>
    </header>

    <main class="main_container">
        <div class="main_container_inner">
            <h1 class="main_title"><?= $restaurant_name ?></h1>

            <div class="main_desc">
                <div class="desc_left">
                    <div class="imgBox">
                        <?php

                        $img_sql = "select * from restaurant_images where restaurant_id = $restaurant_id limit 1";
                        $img_result = mysqli_query($db, $img_sql);
                        $img_row = mysqli_fetch_assoc($img_result);
                        ?>
                        <img class="img" src="<?= $img_row['image_url'] ?>" alt="">
                    </div>

                </div>
                <div class="desc_right">
                    <a style="color: black;" href="review_list.php?restaurant_id=<?= $restaurant_id ?>">리뷰 보러가기 ></a>
                    <h1 class="desc_title"><?= $location ?></h1>
                    <p style="line-height: 1.2;"><?= $introduction ?></p>
                    <p class="desc"><?= $call_number ?></p>
                    <p class="desc"><?= nl2br($available_time) ?></p>

                </div>
            </div>
            
            <!-- 요일과 식사 시간을 기준으로 식사 표 출력 -->
            <?php
            $weekday_sql = "select DISTINCT weekday from meal where restaurant_id = $restaurant_id";
            $weekday_result = mysqli_query($db, $weekday_sql);

            $serving_time_sql = "select DISTINCT serving_time from meal where restaurant_id = $restaurant_id";
            $serving_time_result = mysqli_query($db, $serving_time_sql);
            ?>
            <div class="table_container">
                <table>
                    <tr>
                        <?php while ($row = mysqli_fetch_assoc($weekday_result)) { ?>
                            <?php
                            $weekday = $row['weekday'];
                            $date_sql = "select date from meal where weekday ='" . $weekday . "'";
                            $date_result = mysqli_query($db, $date_sql);
                            $date = mysqli_fetch_assoc($date_result)['date'];
                            ?>

                            <th scope="col"><?= $date ?>(<?= $weekday ?>)</th>
                        <?php } ?>
                    </tr>
                    <?php foreach ($serving_time_result as $serving_time_row) { ?>
                        <tr>
                            <?php foreach ($weekday_result as $weekday_row) { ?>
                                <?php $weekday = $weekday_row['weekday'];
                                $serving_time = $serving_time_row['serving_time'];
                                $meal_sql = "select * from meal where restaurant_id=$restaurant_id and weekday='" . $weekday . "' and serving_time='" . $serving_time . "'";

                                $meal_result = mysqli_query($db, $meal_sql);
                                $row = mysqli_fetch_assoc($meal_result);
                                ?>
                                <td>


                                    <?php if ($row) { ?>
                                        <?php
                                        $meal_menu = str_replace(',', '<br>', $row['meal_menu']);

                                        $time_sql = "select start_time, end_time from restaurant_timeinfo where restaurant_id=$restaurant_id and serving_time='" . $serving_time . "'";
                                        $time_result = mysqli_query($db, $time_sql);
                                        $time_row = mysqli_fetch_assoc($time_result);
                                        $start_time = $time_row['start_time'];
                                        $end_time = $time_row['end_time'];
                                        ?>
                                        <br>-<?= $row['serving_time'] ?>-<br><?= $start_time ?>~<?= $end_time ?><br><br><?= $meal_menu ?><br>
                                    <?php } else { ?>
                                        <?php $meal_menu = '휴무'; ?>
                                        <br><?= $meal_menu ?><br>
                                    <?php } ?>

                                    <a href="restaurant_detail.php?restaurant_id=<?= $restaurant_id ?>&meal_id=<?= $row['meal_id'] ?>"><button style="margin-top: 10px;">선택</button></a>




                                </td>
                            <?php } ?>
                        </tr>
                    <?php } ?>
                </table>
                <div class="order" style="margin-left: 20px;">
                    <?php

                    if (isset($_GET['meal_id'])) {
                        $meal_id = mysqli_real_escape_string($db, $_GET['meal_id']);
                        $sql = "select * from meal where meal_id=$meal_id";
                        $result = mysqli_query($db, $sql);
                        $row = mysqli_fetch_assoc($result);

                        $meal_menu = $row['meal_menu'];
                        $price = $row['price'];
                        $serving_time = $row['serving_time'];
                        $time_sql = "select start_time, end_time from restaurant_timeinfo where restaurant_id=$restaurant_id and serving_time='" . $serving_time . "'";
                        $time_result = mysqli_query($db, $time_sql);
                        $time_row = mysqli_fetch_assoc($time_result);
                        $start_time = $time_row['start_time'];
                        $end_time = $time_row['end_time'];
                    } else {
                        $meal_id = "메뉴를 선택해주세요";
                        $meal_menu = "";
                        $price = "0";
                        $start_time = "12:00:00";
                        $end_time = "12:00:00";
                    }
                    ?>
                    <!-- Project results -->
                    <!-- (6) User input should include various types of controls such as text box, buttons, etc. -->

                    <!-- 식사 주문서 -->
                    <form class="order_form" method="post" action="./order_server.php">
                        <h1 class="order_title">주문서</h1>
                        <div>
                            <p class="form_question mb">선택하신 메뉴 :</p>
                            <div class="selected_menu"><?= $meal_menu ?></div>
                        </div>
                        <div class="form_question">총 금액 : <?= $price ?>원</div>
                        <div class="payment_method">
                            <p class="form_question mb">결제수단을 선택해주세요.</p>
                            <input type="radio" name="payment_method" value="신용/체크카드">신용/체크카드
                            <input type="radio" name="payment_method" value="계좌이체/무통장입금">계좌이체/무통장입금
                            <input type="radio" name="payment_method" value="휴대폰">휴대폰
                        </div>
                        <div class="receive_time">
                            <p class="form_question mb">음식을 받을 시간을 선택해주세요.</p>
                            <input class="input_time" type="time" min=<?= $start_time ?> max=<?= $end_time ?>>
                        </div>

                        <input name="restaurant_id" type="hidden" value=<?= $restaurant_id ?>>
                        <input name="meal_id" type="hidden" value=<?= $meal_id ?>>
                        <input name="price" type="hidden" value=<?= $price ?>>

                        <input class="btn btn_plus" type="submit" value="주문하기">
                        <?php if (isset($_GET['error'])) { ?>
                            <p class="error"><?php echo $_GET['error']; ?></p>
                        <?php } ?>
                    </form>
                </div>
            </div>
        </div>

    </main>

    <!-- FOOTER -->
    <section class="footer">
        <div class="inner">
            <div>
                <h1>EwhaFOOD</h1>
                <p>이화여자대학교 학생들을 위한 학식 예약주문 서비스</p>
                <ul class="menu">
                    <li><a href="#">이용약관</a></li>
                    <li><a href="#">개인정보처리방침</a></li>
                </ul>
                <ul class="name">
                    <li>대표 : TwoBig</li>

                </ul>
            </div>
            <div class="footer_right">
                <div class="footer_imgBox">
                    <img class="footer_img" src="https://blog.kakaocdn.net/dn/cd1bfq/btsz51di36E/8L5wfoO4rRvP0zIx70nzC0/img.png" alt="">
                </div>
            </div>
        </div>
    </section>

</body>

</html>