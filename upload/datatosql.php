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
  //�g�J�d����ƨ��Ʈw'
  $str_sql="INSERT INTO  myguestbook (name,comment,time,id,url,webgif) VALUES ('$name','$comment','$Today','$id','$website','$webgif');";
  
  if(mysql_query($str_sql))
  {
     $info= "�d�����\!".$name; 
  }
  else
  {
     $info= "�d������...".$name;
  }
  mysql_close();

  echo "&backinfo=".$info."&";

?>