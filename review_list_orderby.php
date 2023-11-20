<!-- review_list_orderby.php: 리뷰 화면에서 별점 및 최신순 정렬 폼을 처리 -->

<?php
include('db.php');


$restaurant_id = mysqli_real_escape_string($db, $_POST['restaurant_id']);
echo $restaurant_id;
$orderby = $_POST['orderby'];

if ($orderby == "별점 높은순") {
    $sql = "select * from review where restaurant_id=$restaurant_id order by ratings desc";
} else if ($orderby == "별점 낮은순") {
    $sql = "select * from review where restaurant_id=$restaurant_id order by ratings";
} else if ($orderby == "최신순") {
    $sql = "select * from review where restaurant_id=$restaurant_id order by created_dt desc";
} else {
    echo "error";
}
$result = mysqli_query($db, $sql);
$total_count = mysqli_num_rows($result);

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

        .title {
            text-align: center;
        }

        .main_container {
            width: 100%;
            padding: 60px 0;
        }

        .main_inner {
            width: 1400px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
        }

        .top {
            display: flex;
            box-sizing: border-box;
            padding: 0 30px;
            justify-content: space-between;
            align-items: center;
            height: 50px;
            width: 100%;
            background-color: #555555;
            color: white;
        }

        .top_left {
            display: flex;
            gap: 20px;
        }

        .selection {
            padding: 5px 10px;
        }

        .review_container {
            box-sizing: border-box;
            width: 100%;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .review {
            box-sizing: border-box;
            width: 100%;
            padding: 20px 20px;
            border: 1px solid rgb(128, 128, 128, 0.3);
        }

        .user {
            /* width: 100%; */
            padding: 10px;
            display: flex;
        }

        .user_img {
            width: 60px;
            height: 60px;
            position: relative;
            border-radius: 30px;
            overflow: hidden;
            margin-right: 10px;
        }

        .img {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
        }

        .user_info {
            display: flex;
            flex-direction: column;
            gap: 3px;
        }

        .food_urls {
            padding: 5px;
            display: flex;
            gap: 5px;
            align-items: center;
        }

        .food_imgBox {
            width: 180px;
            height: 140px;
            position: relative;
        }

        .food_imgUrl {
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            position: absolute;
        }

        .content {
            margin-top: 20px;
            border: 1px solid rgb(128, 128, 128, 0.3);
            padding: 15px 10px;
            border-radius: 5px;
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

    <h1 class="title">총 <?= $total_count ?>개의 리뷰가 조회되었습니다.</h1>
    <main class="main_container">
        <div class="main_inner">
            <div class="top">
                <div class="top_left">
                    <form method="post" action="review_list_orderby.php">
                        <input type="radio" name="orderby" value="별점 높은순">별점 높은순
                        <input type="radio" name="orderby" value="별점 낮은순">별점 낮은순
                        <input type="radio" name="orderby" value="최신순">최신순
                        <input name="restaurant_id" type="hidden" value=<?= $restaurant_id ?>>
                        <input type="submit" value="조회">
                    </form>
                </div>
                <div>
                    <form method="post" action="review_list_ratings.php">
                        <input type="radio" name="ratings_range" value="all">모든 별점 보기
                        <input type="radio" name="ratings_range" value="4~5">4~5점
                        <input type="radio" name="ratings_range" value="3~4">3~4점
                        <input type="radio" name="ratings_range" value="2~3">2~3점
                        <input type="radio" name="ratings_range" value="1~2">1~2점
                        <input type="radio" name="ratings_range" value="0~1">0~1점
                        <input name="restaurant_id" type="hidden" value=<?= $restaurant_id ?>>
                        <input type="submit" value="조회">
                    </form>
                </div>
            </div>
            <!-- jsp 처리할거 아니면 submit 버튼 필요함
            1. jsp 처리해서 form 자동전송되도록 하거나
            2. submit 만들어서 form 전송 (이 경우 베스트/최신순 선택된 표시 나타나도록 해야 함. 또한 베스트/최신순 선택시 별점은 모든 별점보기로 자동 설정되도록 함.)
            -->

            <div class="review_container">
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <div class="review">
                        <div class="user">
                            <div class="user_img">
                                <img class="img" src="https://png.pngtree.com/png-vector/20191115/ourmid/pngtree-beautiful-profile-line-vector-icon-png-image_1990469.jpg" alt="">
                            </div>
                            <div class="user_info">
                                <p>작성자: <?= $row['user_id'] ?></p>

                                <p>별점: <?= $row['ratings'] ?></p>
                                <p>작성일시: <?= $row['created_dt'] ?></p>
                            </div>
                        </div>
                        <div class="food_urls">
                            <div class="food_imgBox">
                                <img class="food_imgUrl" src=<?= $row['image_url'] ?> alt="">
                            </div>
                        </div>
                        <div class="content"><?= $row['content'] ?></div>
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