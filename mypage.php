<?php
include('db.php'); ?>

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
         body{
            font-family: 'IBM Plex Sans KR', sans-serif;
            box-sizing: border-box;
        }
        header{
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
        a{
            text-decoration: none;
            color: white;
        }
        .mb{
            margin-bottom: 10px;
        }
        .btn {
            padding: 5px 10px;
            border: 1px solid rgb(128, 128, 128,0.5);;
            color: black;
            background-color: rgb(241, 234, 142,0.8);
            text-align: center;
            cursor: pointer;
            transition: .4s;
        }
        .btn:hover {
            background-color: #9FBB73;
            color: black;
        }
        .header_inner{
            width: 1400px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 150px;
        }
        .logoBox{
           width: 270px;
           height: 115px;
           position: relative;
        }
        .logo{
            top: 0;
            left: 0;
            position: absolute;
            background-size: cover;
        }
        .menu{
            display: flex;
            font-family: 'Edu Tas Beginner';
            font-style: italic;
            font-size: 25px;
            column-gap: 50px;
        }
        .title{
            font-weight: 600;
            font-size: 20px;
            padding: 20px;
            margin-left: 280px;
        }

        /* MAIN */
        .main_container{
            width: 100%;
            
        }
        .main_inner{
            width: 1400px;
            margin: 0 auto;
            padding: 20px;
            display: flex;
            margin-bottom: 30px;
        }
        .main_left{
            width: 50%;
            display: flex;
            flex-direction: column;
            align-items: center;
            border-right: 1px solid rgb(128, 128, 128,0.5);
        }
        .main_right{
            width: 50%;
            display: flex;
            flex-direction: column;
            align-items: center;
           
        }
        .main_title{
            padding: 10px;
            font-weight: 600;
            font-size: 20px;
            border-bottom: 2px solid black;
        }
        /* .review{
            box-sizing: border-box;
            width: 100%;
            padding: 30px 20px;
            border: 1px solid rgb(128, 128, 128,0.3);
        } */

        .reveiw_btn{
            padding: 7px;
            background-color: rgb(128, 128, 128,0.7);
            color: white;
            border: none;
            border-radius: 3px;
        }
        .reveiw_btn:hover{
            background-color: rgb(128, 128, 128,0.3);

        }
        #writeorm {
        display: none;
        }
        .reviewForm{
            border: 1px solid rgb(128, 128, 128,0.3);
            padding: 10px; 
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        .textarea{
            width: 100%;
        }
        .flex{
            display: flex;

        }
        #reviewForm{
            display:none;
        }
        .view_review{
            border: 1px solid rgb(128, 128, 128,0.3);
            padding: 10px; 
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        .reviewBox{
            padding: 10px;
            border: 1px solid rgb(128, 128, 128,0.3);
            margin-top: 10px;
        }

    
        .content{
            margin-top: 20px;
            border: 1px solid rgb(128, 128, 128,0.3);
            padding: 15px 10px;
            border-radius: 5px;
        }
        .payment_list{
            width: 100%;
            display: flex;
            flex-direction: column;
        }
        .payment{
            width: 100%;
            box-sizing: border-box;
            padding: 0 20px;
        }
        .payment_date{
            padding: 10px;
            font-weight: 600;
            font-size: 18px;
        }
        .paymentBox{
            border: 1px solid rgb(128, 128, 128,0.3);
            padding: 20px;
            display: flex;
            flex-direction: column;
            gap: 13px;
            font-weight: 500;
        }
        .food_menu{
            border: 1px solid rgb(128, 128, 128,0.3);
            border-radius: 3px;
            padding: 10px 10px;
        }
        .reveiw_btn{
            padding: 7px;
            background-color: rgb(128, 128, 128,0.7);
            color: white;
            border: none;
            border-radius: 3px;
        }

        .menu_list{
            width: 100%;
            display: flex;
            flex-direction: column;
            gap:10px;
            box-sizing: border-box;
            padding: 0 20px;
        }
        .liked_list{
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 10px;
            border: 1px solid rgb(128, 128, 128,0.3);
            font-size: 16px;
            box-sizing: border-box;
            padding: 20px;
            position: relative;
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
        .footer .menu li a{
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
            font-size:14px;
            font-weight: 700;
        }
        .footer_right{
            display: flex;
            align-items: end;
        }
        .footer_imgBox{
            width: 120px;
            height: 30px;
            object-fit: cover;
            position: relative;
        }
        .footer_img{
            position: absolute;
            top: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
        }
        .heartButton {
            font-size: 24px; /* 조절 가능한 폰트 크기 */
            color: gray;
            cursor: pointer;
            position: absolute;
            border: none;
            top: 0;
            left: 0;
            background-color: white;
        }
        .heartButton.active{
            color: red;
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
                <?php if(isset($_SESSION['user_id'])){ ?>
                    <div><a href="mypage.php">My page</a></div>
                    <div><a class="lin" href="logout.php">Log out</a></div>
                <?php } else{ ?>
                    <div><a href="login_view.php">login</a></div>
                    <div><a class="lin" href="signup_view.php">sign up</a></div>
                <?php } ?>
             </div>
        </div>
        <p></p>
    </header>

    <?php $user_id = $_SESSION['user_id']; ?>
    <p class="title">안녕하세요, <?=$user_id?> 님!</p>
    

    <main class="main_container">
        <div class="main_inner">
            <!-- 결제목록 -->
            <div class="main_left">
                <h1 class="main_title">결제내역(주문목록)</h1>
                <div class="payment_list">
                    

                    <?php
                    
                    $order_sql = "SELECT * FROM `order` where `user_id`=$user_id;";
                    $order_result = mysqli_query($db, $order_sql);
                    
                    
                    ?>
                    <?php $count = 1; ?>
                    <?php while($row = mysqli_fetch_assoc($order_result)){ ?>
                        <div class="payment">
                        
                            <p class="payment_date"><?=substr($row['order_datetime'], 0, 10)?></p>
                            <div class="paymentBox">
                                <p style="font-weight: 600;">수령완료   <span style="color: #9FBB73;"><?=$row['receive_datetime']?> 도착</span></p>
                                <p>음식 주문 시간 : <?=$row['order_datetime']?></p>
                                <p>가격 : <?=$row['price']?>원</p>
                                <p>결제수단 : <?=$row['payment_method']?></p>
                                <p>주문하신 메뉴 :</p>
                                <div class="food_menu">
                                    <?php
                                    $meal_id = $row['meal_id'];
                                    $meal_sql = "select * from meal where meal_id = $meal_id";
                                    $meal_result = mysqli_query($db, $meal_sql);
                                    $row = mysqli_fetch_assoc($meal_result);
                                    $meal_menu = str_replace(',', ', ', $row['meal_menu']);
                                    $restaurant_id = $row['restaurant_id'];
                                    ?>
                                    <?= $meal_menu ?>
                                </div>

                                <!-- 리뷰가 없다면 리뷰쓰기, 리뷰가 있다면 리뷰 보기 보여주기! -->
                                <!-- 리뷰쓰기를 클릭하면 리뷰작성 폼이 나오고, 리뷰보기 버튼을 클릭하면 리뷰를 볼 수 있고 수정, 삭제 버튼이 포함된 폼이 나옴 이것은 프론트에서 구현함 -->
                                <!-- 그러나 현재 데이터가 없어서 확인을 할 수 없음!  -->

                                <?php
                                $sql = "select * from review where meal_id = $meal_id and user_id = $user_id";
                                $result = mysqli_query($db, $sql);
                                $row = mysqli_fetch_assoc($result);
                                //echo print_r($row);
                                ?>

                                <?php if($row){ ?>
                                        <button class="reveiw_btn" onclick="showReviewForm(<?=$count?>)">리뷰보기</button>
                                        <div class="view_review" action=""  id="reviewForm(<?=$count?>)">
                                        <div class="review">
                                <div class="user">
                                    
                                    <div class="user_info">
                                        <p>작성자: <?=$row['user_id']?></p>
                                        <!-- 별점 float -> 별점이미지로 변환해 나타내도록 처리 -->
                                        <p>별점: <?=$row['ratings']?></p>
                                        <p>작성일시: <?=$row['created_dt']?></p>
                                    </div>
                                </div>
                                <div class="food_urls">
                                    <div class="food_imgBox">
                                        <img class="food_imgUrl" src=<?=$row['image_url']?> alt="">
                                    </div>
                                </div>
                                <div class="content"><?=$row['content']?></div>
                            </div>
                                    
                                    <div class="flex">
                                    <form method="post" action="./review_modify.php">
                                        <button onclick="writeReviewForm()" style="margin-right: 10px;">수정하기</button>
                                        
                                    </form>

                                    <form method="post" action="./review_delete.php">
                                        <input name="review_id" type="hidden" value=<?=$row['review_id']?>>
                                        <button>삭제하기</button>
                                    </form>
                                        
                                        
                                    </div>
                                
                                </div>

                                <?php }else{ ?>
                                    <button class="reveiw_btn" onclick="writeReviewForm()">리뷰쓰기</button>
                                <form class="reviewForm" action="review_write.php" id="writeForm" method="post">
                                    <div class="flex">
                                        <p>별점 : &nbsp;</p>
                                        <input name="ratings" type="text">
                                    </div>
                                    <div class="flex">
                                        <p>후기 : &nbsp;</p>
                                        <textarea name="content" class="textarea"></textarea>
                                    </div>
                                    <div class="flex">
                                        <p>이미지 주소 : &nbsp;</p>
                                        <textarea name="image_url" type="text"></textarea>
                                    </div>

                                    <input name="restaurant_id" type="hidden" value=<?=$restaurant_id?>>
                                    <input name="meal_id" type="hidden" value=<?=$meal_id?>>
                                    

                                    <input class="submit" type="submit" value="리뷰 작성"/>
                                </form>

                                <?php } ?>
                                <?php $count++; ?>

                                
    
                                
                            </div>
                        </div>

                    <?php } ?>
                </div>
                   
            </div>
            <!-- 좋아요 목록 -->
            <div class="main_right">
                <h1 class="main_title" style="margin-bottom: 35px;">찜한메뉴</h1>
                <div class="menu_list">
                    <?php
                    $liked_meal_sql = "select * from `liked_meals` where `user_id` = $user_id";
                    $liked_meal_result = mysqli_query($db, $liked_meal_sql);
                    ?>

                    <?php while($meal_row = mysqli_fetch_assoc($liked_meal_result)){ ?>
                        <?php
                        
                            $meal_id = $meal_row['meal_id'];
                            $meal_sql = "select * from `meal` where `meal_id` = $meal_id";
                            $meal_result = mysqli_query($db, $meal_sql);
                            $row = mysqli_fetch_assoc($meal_result);
                        ?>
                        <div class="liked_list">
                            <?php
                            $restaurant_id = $row['restaurant_id'];
                            $resname_sql = "select `restaurant_name` from `restaurant` where `restaurant_id`=$restaurant_id";
                            $resname_result = mysqli_query($db, $resname_sql);
                            $restaurant_name = mysqli_fetch_assoc($resname_result)['restaurant_name'];
                            $meal_menu = str_replace(',', ', ', $row['meal_menu']);
                            ?>
                            <button class="heartButton" onclick="toggleHeart(this)">&#10084;</button>
                            <p><?=$restaurant_name?></p>
                            <p><?=$row['date']?></p>
                            <p><?=$row['serving_time']?></p>
                            <p><?=$meal_menu?></p>
                        </div>
                    <?php } ?> 
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

<script>
    function writeReviewForm() {
      var reviewForm = document.getElementById('writeForm' + count);
      reviewForm.style.display = 'block';
    }
    function showReviewForm(count) {
      var reviewForm = document.getElementById('reviewForm' + count);
      reviewForm.style.display = 'block';
    }
    function toggleHeart(button) {
      button.classList.toggle('active'); // active 클래스를 토글
    }
  </script>
