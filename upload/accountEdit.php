<?php
  require "connectdb.php";
  $O_pass=$_POST['opass'];//舊帳號
  $O_name=$_POST['oname'];//舊密碼
  $A_name=$_POST['uname'];//新帳號
  $A_pass=$_POST['upass'];//新密碼
  //將管理員的密碼更新'
  /*$str_sql = "UPDATE `admin` SET  `user` =  '".$A_name."',
`pass` =  '".$A_pass."' WHERE CONVERT(  `admin`.`user` USING utf8 ) =  '".$O_name."' AND CONVERT(  `admin`.`pass` USING utf8 ) =  '".$O_pass."' LIMIT 1 ;";*/
  $str_sql = "UPDATE `admin` SET  `user` =  '".$A_name."',
`pass` =  PASSWORD('".$A_pass."') WHERE CONVERT(  `admin`.`user` USING utf8 ) =  '".$O_name."' LIMIT 1 ;";
  if(mysql_query($str_sql))
  {
     $info= "成功!"; 
  }
  else
  {
     $info= "失敗.";
  }
  mysql_close();
  echo "&backinfo=".$info."&";
?>