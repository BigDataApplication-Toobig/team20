<?php
include('db.php');

if(isset($_POST['user_id']) && isset($_POST['password']) && isset($_POST['email']))
{
    $user_id = mysqli_real_escape_string($db, $_POST['user_id']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $email = mysqli_real_escape_string($db, $_POST['email']);

    if(empty($user_id)){
        header("location: signup_view.php?error=아이디가 비어있어요");
        exit();
    }
    else if(empty($password)){
        header("location: signup_view.php?error=비밀번호가 비어있어요");
        exit();
    }
    else if(empty($email)){
        header("location: signup_view.php?error=이메일이 비어있어요");
        exit();
    }
    else{
        // 암호화
        // $password = password_hash($password, PASSWORD_DEFAULT);
        // 중복체크
        $sql_same = "select * from user where user_id = '$user_id' or email = '$email'";
        $order = mysqli_query($db, $sql_same);

        if(mysqli_num_rows($order) > 0){
            header("location: signup_view.php?error=아이디 또는 이메일이 이미 있습니다.");
            exit();
        }else{
            $sql_save = "insert into user(user_id, password, email) values ('$user_id', '$password', '$password');";
            $result = mysqli_query($db, $sql_save);

            if($result){
                header("location: signup_view.php?error=성공적으로 회원가입되었습니다.");
                exit();
            }
            else{
                header("location: signup_view.php?error=회원가입에 실패했습니다.");
                exit();
            }
        }
    }

}
else{
    header("location: signup_view.php?error=알 수 없는 오류가 발생했습니다.");
    exit();
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
     <!-- bootstrap -->
     <!-- 부트스트랩 cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <style>
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
        .header_inner{
            width: 1400px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 150px;
        }
        .logoBox{
           width: 400px;
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
            font-size: 22px;
            column-gap: 30px;
        }
        

        .signin {
            margin-top: 120px;
            padding: 100px 0 150px;
            background-image: url("../background.jpg"); 
            background-size: cover;
        }
        .signin h1 {
            color: black;
            font-size: 30px;
            text-align: center;
            margin-bottom: 24px;
            font-family: 'Gugi';
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
            padding: 30px 22px;
        }
        .signin__card form h3 {
            font-weight: 700;
            margin-bottom: 10px;
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
            color: #272727;;
            text-align: center;
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
                 <div >login</div>
                 <div >sign up</div>
             </div>
        </div>
    </header> 

    
    <section class="signin">
        <!-- <h1>회원가입</h1>
        <div class="signin__card">
            <h2><strong>Welcome!&nbsp;&nbsp;</strong>EwhaFOOD에 오신 것을 환영합니다.</h2>
            <form method="post" action="./signup_action.php">
                <h3>ID</h3><input type="text" name="id" placeholder="아이디를 입력하세요">
                <h3>PASSWORD</h3><input name="password" type="password" placeholder="비밀번호를 입력하세요">
                <h3>이메일</h3><input type="text" name="email" placeholder="이메일을 입력하세요" class="last">
                <div><input class="submit" type="submit" value="Login" /></div>
            </form>
        </div> -->
     

    </section>
</body>
</html>