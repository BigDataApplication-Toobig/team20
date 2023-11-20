<!-- logout.php: 로그아웃 화면(세션 삭제) -->
<?php

session_start();
session_unset();

session_destroy();

header("Location: main.php");
exit;
