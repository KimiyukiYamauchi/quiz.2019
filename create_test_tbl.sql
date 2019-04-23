DROP TABLE IF EXISTS `test`;
CREATE TABLE test (
    id int AUTO_INCREMENT primary key not null,
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
