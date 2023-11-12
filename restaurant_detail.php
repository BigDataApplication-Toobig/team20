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
        .input_time{
            padding: 5px 10px;
            border: 1px solid rgb(128, 128, 128,0.5);
        }

        /* MAIN */
        .main_container{
            width: 100%;
            padding: 50px 0;
        }
        .main_container_inner{
            width: 1400px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            /* background-color: #9FBB73; */
            justify-content: center;
            align-items: center;
            gap: 50px;
        }
        .main_title{
            font-size: 30px;
            font-weight: 600;
            padding-bottom: 5px;
            border-bottom: 2px solid black;
        }
        .main_desc{
            width: 100%;
            height: 300px;
            display: flex;
        }
        .desc_left{
            width: 30%;
            height: 100%;
            padding: 10px 20px;
            box-sizing: border-box;
            border-right: 1px solid rgb(128, 128, 128,0.3);
        }
        .imgBox{
            width: 100%;
            height: 100%;
            background-color: antiquewhite;
            position: relative;
            overflow: hidden;
            border-radius: 5px;
        }
        .img{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        .desc_right{
            width: 70%;
            height: 100%;
            padding: 20px;
            display: flex;
            flex-direction: column;
            gap: 20px;
            justify-content: center;
            /* background-color: blue; */
        }
        .desc_title{
            font-size: 18px;
            font-weight: 600;
        }
        .desc{
            font-size: 15px;
            font-weight: 500;
        }
        /* TABLE CONTAINER */
        .table_container{
            width: 100%;
            display: flex;
            justify-content: space-around;
        }
        table{
            border-collapse: collapse;
            border: 1px solid rgb(128, 128, 128,0.5);
            text-align: center;
        }
        th{
            border: 1px solid rgb(128, 128, 128,0.5);
            background-color: rgb(241, 234, 142,0.8);
            padding:10px;
        }
        td{
            border: 1px solid rgb(128, 128, 128,0.5);
            padding: 30px 20px;
        }
        td:hover{
            background-color: #9FBB73;
            transition: 0.3s;
        }
        .order{
            width: 40%;
            height: 100%;
            padding: 20px 0;
        }
        .order_title{
            font-size: 30px;
            text-align: center;
            font-weight: 600;
        }
        .order_form{
            border: 1px solid rgb(128, 128, 128,0.5);
            padding: 30px;
            display: flex;
            flex-direction: column;
            margin-top: 30px;
            gap: 20px;
        }
        .selected_menu{
            font-size: 18px;
            border: 1px solid rgb(128, 128, 128,0.5);
            padding: 10px;
        }
        .form_question{
            font-size: 18px;
            font-weight: 600;
        }
        .btn_plus{
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
                 <div ><a href="login.php">login</a></div>
                 <div > <a href="signup.php">sign up</a></div>
             </div>
        </div>
    </header>

    <main class="main_container">
        <div class="main_container_inner">
            <h1 class="main_title">I-House 학생식당</h1>
            <div class="main_desc">
                <div class="desc_left">
                    <div class="imgBox">
                        <img class="img" src="http://www.ewha.ac.kr/app/board/attach/image/328586-1679293142000.do" alt="">
                    </div>
              
                </div>
                <div class="desc_right">
                    <h1 class="desc_title">대학원 기숙사 A/B동 I-House C동 B1층</h1>
                    <p style="line-height: 1.2;">I-House 학생식당은 생활환경관 및 SK텔레콤관 근처에 위치하고 있어 국제교육관, 신세계관, 생활환경관, 학생문화관 그리고 ECC 등에서 이용하기 편리합니다. 물론 아이하우스에 거주하는 외국인학생들과 대학원생들도 이용 가능합니다.

                        학교의 대표적인 학생식당으로 자리매김할 I-House 학생식당은 자율배식형 정식(한식)과 돈까스 및 스파게티와 같은 양식, 그리고 명동칼국수와 제육덮밥 등을 판매합니다. 매장 안에 카패도 있어 다양한 종류의 음료와 베이커리를 즐기실 수 있습니다.
                    </p>
                    <p class="desc">02-313-7071</p>
                    <p class="desc">11시~18시 30분
                        (쉬는시간 15시~16시, 까페는 이용가능)</p>

                </div>
            </div>
            <div class="table_container">
                <table>
                    <tr>
                        <th scope="col">월</th>
                        <th scope="col">화</th>
                        <th scope="col">수</th>
                        <th scope="col">목</th>
                        <th scope="col">금</th>
                    </tr>
                    <tr>
                        <td>
                            -조식- <br> *천원의 아침밥* <br> -선착순 150명- <br><br> 흑미밥<br>계란만둣국<br>쏘시지야채볶음<br>깍두기<br>반찬2종<br>야채샐러드<br>
                        </td>
                        <td>
                            -조식- <br> *천원의 아침밥* <br> -선착순 150명- <br><br> 흑미밥<br>계란만둣국<br>쏘시지야채볶음<br>깍두기<br>반찬2종<br>야채샐러드<br>
                        </td>
                        <td>
                            -조식- <br> *천원의 아침밥* <br> -선착순 150명- <br><br> 흑미밥<br>계란만둣국<br>쏘시지야채볶음<br>깍두기<br>반찬2종<br>야채샐러드<br>
                        </td>
                        <td>
                            -조식- <br> *천원의 아침밥* <br> -선착순 150명- <br><br> 흑미밥<br>계란만둣국<br>쏘시지야채볶음<br>깍두기<br>반찬2종<br>야채샐러드<br>
                        </td>
                        <td>
                            -조식- <br> *천원의 아침밥* <br> -선착순 150명- <br><br> 흑미밥<br>계란만둣국<br>쏘시지야채볶음<br>깍두기<br>반찬2종<br>야채샐러드<br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            -중식- <br> 흑미밥<br>계란만둣국<br>배추김치<br>해물떡볶이<br>궁중식잡채<br>야채샐러드<br>
                        </td>
                        <td>
                            -중식- <br> 흑미밥<br>계란만둣국<br>배추김치<br>해물떡볶이<br>궁중식잡채<br>야채샐러드<br>
                        </td>
                        <td>
                            -중식- <br> 흑미밥<br>계란만둣국<br>배추김치<br>해물떡볶이<br>궁중식잡채<br>야채샐러드<br>
                        </td>
                        <td>
                            -중식- <br> 흑미밥<br>계란만둣국<br>배추김치<br>해물떡볶이<br>궁중식잡채<br>야채샐러드<br>
                        </td>
                        <td>
                            -중식- <br> 흑미밥<br>계란만둣국<br>배추김치<br>해물떡볶이<br>궁중식잡채<br>야채샐러드<br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            -중식- <br> 흑미밥<br>계란만둣국<br>배추김치<br>해물떡볶이<br>궁중식잡채<br>야채샐러드<br>
                        </td>
                        <td>
                            -중식- <br> 흑미밥<br>계란만둣국<br>배추김치<br>해물떡볶이<br>궁중식잡채<br>야채샐러드<br>
                        </td>
                        <td>
                            -중식- <br> 흑미밥<br>계란만둣국<br>배추김치<br>해물떡볶이<br>궁중식잡채<br>야채샐러드<br>
                        </td>
                        <td>
                            -중식- <br> 흑미밥<br>계란만둣국<br>배추김치<br>해물떡볶이<br>궁중식잡채<br>야채샐러드<br>
                        </td>
                        <td>
                            -중식- <br> 흑미밥<br>계란만둣국<br>배추김치<br>해물떡볶이<br>궁중식잡채<br>야채샐러드<br>
                        </td>
                    </tr>
                </table>
                <div class="order">
                    <form class="order_form" action="POST">
                        <h1 class="order_title">주문서</h1>
                        <div>
                            <p class="form_question mb">선택하신 메뉴 :</p>
                            <div class="selected_menu">흑미밥, 계란만둣국, 배추김치, 해물떡볶이, 궁중식잡채, 야채샐러드</div>
                        </div>
                        <div class="form_question">총 금액 : 5500원</div>
                        <div class="payment_method">
                            <p class="form_question mb">결제수단을 선택해주세요.</p>
                            <input type="radio" name="chk_payment" value="1">신용/체크카드
                            <input type="radio" name="chk_payment" value="CSS">계좌이체/무통장입금
                            <input type="radio" name="chk_payment" value="웹디자인">휴대폰
                        </div>
                        <div class="receive_time">
                            <p class="form_question mb">음식을 받을 시간을 선택해주세요.</p>
                            <input class="input_time" type="time">
                        </div>
                        <input class="btn btn_plus" type="submit" value="주문하기">
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
            <div class="footer_right">
                <div class="footer_imgBox">
                    <img class="footer_img" src="https://blog.kakaocdn.net/dn/cd1bfq/btsz51di36E/8L5wfoO4rRvP0zIx70nzC0/img.png" alt="">
                </div>
            </div>
        </div>
    </section>

</body>
</html>