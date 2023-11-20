-- dbcreate.sql: 데이터베이스 테이블과 기본/외래키, 테이블 관계, 인덱스 생성
-- root 계정으로 로그인(mysql -u root -p)한 뒤, 해당 파일 실행(source dbcreate.sql)

use team20;

CREATE TABLE `USER` (
	`user_id`	int	NOT NULL,
	`password`	varchar(100)	NOT NULL,
	`email`	varchar(100)	NULL
);

CREATE TABLE `LIKED_MEALS` (
	`likedMeals_id`	int	NOT NULL,
	`user_id`	int	NOT NULL,
	`meal_id`	int	NOT NULL,
	`restaurant_id`	int	NOT NULL,
	`created_dt`	datetime	NULL
);

CREATE TABLE `RESTAURANT` (
	`restaurant_id`	int	NOT NULL,
	`restaurant_name`	varchar(100)	NULL,
	`call_number`	varchar(100)	NULL,
	`location`	varchar(100)	NULL,
	`introduction`	varchar(1000)	NULL,
	`available_time`	varchar(1000)	NULL
);

CREATE TABLE `MEAL` (
	`meal_id`	int	NOT NULL,
	`restaurant_id`	int	NOT NULL,
	`weekday`	varchar(100)	NULL,
	`date`	date	NULL,
	`serving_time`	varchar(100)	NULL,
	`price`	int	NULL,
	`meal_menu`	varchar(2000)	NULL
);

CREATE TABLE `ORDER` (
	`order_id`	int	NOT NULL,
	`user_id`	int	NOT NULL,
	`restaurant_id`	int	NOT NULL,
	`meal_id`	int	NOT NULL,
	`price`	int	NULL,
	`payment_method`	varchar(100)	NULL,
	`order_datetime`	datetime	NULL,
	`receive_datetime`	datetime	NULL
);

CREATE TABLE `MENU` (
	`menu_id`	int	NOT NULL,
	`meal_id`	int	NOT NULL,
	`restaurant_id`	int	NOT NULL,
	`menu_name`	varchar(100)	NULL
);

CREATE TABLE `REVIEW` (
	`review_id`	int	NOT NULL,
	`restaurant_id`	int	NOT NULL,
	`user_id`	int	NOT NULL,
	`meal_id`	int	NOT NULL,
	`ratings`	float	NULL,
	`content`	varchar(2000)	NULL,
	`image_url`	varchar(1000)	NULL,
	`created_dt`	datetime	NULL
);

CREATE TABLE `RESTAURANT_IMAGES` (
	`image_id`	int	NOT NULL,
	`restaurant_id`	int	NOT NULL,
	`image_url`	varchar(1000)	NULL
);

CREATE TABLE `RESTAURANT_TIMEINFO` (
	`restaurant_timeInfo_id`	int	NOT NULL,
	`restaurant_id`	int	NOT NULL,
	`serving_time`	varchar(100)	NULL,
	`start_time`	time	NULL,
	`end_time`	time	NULL
);

ALTER TABLE `USER` ADD CONSTRAINT `PK_USER` PRIMARY KEY (
	`user_id`
);

ALTER TABLE `LIKED_MEALS` ADD CONSTRAINT `PK_LIKED_MEALS` PRIMARY KEY (
	`likedMeals_id`,
	`user_id`,
	`meal_id`,
	`restaurant_id`
);

ALTER TABLE `RESTAURANT` ADD CONSTRAINT `PK_RESTAURANT` PRIMARY KEY (
	`restaurant_id`
);

ALTER TABLE `MEAL` ADD CONSTRAINT `PK_MEAL` PRIMARY KEY (
	`meal_id`,
	`restaurant_id`
);

ALTER TABLE `ORDER` ADD CONSTRAINT `PK_ORDER` PRIMARY KEY (
	`order_id`,
	`user_id`,
	`restaurant_id`,
	`meal_id`
);

ALTER TABLE `MENU` ADD CONSTRAINT `PK_MENU` PRIMARY KEY (
	`menu_id`,
	`meal_id`,
	`restaurant_id`
);

ALTER TABLE `REVIEW` ADD CONSTRAINT `PK_REVIEW` PRIMARY KEY (
	`review_id`,
	`restaurant_id`,
	`user_id`,
	`meal_id`
);

ALTER TABLE `RESTAURANT_IMAGES` ADD CONSTRAINT `PK_RESTAURANT_IMAGES` PRIMARY KEY (
	`image_id`,
	`restaurant_id`
);

ALTER TABLE `RESTAURANT_TIMEINFO` ADD CONSTRAINT `PK_RESTAURANT_TIMEINFO` PRIMARY KEY (
	`restaurant_timeInfo_id`,
	`restaurant_id`
);

ALTER TABLE `LIKED_MEALS` ADD CONSTRAINT `FK_USER_TO_LIKED_MEALS_1` FOREIGN KEY (
	`user_id`
)
REFERENCES `USER` (
	`user_id`
);

ALTER TABLE `LIKED_MEALS` ADD CONSTRAINT `FK_MEAL_TO_LIKED_MEALS_1` FOREIGN KEY (
	`meal_id`
)
REFERENCES `MEAL` (
	`meal_id`
);

ALTER TABLE `LIKED_MEALS` ADD CONSTRAINT `FK_RESTAURANT_TO_LIKED_MEALS_1` FOREIGN KEY (
	`restaurant_id`
)
REFERENCES `RESTAURANT` (
	`restaurant_id`
);

ALTER TABLE `MEAL` ADD CONSTRAINT `FK_RESTAURANT_TO_MEAL_1` FOREIGN KEY (
	`restaurant_id`
)
REFERENCES `RESTAURANT` (
	`restaurant_id`
);

ALTER TABLE `ORDER` ADD CONSTRAINT `FK_USER_TO_ORDER_1` FOREIGN KEY (
	`user_id`
)
REFERENCES `USER` (
	`user_id`
);

ALTER TABLE `ORDER` ADD CONSTRAINT `FK_RESTAURANT_TO_ORDER_1` FOREIGN KEY (
	`restaurant_id`
)
REFERENCES `RESTAURANT` (
	`restaurant_id`
);

ALTER TABLE `ORDER` ADD CONSTRAINT `FK_MEAL_TO_ORDER_1` FOREIGN KEY (
	`meal_id`
)
REFERENCES `MEAL` (
	`meal_id`
);

ALTER TABLE `MENU` ADD CONSTRAINT `FK_MEAL_TO_MENU_1` FOREIGN KEY (
	`meal_id`
)
REFERENCES `MEAL` (
	`meal_id`
);

ALTER TABLE `MENU` ADD CONSTRAINT `FK_RESTAURANT_TO_MENU_1` FOREIGN KEY (
	`restaurant_id`
)
REFERENCES `RESTAURANT` (
	`restaurant_id`
);

ALTER TABLE `REVIEW` ADD CONSTRAINT `FK_RESTAURANT_TO_REVIEW_1` FOREIGN KEY (
	`restaurant_id`
)
REFERENCES `RESTAURANT` (
	`restaurant_id`
);

ALTER TABLE `REVIEW` ADD CONSTRAINT `FK_USER_TO_REVIEW_1` FOREIGN KEY (
	`user_id`
)
REFERENCES `USER` (
	`user_id`
);

ALTER TABLE `REVIEW` ADD CONSTRAINT `FK_MEAL_TO_REVIEW_1` FOREIGN KEY (
	`meal_id`
)
REFERENCES `MEAL` (
	`meal_id`
);

ALTER TABLE `RESTAURANT_IMAGES` ADD CONSTRAINT `FK_RESTAURANT_TO_RESTAURANT_IMAGES_1` FOREIGN KEY (
	`restaurant_id`
)
REFERENCES `RESTAURANT` (
	`restaurant_id`
);

ALTER TABLE `RESTAURANT_TIMEINFO` ADD CONSTRAINT `FK_RESTAURANT_TO_RESTAURANT_TIMEINFO_1` FOREIGN KEY (
	`restaurant_id`
)
REFERENCES `RESTAURANT` (
	`restaurant_id`
);

-- index 설정
create index idx_restaurant_id on restaurant (restaurant_id);


-- auto_increment 설정
ALTER TABLE liked_meals MODIFY likedMeals_id INT NOT NULL AUTO_INCREMENT;
ALTER TABLE `order` MODIFY `order_id` INT NOT NULL AUTO_INCREMENT;
ALTER TABLE review MODIFY review_id INT NOT NULL AUTO_INCREMENT;

