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
        body{
            font-family: 'IBM Plex Sans KR', sans-serif;
        }
        header{
            position: sticky;
            width: 100%;
            top: 0;
            left: 0;
            /* background-color: rgb(43, 136, 99,0.9); */
            /* background-color: rgba(151, 216, 170, 0.9); */
            background-color: rgb(165, 206, 151,0.9);
            color: white;
            /* border-bottom: 1px solid rgb(128, 128, 128,0.5); */
        }
        a{
            text-decoration: none;
            color: white;
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

        
        main{
            width: 100%;
        }
        .main_inner{
            width: 1400px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 55px 0;
        }
        main{
            font-family: 'Nanum Gothic';
        }
        .input_time{
            padding: 5px 10px;
            border: 1px solid rgb(128, 128, 128,0.5);
        }
        .input_txt{
            padding: 5px 10px;
            margin-right: 5px;
            border: 1px solid rgb(128, 128, 128,0.5);
        }
       
        .main{
            width: 1400px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
        }
        .restaurant{
            border: 1px solid rgb(128, 128, 128,0.5);
            /* background-color: yellow; */
            height: 380px;
            width: 225px;
            border-radius: 10px;
            overflow: hidden;
        }
        .imgBox{
            width: 100%;
            height:100%;
        }
        .img{
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .food_menu{
            text-align: center;
            padding: 30px;
            box-sizing: border-box;
            line-height: 1.2;   
        }
        .restaurant_name{
            text-align: center;
            font-weight: 600;
            margin-bottom: 10px;
            font-size: 18px;
        }        
        .footer {
            position: fixed;
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

    <section>  
        <div class="main_inner">
            <div>
            <form method="post" action="./search_result_time.php">
                <?php if(isset($_GET['time_error'])) { ?>
                    <p class="error"><?php echo $_GET['time_error']; ?></p>
                <?php } ?>
                <input class="input_time" name="input_date" type="date"> &nbsp; 일 &nbsp;
                <input class="input_time" name="input_time" type="time"> &nbsp; 시에 &nbsp; 
                <input class="btn" type="submit" value="주문 가능한 음식 확인하기">
            </form>
            </div>   
            <div>
            <form method="post" action="./search_result_food.php">
                <?php if(isset($_GET['text_error'])) { ?>
                    <p class="error"><?php echo $_GET['text_error']; ?></p>
                <?php } ?>
                <input class="input_txt" name="input_text" type="text" placeholder="식당, 메뉴 검색하기">
                <button class="btn">검색</button>
            </form>
            </div>
        </div>
    </section>


    <main class="main">
    <?php foreach($result as $row){ ?>
        <div>
            <p class="restaurant_name"><?= $row['restaurant_name']  ?></p>
            <a href="restaurant_detail.php?restaurant_id=<?= $row['restaurant_id']?>">
            <div class="restaurant">
                <div class="imgBox">
                <?php 
                $restaurant_id = $row['restaurant_id'];
                $img_sql = "select * from restaurant_images where restaurant_id = $restaurant_id limit 1";
                $img_result = mysqli_query($db, $img_sql);
                $img_row = mysqli_fetch_assoc($img_result);
                ?>
                <img class="img" src="<?=$img_row['image_url']?>" alt="">
                </div>
            </div>
            </a>
        </div>
    <?php } ?>
     
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
  
</body>
</html>