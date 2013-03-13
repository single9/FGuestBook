<?php

  require "connectdb.php";
  date_default_timezone_set('Etc/GMT-8');
  $name=$_POST['uname'];
  $comment=$_POST['ucomment'];
  $website=$_POST['uurl'];
  $webgif=$_POST['uwebgif'];
  $Today = date("Y/m/d,H:i"); 
  //$Today = date("Y-m-d H:i:s",(time()+8*3600));
  $id=date("YmdHis"); 
  //寫入留言資料到資料庫'
  $str_sql="INSERT INTO  myguestbook (name,comment,time,id,url,webgif) VALUES ('$name','$comment','$Today','$id','$website','$webgif');";
  
  if(mysql_query($str_sql))
  {
     $info= "留言成功!".$name; 
  }
  else
  {
     $info= "留言失敗...".$name;
  }
  mysql_close();

  echo "&backinfo=".$info."&";

?>