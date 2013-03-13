<?php
  require "connectdb.php";
  $cid=$_POST['ucid'];
  $N_post=$_POST['npost'];
  //將留言板內容更新'
  $str_sql = "UPDATE `myguestbook` SET `comment` =  '".$N_post."' WHERE  `myguestbook`.`cid` =".$cid." LIMIT 1 ;";
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