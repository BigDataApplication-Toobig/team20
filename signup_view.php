<!-- signup_view.php: 회원가입 화면 -->

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
    <!-- bootstrap -->
    <!-- 부트스트랩 cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

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
            background-color: rgb(165, 206, 151, 0.9);
            color: white;
            /* border-bottom: 1px solid rgb(128, 128, 128,0.5); */
        }

        a {
            text-decoration: none;
            color: white;
        }

        .error {
            background: #eb2355;
            color: #ffffff;
            padding: 10px;
            width: 95%;
            border-radius: 5px;
            margin: 20px auto;
            font-size: 12px;
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


        /* SIGN UP FORM */
        .signin {
            width: 100%;
            height: 70vh;
            box-sizing: border-box;
        }

        .signin h1 {
            color: black;
            font-size: 30px;
            text-align: center;
            margin: 30px 0;
        }

        .signin__card {
            width: 500px;
            margin: 0 auto;
            border-radius: 6px;
            background-color: #F6F5F0;
            box-shadow: 2px 2px 20px rgba(0, 0, 0, .3);
            color: #555;
        }

        .signin__card h2 {
            padding: 30px;
            font-size: 18px;
            text-align: center;
            border-bottom: 1px solid #ddd;
            font-family: 'Gugi';
        }

        .signin__card h2 strong {
            font-weight: 800;
            color: #063;
        }

        .signin__card form {
            padding: 10PX 22px;
        }

        .signin__card form P {
            /* margin-bottom: 10px; */
        }

        .signin__card form input {
            width: 100%;
            margin-bottom: 12px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            outline: none;
            box-sizing: border-box;
            font-size: 14px;
        }

        .signin__card form .last {
            margin-bottom: 25px;
        }

        /* 속성선택자 */
        .signin__card form .submit {
            background-color: rgba(251, 234, 162, 0.9);
            /* border: 1px solid rgba(186, 174, 117, 0.9); */
            color: #9f8a119c;
            font-size: 20px;
            cursor: pointer;
            margin-bottom: 20px;
        }

        .signin__card form p {
            font-size: 12px;
            color: #272727;
            ;
            text-align: center;
        }

        .footer {
            position: sticky;
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
                <div><a href="login_view.php">login</a></div>
                <div> <a class="lin" href="signup_view.php">sign up</a></div>
            </div>
        </div>
        <p></p>
    </header>

    <!-- Project results -->
    <!-- (3-부가항목) take USER INPUT to generate DYNAMIC QUERIES -->

    <!-- 회원가입 폼 -->
    <section class="signin">
        <h1>회원가입</h1>

        <div class="signin__card">
            <h2><strong>Welcome!&nbsp;&nbsp;</strong>EwhaFOOD에 오신 것을 환영합니다.</h2>
            <form method="post" action="./signup_server.php">
                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>
                <P>ID(학번)</P>
                <input type="text" name="user_id" placeholder="아이디를 입력하세요">

                <P>PASSWORD</P>
                <input name="password" type="password" placeholder="비밀번호를 입력하세요">

                <P>이메일</P>
                <input type="text" name="email" placeholder="이메일을 입력하세요" class="last">

                <div><input class="submit" type="submit" value="Sign up" /></div>
            </form>
        </div>
    </section>

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