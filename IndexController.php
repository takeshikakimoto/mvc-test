<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {

        try {$pdo = new PDO("mysql:host=localhost;dbname=board_test;charset=utf8", "root", "");
            $sql = "SELECT * FROM board";
            $stmt = $pdo->query($sql);
            $this->view->setVar('hoge', $stmt);
        } catch (PDOException $e) {

            echo 'データベースにアクセスできません！';
            exit;

        }


    }

    public function outputAction()
    {
        date_default_timezone_set('Asia/Tokyo');
        session_start();

        $error = array();


        $title = $_POST['title'];
        $name = $_POST['name'];
        $text = $_POST['text'];
        $date = date('Y-m-d H:i:s');

        $this->view->setVar('title', $title);
        $this->view->setVar('name', $name);
        $this->view->setVar('text', $text);
        $this->view->setVar('date', $date);
        $this->view->setVar('error', $error);


        if ($title == '') {
            $error[] = "<br />タイトルを入力してください<br />";
        }
        if (mb_strlen($title) > 40) {
            $error[] = "タイトルは40文字以内で入力して下さい<br />";
        }
        if ($name == '') {
            $error[] = "名前を入力してください<br />";
        }
        if (mb_strlen($name) > 20) {
            $error[] = "名前は20文字以内で入力して下さい<br />";
        }
        if ($text == '') {
            $error[] = "本文を入力してください<br />";
        }
        if (mb_strlen($text) > 140) {
            $error[] = "本文は140文字以内で入力して下さい<br />";
        }
        $this->view->setVar('error', $error);
    }

    public function testAction()
    {

        try {$pdo = new PDO("mysql:host=localhost;dbname=board_test;charset=utf8", "root", "");
            $sql = "SELECT * FROM board";
            $stmt = $pdo->query($sql);
            $this->view->setVar('hoge', $stmt);
        } catch (PDOException $e) {

            echo 'データベースにアクセスできません！';
            exit;

        }


    }


}