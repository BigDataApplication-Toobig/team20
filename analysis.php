<!-- analysis.php: 데이터에 대한 심충적 분석 제공 -->
<?php
include('db.php');
$sql = "select * from restaurant";
$result = mysqli_query($db, $sql);

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


    <style>
        body {
            padding-bottom: 200px;
            overflow-y: scroll;
            font-family: 'IBM Plex Sans KR', sans-serif;
        }

        header {
            position: sticky;
            width: 100%;
            top: 0;
            left: 0;
            /* background-color: rgb(43, 136, 99,0.9); */
            /* background-color: rgba(151, 216, 170, 0.9); */
            background-color: rgb(165, 206, 151, 0.9);
            color: white;
            /* border-bottom: 1px solid rgb(128, 128, 128,0.5); */
        }

        a {
            text-decoration: none;
            color: white;
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


        main {
            display: flex;
            justify-content: center;
            /* 가로 가운데 정렬 */

            margin-top: 20px;
            padding: 0 40px;
            /* 좌우 여백 조정 */
            gap: 20px;
            /* section 간 간격 조절 */
        }

        .main_inner {
            width: 1400px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 55px 0;
        }

        main {
            font-family: 'Nanum Gothic';
        }

        .input_time {
            padding: 5px 10px;
            border: 1px solid rgb(128, 128, 128, 0.5);
        }

        .input_txt {
            padding: 5px 10px;
            margin-right: 5px;
            border: 1px solid rgb(128, 128, 128, 0.5);
        }

        .main {
            width: 1400px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
        }

        .restaurant {
            border: 1px solid rgb(128, 128, 128, 0.5);
            /* background-color: yellow; */
            height: 380px;
            width: 225px;
            border-radius: 10px;
            overflow: hidden;
        }

        .imgBox {
            width: 100%;
            height: 100%;
        }

        .img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .food_menu {
            text-align: center;
            padding: 30px;
            box-sizing: border-box;
            line-height: 1.2;
        }

        .restaurant_name {
            text-align: center;
            font-weight: 600;
            margin-bottom: 10px;
            font-size: 18px;
        }

        .footer {
            position: relative;
            bottom: 0;
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

        }

        main {
            display: flex;
            margin-top: 20px;
            padding: 0 20px;
            gap: 30px;
        }

        .section {
            flex: 1;
            padding: 20px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 20px;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 10px;

        }

        h1 {
            margin-bottom: 20px;
            margin-top: 20px;
            font-size: 20px;
            font-weight: bold;
        }
    </style>

</head>

<body style="overflow-y: scroll;">
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
    <h1 style="text-align: center;">Ewha FOOD에서는 식당 데이터를 기반으로 다음과 같은 분석 자료를 제공합니다.</h1>

    <main style="display: flex; margin-top: 20px; padding: 20px 40px 40px 0;">
        <div class="section" style="flex: 1;">
            <section>
                <h1>회원별 총 주문금액</h1>
                <table>
                    <tr>
                        <th>User ID</th>
                        <th>Sum</th>
                    </tr>
                    <?php

                    //<!-- Project results -->
                    //<!-- (4) Some SELECT queries should include SUM, AVG, etc (aggregation operations) and also GROUP BY statements -->
                    $sql = "SELECT `user_id`, SUM(`price`) AS `sum` FROM `order` GROUP BY `user_id`;";
                    $result = mysqli_query($db, $sql);

                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <tr>
                            <td><?php echo $row['user_id']; ?></td>
                            <td><?php echo $row['sum']; ?></td>
                        </tr>
                    <?php
                    }


                    ?>
                </table>
            </section>
        </div>
        <div class="section" style="flex: 1;">
            <section>
                <h1>식당 시간대별 평균 금액</h1>
                <table>
                    <tr>
                        <th>Restaurant Name</th>
                        <th>Serving Time</th>
                        <th>Average Menu Price</th>
                    </tr>
                    <?php


                    //<!-- Project results -->
                    //<!-- (5-1) providing aggregates (sum, average, max, min, etc.) based on complex groupings (group on several columns) -->
                    $sql = "SELECT r.restaurant_name, m.serving_time, AVG(m.price) AS avg_menu_price 
        FROM MEAL m 
        JOIN RESTAURANT r ON m.restaurant_id = r.restaurant_id 
        GROUP BY r.restaurant_name, m.serving_time;";

                    $result = mysqli_query($db, $sql);

                    // 결과 출력
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <tr>
                            <td><?php echo $row['restaurant_name']; ?></td>
                            <td><?php echo $row['serving_time']; ?></td>
                            <td><?php echo $row['avg_menu_price']; ?></td>
                        </tr>
                    <?php
                    }


                    ?>
                </table>
            </section>
        </div>
        <div class="section" style="flex: 1;">
            <section>
                <h1>메뉴별, 식당별 매출</h1>
                <table>
                    <tr>
                        <th>Restaurant Name</th>
                        <th>Meal ID</th>
                        <th>Total Sales</th>
                    </tr>
                    <?php

                    //<!-- Project results -->
                    //<!-- (5-2) rollup, drill down on OLAP data -->

                    $sql = "SELECT r.restaurant_name, o.meal_id, SUM(o.price) AS total_sales
            FROM `ORDER` o
            JOIN RESTAURANT r ON o.restaurant_id = r.restaurant_id
            GROUP BY r.restaurant_name, o.meal_id WITH ROLLUP;";
                    $result = mysqli_query($db, $sql);

                    // 결과 출력
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <tr>
                            <td>
                                <?php
                                if (isset($row['restaurant_name'])) {
                                    echo $row['restaurant_name'];
                                } else {
                                    echo "전체 총합";
                                }
                                ?>
                            </td>
                            <td>
                                <?php
                                if (isset($row['meal_id'])) {
                                    echo $row['meal_id'];
                                } else {
                                    echo "식당 총합";
                                }
                                ?>
                            </td>
                            <td>
                                <?php echo $row['total_sales']; ?>
                            </td>
                        </tr>
                    <?php
                    }


                    ?>
                </table>
            </section>
        </div>
        <div class="section" style="flex: 1;">
            <section>
                <h1>식당별 평균별점 랭킹</h1>
                <table>
                    <tr>
                        <th>Restaurant ID</th>
                        <th>Average Ratings</th>
                        <th>Review Count</th>
                        <th>Rating Rank</th>
                    </tr>
                    <?php

                    //<!-- Project results -->
                    //<!-- (5-3) ranking, or windowing  -->

                    $sql = "SELECT r.restaurant_name AS restaurant_id, AVG(rev.ratings) AS avg_ratings, COUNT(*) AS review_count, DENSE_RANK() OVER (ORDER BY AVG(rev.ratings) DESC) AS rating_rank
            FROM review rev
            JOIN RESTAURANT r ON rev.restaurant_id = r.restaurant_id
            GROUP BY r.restaurant_name;";
                    $result = mysqli_query($db, $sql);


                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <tr>
                            <td><?php echo $row['restaurant_id']; ?></td>
                            <td><?php echo round($row['avg_ratings'], 1); ?></td>
                            <td><?php echo $row['review_count']; ?></td>
                            <td><?php echo $row['rating_rank']; ?></td>
                        </tr>
                    <?php
                    }


                    ?>
                </table>

            </section>
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
            <divv class="footer_right">
                <div class="footer_imgBox">
                    <img class="img" src="https://blog.kakaocdn.net/dn/cd1bfq/btsz51di36E/8L5wfoO4rRvP0zIx70nzC0/img.png" alt="">
                </div>
            </divv>
        </div>
    </section>
    <section>

    </section>

</body>

</html>