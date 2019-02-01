--
-- Table structure for table `quiz`
--

DROP TABLE IF EXISTS `quiz`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `quiz` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(255) CHARACTER SET utf8 NOT NULL,
  `option1` varchar(255) CHARACTER SET utf8 NOT NULL,
  `option2` varchar(255) CHARACTER SET utf8 NOT NULL,
  `option3` varchar(255) CHARACTER SET utf8 NOT NULL,
  `option4` varchar(255) CHARACTER SET utf8 NOT NULL,
  `answer` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;


DROP TABLE IF EXISTS `quiz_result`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `quiz_result` (
  `id` int(11) NOT NULL,
  `right_answer` int(11) NOT NULL,
  `question` varchar(255) CHARACTER SET utf8 NOT NULL,
  `user_answer` varchar(255) CHARACTER SET utf8 NOT NULL,
  `play_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

