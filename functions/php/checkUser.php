<?php
    require "oppDb.php";
    $db = new oppDb();
    $password = md5($_POST['password']);
    $res = $db->sql("SELECT * FROM user_account WHERE  email = '{$_POST['email']}' AND password  = '{$password}'");
    // $res = $db->sql("SELECT * FROM user_account WHERE  email = 'muhammadhammad0315@gmail.com' AND password  = '098f6bcd4621d373cade4e832627b4f6'");
    $data = $res;
    $res = count($res);
            // print_r($data[0]);
    if ($res == 1) {
        echo "1";
        session_start();
        $_SESSION['user_id'] = $data[0]['Uid'];
        $_SESSION['user_email'] = $data[0]['email'];
    } else {
        echo "0";
    }
?>