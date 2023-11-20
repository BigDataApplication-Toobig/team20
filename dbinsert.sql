-- dbinsert.sql: 데이터베이스 테이블에 데이터 삽입

-- 1. restaurant
INSERT INTO team20.restaurant (restaurant_id,restaurant_name,call_number,location,introduction,available_time) VALUES
	 (1,'I-House 학생식당','02-313-7071','대학원 기숙사 A/B동 I-House C동 B1층','I-House 학생식당은 생활환경관 및 SK텔레콤관 근처에 위치하고 있어 국제교육관, 신세계관, 생활환경관, 학생문화관 그리고 ECC 등에서 이용하기 편리합니다. 물론 아이하우스에 거주하는 외국인학생들과 대학원생들도 이용 가능합니다.

학교의 대표적인 학생식당으로 자리매김할 I-House 학생식당은 자율배식형 정식(한식)과 돈까스 및 스파게티와 같은 양식, 그리고 명동칼국수와 제육덮밥 등을 판매합니다. 매장 안에 카패도 있어 다양한 종류의 음료와 베이커리를 즐기실 수 있습니다.','11시~18시 30분
(쉬는시간 15시~16시, 까페는 이용가능)'),
	 (2,'진·선·미관 식당','02-3277-2093','진선미관 (이화·포스코관 옆)','진 ·선·미관 식당은 이화 ·포스코관 옆 진선미관 1층에 위치하고 있어 이화 ·포스코관 , 종합과학관에서 이용하기 편리하다. 
학기 중에는 토요일도 평일같이 운영하고 있으며, 이화가배당이라는 카페도 운영하고 있다.','·이용시간
1. 평일, 공휴일
  · 점심 11:00-14:00
  · 저녁 17:00-19:00

2. 토요일은 평일 동일 시간에 점심, 저녁 모두 제공

3. 일요일은 휴무

4. 진관실, 미관1실, 미관2실 이용안내
  · 한정식(자연솜씨)식당을 이용해야 하며 예약제로 사용가능하다.
  · 도시락주문은 하루 전 예약제로 가능하다.
  · 사용가능 인원
     진관실 : 2∼20명
     미관1실 : 2∼8명
     미관2실 : 2∼8명
  · 문의전화 : 02-362-5559'),
	 (3,'헬렌관 식당','02-3277-3369','헬렌관 3층','헬렌관식당은 중앙도서관 바로 앞에 위치하고 있어 도서관, 법학관, 음악관, 조형예술관, 체육관, 본관 등에서 이용하기 편리합니다. 
메뉴는 한식 외 양식, 덮밥, 분식, take-out 등이며 양질의 다양한 메뉴를 제공함으로써 교내 구성원의 만족도를 높이기 위하여 최선을 다하겠습니다.

※ 운영코너: 옛향(한식), 푸드코트(가스야, 덮고볶고), 즉석코너','·이용시간
평일 중식: 11:00~14:00
＊방학기간에는 11:30~13:30'),
	 (4,'공대식당','02-3277-3383','신공학관 지하 2층','공대식당은 아산공학관 옆 신공학관 지하2층에 위치하고 있어 공대생들이 이용하기 편리하다. 학기 중에는 저녁식사 및 간식(라면)도 운영하고 있으며, 외부인들도 이용가능하다. 식권은 식권자판기를 이용해 누구나 편리하게 구입가능하다. 방학중에는 중식만 운영되고 있다.','·이용시간
1. 학기중(현재)
  · 식당
     점심 11:30-14:00 / 저녁 (운영없음)추후공지
     (금요일 석식 운영 없음)
  
2. 방학중
  · 식당
     점심 11:30-13:30
  · 카페
     미정'),
	 (5,'한우리집 식당','02-3277-5913','한우리집 지하 1층','맛있지만 건강한 원칙을 가지고 어머니의 정성이 담긴 행복한 식사시간을 365일동안 세끼 제공하고 있습니다. 어머니의 손맛으로 한식과 일품식을 제공하고 있으며 매주 다양한 식단을 선보이고 있습니다.(주말, 공휴일, 방학은 상황에 따라 변동 가능)
식당 내에는 CU편의점과 카페가 함께 위치해있습니다.','·이용시간
*학기 중 평일
1. 식당:
*조식 : 07:30~09:30
*중식: 11:30-14:00
*석식: 17:00-18:45

2. 편의점 : 24시간 무인 운영
3. 카페 : 07:30~19:00

*학기중 주말, 공휴일 및 방학 (변동될 수 있음)
1. 식당:
*조식 : 07:30~09:00
*중식: 11:30-13:30
*석식: 17:30-18:45

2. 편의점 : 24시간 무인 운영
3. 카페 : 07:30~14:00'),
	 (6,'E-House 식당(201동)','02-3277-5909','이하우스 201동 식당','''Health is everything''이란 컨셉의 E-House 기숙사 식당은 건강한 학식을 제공하고 있으며, 매일 배송되는 신선한 식재료와 다양한 레시피로 사생들의 건강한 식습관 및 건강 유지에 기여하도록 노력하고 있습니다.
조,중,석식을 자율식으로 제공하고, 평일점심에는 일품메뉴를 추가로 제공합니다.
또한 ''학기급식'' 신청 시 선택식 식수에 따라 할인율을 다르게 적용 받을 수 있습니다.
E-House 기숙사 식당은 사생들의 Meal Solution을 해결하기 위해 항상 노력하고 있습니다.','·이용시간
*학기 중 평일
-아침: 07:30~09:30
-점심: 11:30~14:00
-저녁: 17:00~18:45

*학기중 일요일/공휴일(변동될 수 있음)
-아침: 07:30~09:00
-점심: 11:30~13:30
-저녁: 17:30~18:45

*토요일 미운영');


-- 2. user
INSERT INTO team20.`user` (user_id,password,email) VALUES
	 (1,'aaaa','dfd@ggg.kr'),
	 (2,'aaadf','adf@df.kr');


-- 3. restaurant_images
INSERT INTO team20.restaurant_images (image_id,restaurant_id,image_url) VALUES
	 (1,1,'http://www.ewha.ac.kr/app/board/attach/image/328586-1679293142000.do'),
	 (2,1,'http://www.ewha.ac.kr/app/board/attach/image/328587-1679293142000.do'),
	 (3,1,'http://www.ewha.ac.kr/app/board/attach/image/328589-1679293143000.do'),
	 (4,1,'http://www.ewha.ac.kr/app/board/attach/image/328591-1679293172000.do'),
	 (5,2,'http://www.ewha.ac.kr/app/board/attach/image/1178-1576629826000.do'),
	 (6,2,'http://www.ewha.ac.kr/app/board/attach/image/1179-1576629827000.do'),
	 (7,2,'http://www.ewha.ac.kr/app/board/attach/image/1180-1576629828000.do'),
	 (8,2,'http://www.ewha.ac.kr/app/board/attach/image/1181-1576629828000.do'),
	 (9,2,'http://www.ewha.ac.kr/app/board/attach/image/1182-1576629829000.do'),
	 (10,2,'http://www.ewha.ac.kr/app/board/attach/image/1183-1576629829000.do');
INSERT INTO team20.restaurant_images (image_id,restaurant_id,image_url) VALUES
	 (11,3,'http://www.ewha.ac.kr/app/board/attach/image/76915-1577667369000.do'),
	 (12,3,'http://www.ewha.ac.kr/app/board/attach/image/76916-1577667370000.do'),
	 (13,3,'http://www.ewha.ac.kr/app/board/attach/image/76917-1577667371000.do'),
	 (14,3,'http://www.ewha.ac.kr/app/board/attach/image/76918-1577667373000.do'),
	 (15,3,'http://www.ewha.ac.kr/app/board/attach/image/76919-1577667374000.do'),
	 (16,4,'http://www.ewha.ac.kr/app/board/attach/image/1170-1576629666000.do'),
	 (17,4,'http://www.ewha.ac.kr/app/board/attach/image/1171-1576629667000.do'),
	 (18,4,'http://www.ewha.ac.kr/app/board/attach/image/1172-1576629668000.do'),
	 (19,4,'http://www.ewha.ac.kr/app/board/attach/image/1173-1576629668000.do'),
	 (20,4,'http://www.ewha.ac.kr/app/board/attach/image/1174-1576629669000.do');
INSERT INTO team20.restaurant_images (image_id,restaurant_id,image_url) VALUES
	 (21,5,'http://www.ewha.ac.kr/app/board/attach/image/1197-1576630000000.do'),
	 (22,5,'http://www.ewha.ac.kr/app/board/attach/image/1198-1576630001000.do'),
	 (23,5,'http://www.ewha.ac.kr/app/board/attach/image/1199-1576630001000.do'),
	 (24,5,'http://www.ewha.ac.kr/app/board/attach/image/1200-1576630002000.do'),
	 (25,6,'http://www.ewha.ac.kr/app/board/attach/image/1205-1576630245000.do'),
	 (26,6,'http://www.ewha.ac.kr/app/board/attach/image/1206-1576630245000.do');


-- 4. restaurant_timeinfo
INSERT INTO team20.restaurant_timeinfo (restaurant_timeInfo_id,restaurant_id,serving_time,start_time,end_time) VALUES
	 (1,1,'조식','08:00:00','11:00:00'),
	 (2,1,'중식1','11:00:00','14:00:00'),
	 (3,1,'중식2','13:00:00','18:30:00'),
	 (4,1,'석식','11:00:00','18:30:00'),
	 (5,2,'중식','11:00:00','14:00:00'),
	 (6,2,'석식','17:00:00','19:00:00'),
	 (7,3,'중식','11:00:00','14:00:00'),
	 (8,4,'중식','11:30:00','14:00:00'),
	 (9,5,'조식','07:30:00','09:30:00'),
	 (10,5,'중식','11:30:00','14:00:00');
INSERT INTO team20.restaurant_timeinfo (restaurant_timeInfo_id,restaurant_id,serving_time,start_time,end_time) VALUES
	 (11,5,'석식','17:00:00','18:45:00'),
	 (12,6,'조식','07:30:00','09:30:00'),
	 (13,6,'중식','11:30:00','14:00:00'),
	 (14,6,'석식','17:00:00','18:45:00');


-- 5. meal
INSERT INTO team20.meal (meal_id,restaurant_id,weekday,`date`,serving_time,price,meal_menu) VALUES
	 (1,1,'월','2023-11-06','조식',5000,'*천원의 아침밥*, 선착순 150명 ,흑미밥,계란만둣국,쏘시지야채볶음,깍두기,반찬2종,야채샐러드'),
	 (2,1,'월','2023-11-06','중식1',5000,'흑미밥,계란만둣국,배추김치,해물떡볶이,궁중식잡채,야채샐러드'),
	 (3,1,'월','2023-11-06','중식2',5000,'돈&치킨까스정식,메밀국수'),
	 (4,1,'월','2023-11-06','석식',5000,'명동칼국수,소고기비빔밥,제육비빔밥,산동짜장면,청경채우동'),
	 (5,1,'화','2023-11-07','조식',5000,'*천원의 아침밥*, 선착순 150명 ,흑미밥,콩나물두붓국,구운토마토,깍두기,반찬2종,야채샐러드'),
	 (6,1,'화','2023-11-07','중식1',5000,'흑미밥,콩나물두붓국,깍두기,순살닭간장볶음,배추&견과류겉절이,야채샐러드'),
	 (7,1,'화','2023-11-07','중식2',5000,'돈&치킨까스정식,메밀국수'),
	 (8,1,'화','2023-11-07','석식',5000,'명동칼국수,소고기비빔밥,제육비빔밥,산동짜장면,청경채우동'),
	 (9,1,'수','2023-11-08','조식',5000,'*천원의 아침밥*, 선착순 150명 ,볶음밥,미역국,모듬튀김,배추김치,반찬2종,야채샐러드'),
	 (10,1,'수','2023-11-08','중식1',5000,'볶음밥,소고기뭇국,배추김치,탕수육과일소스,상추&쌈장,야채샐러드');
INSERT INTO team20.meal (meal_id,restaurant_id,weekday,`date`,serving_time,price,meal_menu) VALUES
	 (11,1,'수','2023-11-08','중식2',5000,'돈&치킨까스정식,메밀국수'),
	 (12,1,'수','2023-11-08','석식',5000,'명동칼국수,소고기비빔밥,제육비빔밥,산동짜장면,청경채우동'),
	 (13,1,'목','2023-11-09','조식',5000,'*천원의 아침밥*, 선착순 150명 ,영양야채죽,프렌치토스트 1/2장,배추김치,반찬2종,야채샐러드,요구르트 1개'),
	 (14,1,'목','2023-11-09','중식1',5000,'곤드레밥,아욱된장국,배추김치,미트볼바베큐,무생채&쌀국수무침,야채샐러드'),
	 (15,1,'목','2023-11-09','중식2',5000,'돈&치킨까스정식,메밀국수'),
	 (16,1,'목','2023-11-09','석식',5000,'명동칼국수,소고기비빔밥,제육비빔밥,산동짜장면,청경채우동'),
	 (17,1,'금','2023-11-10','중식1',5000,'흰쌀밥,미역국,깍두기,제육김치,콩나물&야채무침,야채샐러드'),
	 (18,1,'금','2023-11-10','중식2',5000,'돈&치킨까스정식,메밀국수'),
	 (19,1,'금','2023-11-10','석식',5000,'명동칼국수,소고기비빔밥,제육비빔밥,산동짜장면,청경채우동'),
	 (20,2,'월','2023-11-06','중식',5000,'잡곡밥,부대찌개,치킨까스*머스터드s,뿌리채소고구마범벅,시금치나물,깍두기,숭늉');
INSERT INTO team20.meal (meal_id,restaurant_id,weekday,`date`,serving_time,price,meal_menu) VALUES
	 (21,2,'월','2023-11-06','석식',5000,'병아리콩카레라이스,근대된장국,클링클컷감자튀김,그린샐러드*석류D,단무지무침,배추김치,숭늉'),
	 (22,2,'화','2023-11-07','중식',5000,'잡곡밥,바지락미역국,제육두반장볶음,연두부새싹샐러드,가지호박볶음,배추김치,숭늉'),
	 (23,2,'화','2023-11-07','석식',5000,'표고버섯톳영양밥,곤약어묵국,미니돈까스강정,콩나물무침,고사리들깨나물,배추김치,숭늉'),
	 (24,2,'수','2023-11-08','중식',5000,'햄김치볶음밥,무청된장국,후르츠탕수육,마카로니콘샐러드,쫑상추무침,깍두기,숭늉'),
	 (25,2,'수','2023-11-08','석식',5000,'잡곡밥,김치수제비국,고등어구이*와사비장,미트볼칠리조림,청경채나물,깍두기,숭늉'),
	 (26,2,'목','2023-11-09','중식',5000,'잡곡밥,소고기장터국,파프리카잡채,맛살브로콜리볶음,미역레몬초무침,깍두기,숭늉'),
	 (27,2,'목','2023-11-09','석식',5000,'잡곡밥,황태칼국수,계란찜,옥수수맛탕,해초무순샐러드,배추김치,숭늉'),
	 (28,2,'금','2023-11-10','중식',5000,'잡곡밥,팽이버섯유부국,매콤오징어떡볶음,알감자조림,삼색숙주나물,깍두기,숭늉'),
	 (29,2,'금','2023-11-10','석식',5000,'잡곡밥,콩비지찌개,너비아니구이,열무나물무침,멸치볶음,깍두기,숭늉'),
	 (30,2,'토','2023-11-11','중식',5000,'잡곡밥,배추된장국,생선까스*타르타르s,볼어묵피망볶음,검은깨묵오이무침,깍두기,숭늉');
INSERT INTO team20.meal (meal_id,restaurant_id,weekday,`date`,serving_time,price,meal_menu) VALUES
	 (31,3,'월','2023-11-06','중식',5000,'<자율한식>,돼지콩나물두루치기,계란실파국,쌀밥,햄감자채볶음,미역줄기볶음,깍두기,<추가메뉴>,소떡소떡'),
	 (32,3,'화','2023-11-07','중식',5000,'<자율한식>,뚝배기닭칼국수,쌀밥,만두깡풍강정,볼어묵볶음,도시락김,배추김치,<추가메뉴>,소떡소떡'),
	 (33,3,'수','2023-11-08','중식',5000,'<일품코너A>,차슈라멘,<일품코너B>,치킨마요덮밥&우동장국,<셀프바>,야채춘권,배추김치,<추가메뉴>,소떡소떡'),
	 (34,3,'목','2023-11-09','중식',5000,'<자율한식>,김치볶음밥,&계란후라이,맑은콩나물국,청양풍동그랑땡,들기름막국수,양배추마늘소스샐러드,배추김치,<추가메뉴>,소떡소떡'),
	 (35,3,'금','2023-11-10','중식',5000,'<일품코너A>,카레라이스,&돈까스토핑,<일품코너B>,따끈한순두부짬뽕,&도시락김,<셀프바>,빼빼로츄러스,배추김치'),
	 (36,4,'월','2023-11-06','중식',5000,'매콤엽기떡볶이,셀프후리가케주먹밥,오뎅탕,파송송계란찜,반달단무지,마카로니콘샐러드,배추김치,<후식>,쿨피스,파인애플맛'),
	 (37,4,'화','2023-11-07','중식',5000,'뚝)참치김치찌개,쌀밥,감자햄볶음,콩나물무침,미니도시락김,깍두기,<후식>,누룽지숭늉'),
	 (38,4,'수','2023-11-08','중식',5000,'날치알김치볶음밥,미니잔치국수,뿌링클치킨,꼬들단무지,그린샐러드*자두드레싱,깍두기,<후식>요구르트'),
	 (39,4,'목','2023-11-09','중식',5000,'숯불매콤제육볶음,쌀밥,유부된장국,브로콜리버섯볶음,매콤새콤쫄면무침,건파래볶음,배추김치,<후식>누룽지숭늉'),
	 (40,4,'금','2023-11-10','중식',5000,'꼬치어묵우동,미니밥,탕수육강정,매콤단무지무침,그린샐러드*애플드레싱,배추김치,<후식>코조젤리스틱');
INSERT INTO team20.meal (meal_id,restaurant_id,weekday,`date`,serving_time,price,meal_menu) VALUES
	 (41,5,'월','2023-11-06','조식',5000,'쌀밥,짬뽕국,닭데리소스조림,에호박새우젓볶음,김구이,배추김치,샐러드'),
	 (42,5,'월','2023-11-06','중식',5000,'(정품),잡곡밥,설렁탕/소면사리,메밀전,메추리알조림,깻잎지무침,깍두기,(일품),숯불고기야채비빔밥,/김가루,유부장국,떡잡채,해초샐러드,배추김치'),
	 (43,5,'월','2023-11-06','석식',5000,'돈코츠라멘,후리가께김가루밥,새우까스/소스,단무지무침,배추김치'),
	 (44,5,'화','2023-11-07','조식',5000,'후렌치토스트,모닝빵샌드위치,포크비엔나,콘치즈구이,양상추샐러드,모듬수제피클,오렌지쥬스'),
	 (45,5,'화','2023-11-07','중식',5000,'(정품),잡곡밥,맑은순두부국,매콤닭갈비,만두튀김,얼갈이나물,깍두기,(일품),파인애플수제함박스텍,브로콜리스프,삼색볶음밥,감자튀김/케찹,양상추샐러드,배추김치'),
	 (46,5,'화','2023-11-07','석식',5000,'잡곡밥,얼큰콩나물국,탕수육,마라상궈,치커리유자청무침,배추김치'),
	 (47,5,'수','2023-11-08','조식',5000,'쌀밥,북어채국,떡스테이크조림,두부구이/양념장,오이양파무침,배추김치,샐러드'),
	 (48,5,'수','2023-11-08','중식',5000,'(정품),잡곡밥,미역국,신김치제육볶음,야채계란찜,상추겉절이,배추김치,(일품),양지쌀국수,후리가께김가루밥,수제새우튀김(2P),야채샐러드,배추김치'),
	 (49,5,'수','2023-11-08','석식',5000,'잡곡밥,차돌고추장찌개,훈제오리/쌈무,감자어묵조림,청경채나물,배추김치'),
	 (50,5,'목','2023-11-09','조식',5000,'쌀밥,김치콩나물국,소불고기,청포묵김가루무침,브로콜리/초장,배추김치,샐러드');
INSERT INTO team20.meal (meal_id,restaurant_id,weekday,`date`,serving_time,price,meal_menu) VALUES
	 (51,5,'목','2023-11-09','중식',5000,'(정품),잡곡밥,사골우거지국,모듬장조림,동그랑땡/케찹,부추무침,깍두기,(일품),베이컨김치볶음밥,계란후라이/김가루,유부장국,돈까스/소스,양상추샐러드,깍두기'),
	 (52,5,'목','2023-11-09','석식',5000,'쌀밥,수제비만두국,너비아니조림,야채전,배추겉절이,요구르트'),
	 (53,5,'금','2023-11-10','조식',5000,'쌀밥,된장국,수제미트볼조림,야채계란볶음,김자반,배추김치,샐러드'),
	 (54,5,'금','2023-11-10','중식',5000,'(정품),잡곡밥,두부김치찌개,가라야께/청양마요소스,알감자조림,콩나물무침,깍두기,(일품),한방보쌈,메밀비빔국수,우동국물,모듬주먹밥,배추겉절이'),
	 (55,5,'금','2023-11-10','석식',5000,'잡곡밥,차돌순두부짜개/쫄면사리,마늘닭간장구이,김말이튀김,오이부추무침,배추김치'),
	 (56,5,'토','2023-11-11','조식',5000,'쌀밥,짜그리찌개,치킨까스/소스,비엔나콩조림,시금치나물,배추김치,샐러드'),
	 (57,5,'토','2023-11-11','중식',5000,'차돌떡볶이,모듬튀김,김주먹밥,어묵탕,샐러드,단무지'),
	 (58,5,'토','2023-11-11','석식',5000,'잡곡밥,얼큰소고기무국,돈육계란장조림,감자채볶음,모듬겉절이,배추김치'),
	 (59,6,'월','2023-11-06','조식',5000,'새우계란죽,간장 미니깐풍기,메추리알 장조림,무나물 볶음,귤,배추김치'),
	 (60,6,'월','2023-11-06','중식',5000,'업진살 쌀국수,야채춘권/칠리소스,청피망 버섯볶음,양배추 파인애플 무침,셀프 김가루 주먹밥,배추김치,<<샌드위치 특별식>>,스리라차 칠리마요 치킨텐더버거,맥앤치즈/크래커,양배추 샐러드,플레인 요거트,사이다,크림스프');
INSERT INTO team20.meal (meal_id,restaurant_id,weekday,`date`,serving_time,price,meal_menu) VALUES
	 (61,6,'월','2023-11-06','석식',5000,'돼지고기 김치찌개,치킨너겟/머스타드소스,콩나물 무침,도토리묵 김가루무침,쌀밥,배추김치'),
	 (62,6,'화','2023-11-07','조식',5000,'소고기 무국,미니떡갈비/데리야끼소스,고사리볶음,애호박 양파볶음,쌀밥,깍두기'),
	 (63,6,'화','2023-11-07','중식',5000,'짜장 닭조림 덮밥,동그랑땡/칠리소스,유채나물 유자무침,연두부/양념간장,파송송 계란국,단무지 부추무침,<<샌드위치 특별식>>,햄치즈 감자샐러드 치아바타 ,고구마 고로케/칠리소스,양상추 샐러드,콘씨리얼,흰우유,콘스프'),
	 (64,6,'화','2023-11-07','석식',5000,'얼큰 닭계장,메밀전병/양념간장,감자채 햄볶음,오이부추무침,흑미밥,깍두기'),
	 (65,6,'수','2023-11-08','조식',5000,'감자 돼지고기 찌개,닭다리살 치킨까스/칠리소스,배추된장무침,양배추 새우볶음,쌀밥,배추김치'),
	 (66,6,'수','2023-11-08','중식',5000,'부산식 온밀면,군만두 맛탕,매콤 오징어볶음,오크라 된장무침,쌀밥,배추김치,<<샌드위치 특별식>>,떡갈비 봄동 버거,감자튀김/케찹,양배추 샐러드,코울슬로,오렌지주스,양송이스프'),
	 (67,6,'수','2023-11-08','석식',5000,'장조림 버터 비빔밥,닭강정 가라아게,야채 스크램블 에그,맛살오이초무침,어묵무국,배추김치'),
	 (68,6,'목','2023-11-09','조식',5000,'돼지불고기 김치죽,새우튀김/칠리소스,청포묵 야채무침,고추장 멸치볶음,플레인 요플레,동치미'),
	 (69,6,'목','2023-11-09','중식',5000,'매콤 제육덮밥,감자전/양념간장,볼어묵고추장볶음,시금치 무침,콩나물국,배추김치,<<샌드위치 특별식>>,콘짜렐라 소시지 치아바타,감자고로케/케찹,양상추 샐러드,그래놀라,흰우유,크림스프'),
	 (70,6,'목','2023-11-09','석식',5000,'돼지고기 순두부찌개,너비아니구이/데리야끼소스,숙주무침,미역줄기볶음,흑미밥,깍두기');
INSERT INTO team20.meal (meal_id,restaurant_id,weekday,`date`,serving_time,price,meal_menu) VALUES
	 (71,6,'금','2023-11-10','조식',5000,'우유달걀카레,미니돈까스/칠리소스,콜리플라워 두부무침,마카로니 마요무침,유부 된장국,배추김치'),
	 (72,6,'금','2023-11-10','중식',5000,'야채듬뿍 비빔당면,콩나물 돼지불고기,순대/양념소금,어묵탕/물떡,후리가케 주먹밥,단무지,<<샌드위치 특별식>>,홍루이젠 샌드위치,웨지감자(치즈맛),양배추 샐러드,초코볼,흰우유,양송이스프'),
	 (73,6,'금','2023-11-10','석식',5000,'나가사끼 짬뽕탕,꿔바로우/청양유자마요소스,고구마 조림,미역초무침,쌀밥,배추김치'),
	 (74,6,'일','2023-11-12','조식',5000,'우렁쌈밥/상추,야채계란찜,매콤 콩나물 무침,들깨버섯볶음,맑은 미역국,배추김치'),
	 (75,6,'일','2023-11-12','중식',5000,'사골 옹심이 만두국,소시지 야채볶음,오징어초무침,양념깻잎무침,흑미밥,배추김치'),
	 (76,6,'일','2023-11-12','석식',5000,'얼큰 육개장,참치두부조림,감자곤약조림,브로콜리 버섯볶음,흑미밥,깍두기');


-- 6. menu
INSERT INTO team20.menu (menu_id,meal_id,restaurant_id,menu_name) VALUES
	 (1,1,1,'*천원의 아침밥*'),
	 (2,1,1,' 선착순 150명 '),
	 (3,1,1,'흑미밥'),
	 (4,1,1,'계란만둣국'),
	 (5,1,1,'쏘시지야채볶음'),
	 (6,1,1,'깍두기'),
	 (7,1,1,'반찬2종'),
	 (8,1,1,'야채샐러드'),
	 (9,2,1,'흑미밥'),
	 (10,2,1,'계란만둣국');
INSERT INTO team20.menu (menu_id,meal_id,restaurant_id,menu_name) VALUES
	 (11,2,1,'배추김치'),
	 (12,2,1,'해물떡볶이'),
	 (13,2,1,'궁중식잡채'),
	 (14,2,1,'야채샐러드'),
	 (15,3,1,'돈&치킨까스정식'),
	 (16,3,1,'메밀국수'),
	 (17,4,1,'명동칼국수'),
	 (18,4,1,'소고기비빔밥'),
	 (19,4,1,'제육비빔밥'),
	 (20,4,1,'산동짜장면');
INSERT INTO team20.menu (menu_id,meal_id,restaurant_id,menu_name) VALUES
	 (21,4,1,'청경채우동'),
	 (22,5,1,'*천원의 아침밥*'),
	 (23,5,1,' 선착순 150명 '),
	 (24,5,1,'흑미밥'),
	 (25,5,1,'콩나물두붓국'),
	 (26,5,1,'구운토마토'),
	 (27,5,1,'깍두기'),
	 (28,5,1,'반찬2종'),
	 (29,5,1,'야채샐러드'),
	 (30,6,1,'흑미밥');
INSERT INTO team20.menu (menu_id,meal_id,restaurant_id,menu_name) VALUES
	 (31,6,1,'콩나물두붓국'),
	 (32,6,1,'깍두기'),
	 (33,6,1,'순살닭간장볶음'),
	 (34,6,1,'배추&견과류겉절이'),
	 (35,6,1,'야채샐러드'),
	 (36,7,1,'돈&치킨까스정식'),
	 (37,7,1,'메밀국수'),
	 (38,8,1,'명동칼국수'),
	 (39,8,1,'소고기비빔밥'),
	 (40,8,1,'제육비빔밥');
INSERT INTO team20.menu (menu_id,meal_id,restaurant_id,menu_name) VALUES
	 (41,8,1,'산동짜장면'),
	 (42,8,1,'청경채우동'),
	 (43,9,1,'*천원의 아침밥*'),
	 (44,9,1,' 선착순 150명 '),
	 (45,9,1,'볶음밥'),
	 (46,9,1,'미역국'),
	 (47,9,1,'모듬튀김'),
	 (48,9,1,'배추김치'),
	 (49,9,1,'반찬2종'),
	 (50,9,1,'야채샐러드');
INSERT INTO team20.menu (menu_id,meal_id,restaurant_id,menu_name) VALUES
	 (51,10,1,'볶음밥'),
	 (52,10,1,'소고기뭇국'),
	 (53,10,1,'배추김치'),
	 (54,10,1,'탕수육과일소스'),
	 (55,10,1,'상추&쌈장'),
	 (56,10,1,'야채샐러드'),
	 (57,11,1,'돈&치킨까스정식'),
	 (58,11,1,'메밀국수'),
	 (59,12,1,'명동칼국수'),
	 (60,12,1,'소고기비빔밥');
INSERT INTO team20.menu (menu_id,meal_id,restaurant_id,menu_name) VALUES
	 (61,12,1,'제육비빔밥'),
	 (62,12,1,'산동짜장면'),
	 (63,12,1,'청경채우동'),
	 (64,13,1,'*천원의 아침밥*'),
	 (65,13,1,' 선착순 150명 '),
	 (66,13,1,'영양야채죽'),
	 (67,13,1,'프렌치토스트 1/2장'),
	 (68,13,1,'배추김치'),
	 (69,13,1,'반찬2종'),
	 (70,13,1,'야채샐러드');
INSERT INTO team20.menu (menu_id,meal_id,restaurant_id,menu_name) VALUES
	 (71,13,1,'요구르트 1개'),
	 (72,14,1,'곤드레밥'),
	 (73,14,1,'아욱된장국'),
	 (74,14,1,'배추김치'),
	 (75,14,1,'미트볼바베큐'),
	 (76,14,1,'무생채&쌀국수무침'),
	 (77,14,1,'야채샐러드'),
	 (78,15,1,'돈&치킨까스정식'),
	 (79,15,1,'메밀국수'),
	 (80,16,1,'명동칼국수');
INSERT INTO team20.menu (menu_id,meal_id,restaurant_id,menu_name) VALUES
	 (81,16,1,'소고기비빔밥'),
	 (82,16,1,'제육비빔밥'),
	 (83,16,1,'산동짜장면'),
	 (84,16,1,'청경채우동'),
	 (85,17,1,'흰쌀밥'),
	 (86,17,1,'미역국'),
	 (87,17,1,'깍두기'),
	 (88,17,1,'제육김치'),
	 (89,17,1,'콩나물&야채무침'),
	 (90,17,1,'야채샐러드');
INSERT INTO team20.menu (menu_id,meal_id,restaurant_id,menu_name) VALUES
	 (91,18,1,'돈&치킨까스정식'),
	 (92,18,1,'메밀국수'),
	 (93,19,1,'명동칼국수'),
	 (94,19,1,'소고기비빔밥'),
	 (95,19,1,'제육비빔밥'),
	 (96,19,1,'산동짜장면'),
	 (97,19,1,'청경채우동'),
	 (98,20,2,'잡곡밥'),
	 (99,20,2,'부대찌개'),
	 (100,20,2,'치킨까스*머스터드s');
INSERT INTO team20.menu (menu_id,meal_id,restaurant_id,menu_name) VALUES
	 (101,20,2,'뿌리채소고구마범벅'),
	 (102,20,2,'시금치나물'),
	 (103,20,2,'깍두기'),
	 (104,20,2,'숭늉'),
	 (105,21,2,'병아리콩카레라이스'),
	 (106,21,2,'근대된장국'),
	 (107,21,2,'클링클컷감자튀김'),
	 (108,21,2,'그린샐러드*석류D'),
	 (109,21,2,'단무지무침'),
	 (110,21,2,'배추김치');
INSERT INTO team20.menu (menu_id,meal_id,restaurant_id,menu_name) VALUES
	 (111,21,2,'숭늉'),
	 (112,22,2,'잡곡밥'),
	 (113,22,2,'바지락미역국'),
	 (114,22,2,'제육두반장볶음'),
	 (115,22,2,'연두부새싹샐러드'),
	 (116,22,2,'가지호박볶음'),
	 (117,22,2,'배추김치'),
	 (118,22,2,'숭늉'),
	 (119,23,2,'표고버섯톳영양밥'),
	 (120,23,2,'곤약어묵국');
INSERT INTO team20.menu (menu_id,meal_id,restaurant_id,menu_name) VALUES
	 (121,23,2,'미니돈까스강정'),
	 (122,23,2,'콩나물무침'),
	 (123,23,2,'고사리들깨나물'),
	 (124,23,2,'배추김치'),
	 (125,23,2,'숭늉'),
	 (126,24,2,'햄김치볶음밥'),
	 (127,24,2,'무청된장국'),
	 (128,24,2,'후르츠탕수육'),
	 (129,24,2,'마카로니콘샐러드'),
	 (130,24,2,'쫑상추무침');
INSERT INTO team20.menu (menu_id,meal_id,restaurant_id,menu_name) VALUES
	 (131,24,2,'깍두기'),
	 (132,24,2,'숭늉'),
	 (133,25,2,'잡곡밥'),
	 (134,25,2,'김치수제비국'),
	 (135,25,2,'고등어구이*와사비장'),
	 (136,25,2,'미트볼칠리조림'),
	 (137,25,2,'청경채나물'),
	 (138,25,2,'깍두기'),
	 (139,25,2,'숭늉'),
	 (140,26,2,'잡곡밥');
INSERT INTO team20.menu (menu_id,meal_id,restaurant_id,menu_name) VALUES
	 (141,26,2,'소고기장터국'),
	 (142,26,2,'파프리카잡채'),
	 (143,26,2,'맛살브로콜리볶음'),
	 (144,26,2,'미역레몬초무침'),
	 (145,26,2,'깍두기'),
	 (146,26,2,'숭늉'),
	 (147,27,2,'잡곡밥'),
	 (148,27,2,'황태칼국수'),
	 (149,27,2,'계란찜'),
	 (150,27,2,'옥수수맛탕');
INSERT INTO team20.menu (menu_id,meal_id,restaurant_id,menu_name) VALUES
	 (151,27,2,'해초무순샐러드'),
	 (152,27,2,'배추김치'),
	 (153,27,2,'숭늉'),
	 (154,28,2,'잡곡밥'),
	 (155,28,2,'팽이버섯유부국'),
	 (156,28,2,'매콤오징어떡볶음'),
	 (157,28,2,'알감자조림'),
	 (158,28,2,'삼색숙주나물'),
	 (159,28,2,'깍두기'),
	 (160,28,2,'숭늉');
INSERT INTO team20.menu (menu_id,meal_id,restaurant_id,menu_name) VALUES
	 (161,29,2,'잡곡밥'),
	 (162,29,2,'콩비지찌개'),
	 (163,29,2,'너비아니구이'),
	 (164,29,2,'열무나물무침'),
	 (165,29,2,'멸치볶음'),
	 (166,29,2,'깍두기'),
	 (167,29,2,'숭늉'),
	 (168,30,2,'잡곡밥'),
	 (169,30,2,'배추된장국'),
	 (170,30,2,'생선까스*타르타르s');
INSERT INTO team20.menu (menu_id,meal_id,restaurant_id,menu_name) VALUES
	 (171,30,2,'볼어묵피망볶음'),
	 (172,30,2,'검은깨묵오이무침'),
	 (173,30,2,'깍두기'),
	 (174,30,2,'숭늉'),
	 (175,31,3,'<자율한식>'),
	 (176,31,3,'돼지콩나물두루치기'),
	 (177,31,3,'계란실파국'),
	 (178,31,3,'쌀밥'),
	 (179,31,3,'햄감자채볶음'),
	 (180,31,3,'미역줄기볶음');
INSERT INTO team20.menu (menu_id,meal_id,restaurant_id,menu_name) VALUES
	 (181,31,3,'깍두기'),
	 (182,31,3,'<추가메뉴>'),
	 (183,31,3,'소떡소떡'),
	 (184,32,3,'<자율한식>'),
	 (185,32,3,'뚝배기닭칼국수'),
	 (186,32,3,'쌀밥'),
	 (187,32,3,'만두깡풍강정'),
	 (188,32,3,'볼어묵볶음'),
	 (189,32,3,'도시락김'),
	 (190,32,3,'배추김치');
INSERT INTO team20.menu (menu_id,meal_id,restaurant_id,menu_name) VALUES
	 (191,32,3,'<추가메뉴>'),
	 (192,32,3,'소떡소떡'),
	 (193,33,3,'<일품코너A>'),
	 (194,33,3,'차슈라멘'),
	 (195,33,3,'<일품코너B>'),
	 (196,33,3,'치킨마요덮밥&우동장국'),
	 (197,33,3,'<셀프바>'),
	 (198,33,3,'야채춘권'),
	 (199,33,3,'배추김치'),
	 (200,33,3,'<추가메뉴>');
INSERT INTO team20.menu (menu_id,meal_id,restaurant_id,menu_name) VALUES
	 (201,33,3,'소떡소떡'),
	 (202,34,3,'<자율한식>'),
	 (203,34,3,'김치볶음밥'),
	 (204,34,3,'&계란후라이'),
	 (205,34,3,'맑은콩나물국'),
	 (206,34,3,'청양풍동그랑땡'),
	 (207,34,3,'들기름막국수'),
	 (208,34,3,'양배추마늘소스샐러드'),
	 (209,34,3,'배추김치'),
	 (210,34,3,'<추가메뉴>');
INSERT INTO team20.menu (menu_id,meal_id,restaurant_id,menu_name) VALUES
	 (211,34,3,'소떡소떡'),
	 (212,35,3,'<일품코너A>'),
	 (213,35,3,'카레라이스'),
	 (214,35,3,'&돈까스토핑'),
	 (215,35,3,'<일품코너B>'),
	 (216,35,3,'따끈한순두부짬뽕'),
	 (217,35,3,'&도시락김'),
	 (218,35,3,'<셀프바>'),
	 (219,35,3,'빼빼로츄러스'),
	 (220,35,3,'배추김치');
INSERT INTO team20.menu (menu_id,meal_id,restaurant_id,menu_name) VALUES
	 (221,36,4,'매콤엽기떡볶이'),
	 (222,36,4,'셀프후리가케주먹밥'),
	 (223,36,4,'오뎅탕'),
	 (224,36,4,'파송송계란찜'),
	 (225,36,4,'반달단무지'),
	 (226,36,4,'마카로니콘샐러드'),
	 (227,36,4,'배추김치'),
	 (228,36,4,'<후식>'),
	 (229,36,4,'쿨피스'),
	 (230,36,4,'파인애플맛');
INSERT INTO team20.menu (menu_id,meal_id,restaurant_id,menu_name) VALUES
	 (231,37,4,'뚝)참치김치찌개'),
	 (232,37,4,'쌀밥'),
	 (233,37,4,'감자햄볶음'),
	 (234,37,4,'콩나물무침'),
	 (235,37,4,'미니도시락김'),
	 (236,37,4,'깍두기'),
	 (237,37,4,'<후식>'),
	 (238,37,4,'누룽지숭늉'),
	 (239,38,4,'날치알김치볶음밥'),
	 (240,38,4,'미니잔치국수');
INSERT INTO team20.menu (menu_id,meal_id,restaurant_id,menu_name) VALUES
	 (241,38,4,'뿌링클치킨'),
	 (242,38,4,'꼬들단무지'),
	 (243,38,4,'그린샐러드*자두드레싱'),
	 (244,38,4,'깍두기'),
	 (245,38,4,'<후식>요구르트'),
	 (246,39,4,'숯불매콤제육볶음'),
	 (247,39,4,'쌀밥'),
	 (248,39,4,'유부된장국'),
	 (249,39,4,'브로콜리버섯볶음'),
	 (250,39,4,'매콤새콤쫄면무침');
INSERT INTO team20.menu (menu_id,meal_id,restaurant_id,menu_name) VALUES
	 (251,39,4,'건파래볶음'),
	 (252,39,4,'배추김치'),
	 (253,39,4,'<후식>누룽지숭늉'),
	 (254,40,4,'꼬치어묵우동'),
	 (255,40,4,'미니밥'),
	 (256,40,4,'탕수육강정'),
	 (257,40,4,'매콤단무지무침'),
	 (258,40,4,'그린샐러드*애플드레싱'),
	 (259,40,4,'배추김치'),
	 (260,40,4,'<후식>코조젤리스틱');
INSERT INTO team20.menu (menu_id,meal_id,restaurant_id,menu_name) VALUES
	 (261,41,5,'쌀밥'),
	 (262,41,5,'짬뽕국'),
	 (263,41,5,'닭데리소스조림'),
	 (264,41,5,'에호박새우젓볶음'),
	 (265,41,5,'김구이'),
	 (266,41,5,'배추김치'),
	 (267,41,5,'샐러드'),
	 (268,42,5,'(정품)'),
	 (269,42,5,'잡곡밥'),
	 (270,42,5,'설렁탕/소면사리');
INSERT INTO team20.menu (menu_id,meal_id,restaurant_id,menu_name) VALUES
	 (271,42,5,'메밀전'),
	 (272,42,5,'메추리알조림'),
	 (273,42,5,'깻잎지무침'),
	 (274,42,5,'깍두기'),
	 (275,42,5,'(일품)'),
	 (276,42,5,'숯불고기야채비빔밥'),
	 (277,42,5,'/김가루'),
	 (278,42,5,'유부장국'),
	 (279,42,5,'떡잡채'),
	 (280,42,5,'해초샐러드');
INSERT INTO team20.menu (menu_id,meal_id,restaurant_id,menu_name) VALUES
	 (281,42,5,'배추김치'),
	 (282,43,5,'돈코츠라멘'),
	 (283,43,5,'후리가께김가루밥'),
	 (284,43,5,'새우까스/소스'),
	 (285,43,5,'단무지무침'),
	 (286,43,5,'배추김치'),
	 (287,44,5,'후렌치토스트'),
	 (288,44,5,'모닝빵샌드위치'),
	 (289,44,5,'포크비엔나'),
	 (290,44,5,'콘치즈구이');
INSERT INTO team20.menu (menu_id,meal_id,restaurant_id,menu_name) VALUES
	 (291,44,5,'양상추샐러드'),
	 (292,44,5,'모듬수제피클'),
	 (293,44,5,'오렌지쥬스'),
	 (294,45,5,'(정품)'),
	 (295,45,5,'잡곡밥'),
	 (296,45,5,'맑은순두부국'),
	 (297,45,5,'매콤닭갈비'),
	 (298,45,5,'만두튀김'),
	 (299,45,5,'얼갈이나물'),
	 (300,45,5,'깍두기');
INSERT INTO team20.menu (menu_id,meal_id,restaurant_id,menu_name) VALUES
	 (301,45,5,'(일품)'),
	 (302,45,5,'파인애플수제함박스텍'),
	 (303,45,5,'브로콜리스프'),
	 (304,45,5,'삼색볶음밥'),
	 (305,45,5,'감자튀김/케찹'),
	 (306,45,5,'양상추샐러드'),
	 (307,45,5,'배추김치'),
	 (308,46,5,'잡곡밥'),
	 (309,46,5,'얼큰콩나물국'),
	 (310,46,5,'탕수육');
INSERT INTO team20.menu (menu_id,meal_id,restaurant_id,menu_name) VALUES
	 (311,46,5,'마라상궈'),
	 (312,46,5,'치커리유자청무침'),
	 (313,46,5,'배추김치'),
	 (314,47,5,'쌀밥'),
	 (315,47,5,'북어채국'),
	 (316,47,5,'떡스테이크조림'),
	 (317,47,5,'두부구이/양념장'),
	 (318,47,5,'오이양파무침'),
	 (319,47,5,'배추김치'),
	 (320,47,5,'샐러드');
INSERT INTO team20.menu (menu_id,meal_id,restaurant_id,menu_name) VALUES
	 (321,48,5,'(정품)'),
	 (322,48,5,'잡곡밥'),
	 (323,48,5,'미역국'),
	 (324,48,5,'신김치제육볶음'),
	 (325,48,5,'야채계란찜'),
	 (326,48,5,'상추겉절이'),
	 (327,48,5,'배추김치'),
	 (328,48,5,'(일품)'),
	 (329,48,5,'양지쌀국수'),
	 (330,48,5,'후리가께김가루밥');
INSERT INTO team20.menu (menu_id,meal_id,restaurant_id,menu_name) VALUES
	 (331,48,5,'수제새우튀김(2P)'),
	 (332,48,5,'야채샐러드'),
	 (333,48,5,'배추김치'),
	 (334,49,5,'잡곡밥'),
	 (335,49,5,'차돌고추장찌개'),
	 (336,49,5,'훈제오리/쌈무'),
	 (337,49,5,'감자어묵조림'),
	 (338,49,5,'청경채나물'),
	 (339,49,5,'배추김치'),
	 (340,50,5,'쌀밥');
INSERT INTO team20.menu (menu_id,meal_id,restaurant_id,menu_name) VALUES
	 (341,50,5,'김치콩나물국'),
	 (342,50,5,'소불고기'),
	 (343,50,5,'청포묵김가루무침'),
	 (344,50,5,'브로콜리/초장'),
	 (345,50,5,'배추김치'),
	 (346,50,5,'샐러드'),
	 (347,51,5,'(정품)'),
	 (348,51,5,'잡곡밥'),
	 (349,51,5,'사골우거지국'),
	 (350,51,5,'모듬장조림');
INSERT INTO team20.menu (menu_id,meal_id,restaurant_id,menu_name) VALUES
	 (351,51,5,'동그랑땡/케찹'),
	 (352,51,5,'부추무침'),
	 (353,51,5,'깍두기'),
	 (354,51,5,'(일품)'),
	 (355,51,5,'베이컨김치볶음밥'),
	 (356,51,5,'계란후라이/김가루'),
	 (357,51,5,'유부장국'),
	 (358,51,5,'돈까스/소스'),
	 (359,51,5,'양상추샐러드'),
	 (360,51,5,'깍두기');
INSERT INTO team20.menu (menu_id,meal_id,restaurant_id,menu_name) VALUES
	 (361,52,5,'쌀밥'),
	 (362,52,5,'수제비만두국'),
	 (363,52,5,'너비아니조림'),
	 (364,52,5,'야채전'),
	 (365,52,5,'배추겉절이'),
	 (366,52,5,'요구르트'),
	 (367,53,5,'쌀밥'),
	 (368,53,5,'된장국'),
	 (369,53,5,'수제미트볼조림'),
	 (370,53,5,'야채계란볶음');
INSERT INTO team20.menu (menu_id,meal_id,restaurant_id,menu_name) VALUES
	 (371,53,5,'김자반'),
	 (372,53,5,'배추김치'),
	 (373,53,5,'샐러드'),
	 (374,54,5,'(정품)'),
	 (375,54,5,'잡곡밥'),
	 (376,54,5,'두부김치찌개'),
	 (377,54,5,'가라야께/청양마요소스'),
	 (378,54,5,'알감자조림'),
	 (379,54,5,'콩나물무침'),
	 (380,54,5,'깍두기');
INSERT INTO team20.menu (menu_id,meal_id,restaurant_id,menu_name) VALUES
	 (381,54,5,'(일품)'),
	 (382,54,5,'한방보쌈'),
	 (383,54,5,'메밀비빔국수'),
	 (384,54,5,'우동국물'),
	 (385,54,5,'모듬주먹밥'),
	 (386,54,5,'배추겉절이'),
	 (387,55,5,'잡곡밥'),
	 (388,55,5,'차돌순두부짜개/쫄면사리'),
	 (389,55,5,'마늘닭간장구이'),
	 (390,55,5,'김말이튀김');
INSERT INTO team20.menu (menu_id,meal_id,restaurant_id,menu_name) VALUES
	 (391,55,5,'오이부추무침'),
	 (392,55,5,'배추김치'),
	 (393,56,5,'쌀밥'),
	 (394,56,5,'짜그리찌개'),
	 (395,56,5,'치킨까스/소스'),
	 (396,56,5,'비엔나콩조림'),
	 (397,56,5,'시금치나물'),
	 (398,56,5,'배추김치'),
	 (399,56,5,'샐러드'),
	 (400,57,5,'차돌떡볶이');
INSERT INTO team20.menu (menu_id,meal_id,restaurant_id,menu_name) VALUES
	 (401,57,5,'모듬튀김'),
	 (402,57,5,'김주먹밥'),
	 (403,57,5,'어묵탕'),
	 (404,57,5,'샐러드'),
	 (405,57,5,'단무지'),
	 (406,58,5,'잡곡밥'),
	 (407,58,5,'얼큰소고기무국'),
	 (408,58,5,'돈육계란장조림'),
	 (409,58,5,'감자채볶음'),
	 (410,58,5,'모듬겉절이');
INSERT INTO team20.menu (menu_id,meal_id,restaurant_id,menu_name) VALUES
	 (411,58,5,'배추김치'),
	 (412,59,6,'새우계란죽'),
	 (413,59,6,'간장 미니깐풍기'),
	 (414,59,6,'메추리알 장조림'),
	 (415,59,6,'무나물 볶음'),
	 (416,59,6,'귤'),
	 (417,59,6,'배추김치'),
	 (418,60,6,'업진살 쌀국수'),
	 (419,60,6,'야채춘권/칠리소스'),
	 (420,60,6,'청피망 버섯볶음');
INSERT INTO team20.menu (menu_id,meal_id,restaurant_id,menu_name) VALUES
	 (421,60,6,'양배추 파인애플 무침'),
	 (422,60,6,'셀프 김가루 주먹밥'),
	 (423,60,6,'배추김치'),
	 (424,60,6,'<<샌드위치 특별식>>'),
	 (425,60,6,'스리라차 칠리마요 치킨텐더버거'),
	 (426,60,6,'맥앤치즈/크래커'),
	 (427,60,6,'양배추 샐러드'),
	 (428,60,6,'플레인 요거트'),
	 (429,60,6,'사이다'),
	 (430,60,6,'크림스프');
INSERT INTO team20.menu (menu_id,meal_id,restaurant_id,menu_name) VALUES
	 (431,61,6,'돼지고기 김치찌개'),
	 (432,61,6,'치킨너겟/머스타드소스'),
	 (433,61,6,'콩나물 무침'),
	 (434,61,6,'도토리묵 김가루무침'),
	 (435,61,6,'쌀밥'),
	 (436,61,6,'배추김치'),
	 (437,62,6,'소고기 무국'),
	 (438,62,6,'미니떡갈비/데리야끼소스'),
	 (439,62,6,'고사리볶음'),
	 (440,62,6,'애호박 양파볶음');
INSERT INTO team20.menu (menu_id,meal_id,restaurant_id,menu_name) VALUES
	 (441,62,6,'쌀밥'),
	 (442,62,6,'깍두기'),
	 (443,63,6,'짜장 닭조림 덮밥'),
	 (444,63,6,'동그랑땡/칠리소스'),
	 (445,63,6,'유채나물 유자무침'),
	 (446,63,6,'연두부/양념간장'),
	 (447,63,6,'파송송 계란국'),
	 (448,63,6,'단무지 부추무침'),
	 (449,63,6,'<<샌드위치 특별식>>'),
	 (450,63,6,'햄치즈 감자샐러드 치아바타 ');
INSERT INTO team20.menu (menu_id,meal_id,restaurant_id,menu_name) VALUES
	 (451,63,6,'고구마 고로케/칠리소스'),
	 (452,63,6,'양상추 샐러드'),
	 (453,63,6,'콘씨리얼'),
	 (454,63,6,'흰우유'),
	 (455,63,6,'콘스프'),
	 (456,64,6,'얼큰 닭계장'),
	 (457,64,6,'메밀전병/양념간장'),
	 (458,64,6,'감자채 햄볶음'),
	 (459,64,6,'오이부추무침'),
	 (460,64,6,'흑미밥');
INSERT INTO team20.menu (menu_id,meal_id,restaurant_id,menu_name) VALUES
	 (461,64,6,'깍두기'),
	 (462,65,6,'감자 돼지고기 찌개'),
	 (463,65,6,'닭다리살 치킨까스/칠리소스'),
	 (464,65,6,'배추된장무침'),
	 (465,65,6,'양배추 새우볶음'),
	 (466,65,6,'쌀밥'),
	 (467,65,6,'배추김치'),
	 (468,66,6,'부산식 온밀면'),
	 (469,66,6,'군만두 맛탕'),
	 (470,66,6,'매콤 오징어볶음');
INSERT INTO team20.menu (menu_id,meal_id,restaurant_id,menu_name) VALUES
	 (471,66,6,'오크라 된장무침'),
	 (472,66,6,'쌀밥'),
	 (473,66,6,'배추김치'),
	 (474,66,6,'<<샌드위치 특별식>>'),
	 (475,66,6,'떡갈비 봄동 버거'),
	 (476,66,6,'감자튀김/케찹'),
	 (477,66,6,'양배추 샐러드'),
	 (478,66,6,'코울슬로'),
	 (479,66,6,'오렌지주스'),
	 (480,66,6,'양송이스프');
INSERT INTO team20.menu (menu_id,meal_id,restaurant_id,menu_name) VALUES
	 (481,67,6,'장조림 버터 비빔밥'),
	 (482,67,6,'닭강정 가라아게'),
	 (483,67,6,'야채 스크램블 에그'),
	 (484,67,6,'맛살오이초무침'),
	 (485,67,6,'어묵무국'),
	 (486,67,6,'배추김치'),
	 (487,68,6,'돼지불고기 김치죽'),
	 (488,68,6,'새우튀김/칠리소스'),
	 (489,68,6,'청포묵 야채무침'),
	 (490,68,6,'고추장 멸치볶음');
INSERT INTO team20.menu (menu_id,meal_id,restaurant_id,menu_name) VALUES
	 (491,68,6,'플레인 요플레'),
	 (492,68,6,'동치미'),
	 (493,69,6,'매콤 제육덮밥'),
	 (494,69,6,'감자전/양념간장'),
	 (495,69,6,'볼어묵고추장볶음'),
	 (496,69,6,'시금치 무침'),
	 (497,69,6,'콩나물국'),
	 (498,69,6,'배추김치'),
	 (499,69,6,'<<샌드위치 특별식>>'),
	 (500,69,6,'콘짜렐라 소시지 치아바타');
INSERT INTO team20.menu (menu_id,meal_id,restaurant_id,menu_name) VALUES
	 (501,69,6,'감자고로케/케찹'),
	 (502,69,6,'양상추 샐러드'),
	 (503,69,6,'그래놀라'),
	 (504,69,6,'흰우유'),
	 (505,69,6,'크림스프'),
	 (506,70,6,'돼지고기 순두부찌개'),
	 (507,70,6,'너비아니구이/데리야끼소스'),
	 (508,70,6,'숙주무침'),
	 (509,70,6,'미역줄기볶음'),
	 (510,70,6,'흑미밥');
INSERT INTO team20.menu (menu_id,meal_id,restaurant_id,menu_name) VALUES
	 (511,70,6,'깍두기'),
	 (512,71,6,'우유달걀카레'),
	 (513,71,6,'미니돈까스/칠리소스'),
	 (514,71,6,'콜리플라워 두부무침'),
	 (515,71,6,'마카로니 마요무침'),
	 (516,71,6,'유부 된장국'),
	 (517,71,6,'배추김치'),
	 (518,72,6,'야채듬뿍 비빔당면'),
	 (519,72,6,'콩나물 돼지불고기'),
	 (520,72,6,'순대/양념소금');
INSERT INTO team20.menu (menu_id,meal_id,restaurant_id,menu_name) VALUES
	 (521,72,6,'어묵탕/물떡'),
	 (522,72,6,'후리가케 주먹밥'),
	 (523,72,6,'단무지'),
	 (524,72,6,'<<샌드위치 특별식>>'),
	 (525,72,6,'홍루이젠 샌드위치'),
	 (526,72,6,'웨지감자(치즈맛)'),
	 (527,72,6,'양배추 샐러드'),
	 (528,72,6,'초코볼'),
	 (529,72,6,'흰우유'),
	 (530,72,6,'양송이스프');
INSERT INTO team20.menu (menu_id,meal_id,restaurant_id,menu_name) VALUES
	 (531,73,6,'나가사끼 짬뽕탕'),
	 (532,73,6,'꿔바로우/청양유자마요소스'),
	 (533,73,6,'고구마 조림'),
	 (534,73,6,'미역초무침'),
	 (535,73,6,'쌀밥'),
	 (536,73,6,'배추김치'),
	 (537,74,6,'우렁쌈밥/상추'),
	 (538,74,6,'야채계란찜'),
	 (539,74,6,'매콤 콩나물 무침'),
	 (540,74,6,'들깨버섯볶음');
INSERT INTO team20.menu (menu_id,meal_id,restaurant_id,menu_name) VALUES
	 (541,74,6,'맑은 미역국'),
	 (542,74,6,'배추김치'),
	 (543,75,6,'사골 옹심이 만두국'),
	 (544,75,6,'소시지 야채볶음'),
	 (545,75,6,'오징어초무침'),
	 (546,75,6,'양념깻잎무침'),
	 (547,75,6,'흑미밥'),
	 (548,75,6,'배추김치'),
	 (549,76,6,'얼큰 육개장'),
	 (550,76,6,'참치두부조림');
INSERT INTO team20.menu (menu_id,meal_id,restaurant_id,menu_name) VALUES
	 (551,76,6,'감자곤약조림'),
	 (552,76,6,'브로콜리 버섯볶음'),
	 (553,76,6,'흑미밥'),
	 (554,76,6,'깍두기');


-- 7. liked_meals
INSERT INTO team20.liked_meals (likedMeals_id,user_id,meal_id,restaurant_id,created_dt) VALUES
	 (1,1,1,1,'2023-11-11 12:12:00');


-- 8. order
INSERT INTO team20.`order` (order_id,user_id,restaurant_id,meal_id,price,payment_method,order_datetime,receive_datetime) VALUES
	 (1,1,1,2,5000,'card','2023-11-11 08:00:00','2023-11-11 09:00:00');


-- 9. review
INSERT INTO team20.review (review_id,restaurant_id,user_id,meal_id,ratings,content,image_url,created_dt) VALUES
	 (1,1,1,2,5.0,'정말맛있다.','http://localhost/phpmyadmin/themes/pmahomme/img/logo_left.png','2023-11-11 12:00:00');
