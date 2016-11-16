<?php
//header("Content-type: text/html; charset=UTF-8");
//методом POST через ajax передали //сюда данные и обрабатываем их с помощью ф-ции htmlspecialchars //если будут какие либо html тэги - они в этом случае ничему не повредят
//if(isset($_POST['done']))
if(isset($_POST['users_id']))
	$users_id = htmlspecialchars($_POST['users_id']);
if(isset ($_POST['users_name']))
	$users_name = htmlspecialchars($_POST['users_name']);
if(isset ($_POST['users_email']))
	$users_email = htmlspecialchars($_POST['users_email']);
if(isset ($_POST['users_sbj']))
	$users_sbj = htmlspecialchars($_POST['users_sbj']);
if(isset ($_POST['users_msg']))
	$users_msg = htmlspecialchars($_POST['users_msg']);

$to = "bismiladance@gmail.com";
if(mail($to, $users_sbj, $users_msg))
{
	require_once "../functions/connectDB.php";
    connectDBTurcoffee();
    if((isset($users_name) && isset($users_msg)) && ($users_name!="" && $users_msg!="")) {// Добавляем в таблицу смс и пользователя
        $link->exec("INSERT INTO users (users_name, users_email, users_sbj, users_msg) 
VALUES (" . $link->quote($users_name) . "," . $link->quote($users_email) . "," . $link->quote($users_sbj) . "," . $link->quote($users_msg) . ")");
        $link->exec("set names utf8");
        $str = "Сообщение отправлено";
        echo "<div id='all_send-msg'><a href='../index.php'>".$str."</a></div>";
    }
    //закрываем соединение с БД
    $link = null;
}
else
{
	$str = "Сообщение не отправлено";
	echo $str;
}

?>