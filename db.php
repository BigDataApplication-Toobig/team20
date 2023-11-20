<!-- db.php: 웹사이트를 데이터베이스와 연결하고 세션 시작 -->
<?php

$db = mysqli_connect('localhost', 'team20', 'team20', 'team20');
session_start();
