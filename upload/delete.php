<?php

  require "connectdb.php";
  $cid=$_POST['ucid'];
  //將留言資料刪除'
  $str_sql = "DELETE FROM `myguestbook` WHERE `myguestbook`.`cid` = ".$cid." LIMIT 1;";
  
  if(mysql_query($str_sql))
  {
     $info= "成功!".$cid."DAY".$Today; 
  }
  else
  {
     $info= "失敗.".$cid."DAY".$Today;
  }
  mysql_close();

  echo "&backinfo=".$info."&";

?>