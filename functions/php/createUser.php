<?php
require "oppDb.php";
$db = new oppDb();
$passwordIncode = md5($_POST['password']);
$res = $db->sql("INSERT INTO user_account ( full_name , email, password, status) VALUES ('{$_POST['full_name']}' , '{$_POST['email']}' , '{$passwordIncode}' , '1' )" );
?>