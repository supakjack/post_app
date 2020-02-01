CREATE DATABASE post_app CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE posts (
    pot_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY COMMENT 'id for post' , 
    pot_stamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'auto timestamp for post',
    pot_post VARCHAR(255) NOT NULL COMMENT 'content for post',
    pot_report INT(50) NOT NULL DEFAULT 0 COMMENT 'count report for post'
)