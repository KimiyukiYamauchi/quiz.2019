DROP TABLE IF EXISTS `quiz4`;
CREATE TABLE quiz4 (
    id int AUTO_INCREMENT primary key not null,
    quizId int NOT NULL,
    validity VARCHAR(20) NOT NULL,
    question_type VARCHAR(20) NOT NULL,
    question_difficulty VARCHAR(20) NOT NULL,
    question TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
    option1 VARCHAR (255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
    option2 VARCHAR (255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
    option3 VARCHAR (255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
    option4 VARCHAR (255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
    option5 VARCHAR (255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
    option6 VARCHAR (255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
    answer text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
    answer_length VARCHAR(20) NOT NULL,
    checkbox_length int(3) NOT NULL,
    checkbox_options int(3) NOT NULL
) ENGINE = MyISAM;

DROP TABLE IF EXISTS `quiz_result`;
CREATE TABLE quiz_result (
    user_id VARCHAR(255) NOT NULL, 
    id INT NOT NULL, 
    quizId INT(5) NOT NULL, 
    right_answer INT(3) NOT NULL, 
    question VARCHAR (2000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
    user_answer VARCHAR (255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
    play_time TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE = MyISAM;

DROP TABLE IF EXISTS `game_summary`;
CREATE TABLE game_summary (
    user_name VARCHAR(255) NOT NULL,
    quiz_name VARCHAR(255) NOT NULL, 
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL, 
    chapters VARCHAR(100) NOT NULL,
    gameTime VARCHAR(15) NOT NULL,
    total_answers INT NOT NULL, 
    right_answers INT NOT NULL, 
    reg_time TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);
