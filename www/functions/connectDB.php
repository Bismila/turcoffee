<?php
$link = false;
//подключаемся к базе данных users
function connectDBTurcoffee(){
	global $link;
    $db_host = 'localhost';
    $db_user = 'root';
    $db_password = '';
    $db_name = 'turcoffee';
    //Подключились к БД turcoffee - для фиксации сообщений обратной связи
    $link=new PDO('mysql:host=localhost;dbname=turcoffee', $db_user, $db_password);
    $link->exec("set names utf8");
    //echo"подключились к БД";
}
connectDBTurcoffee();
function closeDBTurcoffee(){
	global $link;
	$link-= null;
}

?>