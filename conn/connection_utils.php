<?php
$conn = mysql_connect("localhost","root","asdf");
if(!$conn){
	echo "Could not connect to database server...";
	exit;
}
mysql_select_db("microsystem",$conn);
mysql_query("set names gb2312");
?>