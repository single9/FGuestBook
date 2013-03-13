<?php
   $con=mysql_connect('localhost','root','asctv320'); //資料庫連線
   if(!$con){
	   $info="連接數據庫出錯！".mysql_errno()."錯誤原因：".mysql_error();
   }else{
	   $info="成功連上數據庫";
   }
   //echo "&".$info."&";   
    mysql_select_db("fguestbook");
    mysql_query("set names 'utf8'");//顯示中文，不讓他出現亂碼
?>