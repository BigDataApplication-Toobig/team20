-- database 내의 모든 table drop
use team20;
drop index idx_restaurant_id on restaurant;
SET @tables = NULL;
SELECT GROUP_CONCAT(table_schema, '.', table_name) INTO @tables
  FROM information_schema.tables
  WHERE table_schema = 'team20';

SET @tables = CONCAT('DROP TABLE ', @tables);
PREPARE stmt FROM @tables;
SET FOREIGN_KEY_CHECKS=0;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;