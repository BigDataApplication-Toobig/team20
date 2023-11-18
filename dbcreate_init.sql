-- 최초 실행: db와 user 생성

use mysql;
create user team20 identified by 'team20';

create  database team20;
grant all privileges on team20.* to 'team20'@'localhost';
-- 사용자 계정 로그인 mysql -uteam20 -pteam20
flush privileges;
use team20;