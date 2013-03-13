<?php 
require_once("connectdb.php");
error_reporting(0);//錯誤報告不顯示
//接收manager.swf的帳號欄(_username)的資料
$username=str_replace(" ","",$_POST['username']);
//接收manager.swf的密碼欄(_password)的資料
$password=$_POST['upassword'];
//密碼驗證
$query="select * from admin where user='$username' and pass=PASSWORD('$password')";
$data=mysql_fetch_array(mysql_query($query));
if($data){
	echo "&returnInfo=LOG_OK";    
}else{
	echo "&returnInfo=LOG_ERROR";
}
?>