<?php
   $con=mysql_connect('localhost','root','asctv320'); //��Ʈw�s�u
   if(!$con){
	   $info="�s���ƾڮw�X���I".mysql_errno()."���~��]�G".mysql_error();
   }else{
	   $info="���\�s�W�ƾڮw";
   }
   //echo "&".$info."&";   
    mysql_select_db("fguestbook");
    mysql_query("set names 'utf8'");//��ܤ���A�����L�X�{�ýX
?>