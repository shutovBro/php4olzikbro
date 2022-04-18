<?php
$visitCounter=1;
if(isset($_COOKIE['visitCounter'])){
	$visitCounter=$_COOKIE['visitCounter'];
	$visitCounter++;}
setcookie("visitCounter",$visitCounter);
setcookie("lastVisit","",time()+3600);
$lastVisit=$_COOKIE['lastVisit'];
date_default_timezone_set('Asia/Almaty');
$lastVisit=date("d/m/y, h:i");
setcookie("lastVisit",$lastVisit);
if ($visitCounter<='1'){
	echo "<blockquote>Спасибо что зашли на огонек</blockquote>";}
else{
	echo "<blockquote>Вы зашли к нам".$visitCounter."раз!<br>Последнее посещение:".$lastVisit."</blockquote>";}
?>