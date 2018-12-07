<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {
        try {$pdo = new PDO("mysql:host=localhost;dbname=board_test;charset=utf8", "root", "");
            $sql = "SELECT * FROM board";
            $stmt = $pdo->query($sql);
        } catch (PDOException $e) {

            echo 'データベースにアクセスできません！';
            exit;

        }


    }
}