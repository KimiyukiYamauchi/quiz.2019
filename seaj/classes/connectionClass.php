<?php
require 'Config.php';

class connectionClass {
    //PDO connection
    public function connection() {
        Config::set_config_directory(__DIR__ . '/config');
        $dbname = Config::get('db.dbname');
        $hostname = Config::get('db.hostname');
        $user = Config::get('db.user');
        $pass = Config::get('db.pass');
        try {
        $db = new PDO('mysql:dbname=' . $dbname . ';host=' . $hostname . ';charset=utf8', $user, $pass);
        } catch (PDOException $e) {
            exit("データベースに接続できません。: {$e->getMessage()}");
        }
        return $db;
    }
}
?>
