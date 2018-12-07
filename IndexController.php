<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {

        $error = array();


        $title = $_POST['title'];
        $name = $_POST['name'];
        $text = $_POST['text'];
        $date = date('Y-m-d H:i:s');
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
        if (count($error) > 0) {
            foreach ($error as $errorms)
                print ("警告：$errorms<br />");
            print ("戻ってください：<a href = \"http://localhost/board_input.php\"> トップへ </a>");
        }


    }
}