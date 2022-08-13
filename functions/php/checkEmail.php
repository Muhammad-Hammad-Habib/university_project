<?php 
require "oppDb.php";
$db = new oppDb();
$res = $db->sql("SELECT * FROM user_account WHERE  email = '{$_POST['email']}' ");

echo count($res);

?>