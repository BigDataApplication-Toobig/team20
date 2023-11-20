-- dbcreate_init.sql: 데이터베이스와 유저 생성
-- 최초 설정시 실행

use mysql;
create user team20 identified by 'team20';

create  database team20;
grant all privileges on team20.* to 'team20'@'localhost';

flush privileges;
use team20;