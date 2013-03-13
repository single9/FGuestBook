<?PHP 
    require "connectdb.php";

	$query='SELECT * FROM myguestbook order by id desc';//asc 汔唗˙dese 蔥唗˙
	$result=mysql_query($query);
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\r\n";
	echo "<items>\n";
	while($line=mysql_fetch_assoc($result))
	{
	   echo "<item>\n";
	      echo "<name><![CDATA[".$line["name"]."]]></name>\n";
          echo "<time><![CDATA[".$line["time"]."]]></time>\n";
          echo "<comment><![CDATA[".$line["comment"]."]]></comment>\n";
		  echo "<website><![CDATA[".$line["url"]."]]></website>\n";
		  echo "<webgif><![CDATA[".$line["webgif"]."]]></webgif>\n";
		  echo "<cid>".$line["cid"]."</cid>\n";
       echo "</item>\n";
	}
	echo "</items>\n";

mysql_close();
?> 
