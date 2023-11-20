<!-- search_result_food.php: 메인 화면의 메뉴 검색 폼 처리 -->

<?php
include('db.php');

if (isset($_POST['input_text'])) {
    $input_text = mysqli_real_escape_string($db, $_POST['input_text']);
    if (empty($input_text)) {
        header("location: main.php?text_error=검색할 단어를 입력해주세요.");
        exit();
    } else {

        $search_result_sql = "select DISTINCT meal_id from menu where menu_name = '" . $input_text . "'";
        $search_result = mysqli_query($db, $search_result_sql);

        $search_result_count_sql = "select count(*) as count from (" . $search_result_sql . ") temp";
        $search_result_count = mysqli_query($db, $search_result_count_sql);
        $count = mysqli_fetch_assoc($search_result_count)['count'];
    }
} else {
    header("location: main.php?text_error=알 수 없는 오류가 발생했습니다.");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/reset-css@5.0.1/reset.min.css" />
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Edu+TAS+Beginner:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Black+Han+Sans&family=Jua&display=swap" rel="stylesheet">
    <link href="htt ps://fonts.googleapis.com/css2?family=IBM+Plex+Sans+KR:wght@100;200;300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'IBM Plex Sans KR', sans-serif;
            box-sizing: border-box;
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

        .result_container {
            width: 100%;
        }

        .result_inner {
            width: 1400px;
            margin: 0 auto;
        }

        .title {
            font-weight: 700;
            font-size: 25px;
            padding: 50px 0;
        }

        .result_list {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-bottom: 50px;
        }

        .result {
            width: 100%;
            display: flex;
            flex-direction: column;
            gap: 10px;
            border: 1px solid rgb(128, 128, 128, 0.3);
            padding: 10px;
        }

        /* FOOTER */
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
</head>

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
    
    <!-- 메뉴를 포함하는 식사 검색결과 조회 -->
    <main class="result_container">
        <div class="result_inner">
            <h1 class="title">'<?= $input_text ?>' 메뉴가 포함된 검색결과는 총 <?= $count ?> 개 있습니다.</h1>
            <div class="result_list">
                <?php while ($forrow = mysqli_fetch_assoc($search_result)) { ?>

                    <div class="result">

                        <?php
                        $meal_id = $forrow['meal_id'];
                        $sql = "select * from meal where meal_id=$meal_id";
                        $result = mysqli_query($db, $sql);
                        $row = mysqli_fetch_assoc($result);

                        $restaurant_id = $row['restaurant_id'];
                        $resname_sql = "select `restaurant_name` from `restaurant` where `restaurant_id`=$restaurant_id";
                        $resname_result = mysqli_query($db, $resname_sql);
                        $restaurant_name = mysqli_fetch_assoc($resname_result)['restaurant_name'];
                        $meal_menu = str_replace(',', ', ', $row['meal_menu']);

                        ?>
                        <p><?= $restaurant_name ?></p>
                        <p><?= $row['date'] ?> <?= $row['serving_time'] ?></p>
                        <p><?= $meal_menu ?></p>
                    </div>
                <?php } ?>
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