<?php

require_once 'pageCreateClass.php';

class connectionClass extends pageCreateClass {
    //PDO connection
    public function connection() {
        try {
        $db = new PDO('mysql:dbname=kimiyuki_quiz;host=mysql645.db.sakura.ne.jp;charset=utf8', 'kimiyuki', 'l7zzkymy');
        } catch (PDOException $e) {
            exit("データベースに接続できません。: {$e->getMessage()}");
        }
        return $db;
    }
}
?>
