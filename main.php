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
            height:60%;
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
                <input class="input_time" type="time"> &nbsp; 시간에 &nbsp; <input class="btn" type="submit" value="주문 가능한 음식 확인하기">
            </div>    
            <div>
                <input class="input_txt" type="text" value="식당, 메뉴 검색하기">
                <button class="btn">검색</button>
            </div>
        </div>
    </section>


    <main class="main">



        <div>
            <p class="restaurant_name">I-House 학생식당</p>
            <a href="restaurant_detail.php?restaurant_name=I-House 학생식당">
            <div class="restaurant">
                <div class="imgBox">
                    <img class="img" src="https://monthly.chosun.com/upload/0812/0812_302.jpg" alt="">
                </div>
                <div class="food_menu">
                    잡곡밥, 팽이버섯유부국, 매콤오징어떡볶음, 알감자조림, 삼색숙주나물, 깍두기, 숭늉
                </div>
            </div>
            </a>
        </div>

        <div>
            <p class="restaurant_name">진·선·미관 식당</p>
            <div class="restaurant">
                <div class="imgBox">
                    <img class="img" src="https://i.namu.wiki/i/RX9Tq9s8drjMtXyIqbkeAQINv7ZSQkwNqzROKRq-tezwvNjoGpNUJ27UFasxxYOJATmtUJXkoNIR_OHbtED5oA.webp" alt="">
                </div>
                <div class="food_menu">
                    나가사끼 짬뽕탕, 꿔바로우/청양유자마요소스, 고구마 조림, 미역초무침, 쌀밥, 배추김치 
                </div>
            </div>
            
        </div>
        <div>
            <p class="restaurant_name">헬렌관 식당</p>
            <div class="restaurant">
                <div class="imgBox">
                    <img class="img" src="https://img1.daumcdn.net/thumb/R1280x0/?scode=mtistory2&fname=https%3A%2F%2Fblog.kakaocdn.net%2Fdn%2FcwQdnc%2Fbtsz20sgWQ0%2F24K7kUNZkAxKKmxPqmj0F1%2Fimg.jpg" alt="">
                </div>
                <div class="food_menu">
                    우유달걀카레, 미니돈까스/칠리소스, 콜리플라워 두부무침, 마카로니마요무침, 유부 된장국, 배추김치
                </div>
            </div>
           
        </div>
        <div>
            <p class="restaurant_name">E-House 식당(201동)</p>
            <div class="restaurant">
                <div class="imgBox">
                    <img class="img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQpGfH5Usnai95GjvULuSCywBu8c3mjuXkwdBcU3Z47er9b0Jphh93m9ktsWTfWkpwh8IQ&usqp=CAU" alt="">
                </div>
                <div class="food_menu">
                    야채듬뿍 비빔당면, 콩나물 돼지불고기, 순대/양념소금, 후리가케 주먹밥, 단무지
                </div>
            </div>
           
       </div>
        <div>
            <p class="restaurant_name">공대식당</p>
            <div class="restaurant">
                <div class="imgBox">
                    <img class="img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQ7vBU43Kg_5TduAn7T-2wEMXQA_DnhVOXHA&usqp=CAU" alt="">
                </div>
                <div class="food_menu">
                    잡곡밥, 콩비지찌개, 너비아니구이, 열무나물무침, 멸치볶음, 깍두기, 숭늉
                </div>
            </div>
           
        </div>
        <div>
            <p class="restaurant_name">한우리집 식당</p>
            <div class="restaurant">
                <div class="imgBox">
                    <img class="img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTf3R6bK8e1Io_oUvF3p51r3f-nHUU7dcQEAw&usqp=CAU" alt="">
                </div>
                <div class="food_menu">
                    잡곡밥, 콩비지찌개, 너비아니구이, 열무나물무침, 멸치볶음, 깍두기, 숭늉
                </div>
            </div>
           
        </div>
     
    </main>

    <!-- FOOTER -->
    <section class="footer">
        <div class="inner">
            <div>
                <h1>EwhaFOOD</h1>
                <p>이화여자대학교 학생들을 위한 학식 배달 서비스</p>
                <ul class="menu">
                    <li><a href="#">이용약관</a></li>
                    <li><a href="#">개인정보처리방침</a></li>
                </ul>
                <ul class="name">
                    <li>대표 : TwoBig</li>
                    <li>이메일 : hyeri1126@ewhain.net</li>
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