<?php
$connect=mysql_connect("localhost","root","");
if($connect)
{
	echo "connected</br>";
}
else
{
	echo "not connected</br>";
}
mysql_select_db("sample",$connect);
$UserName=$_POST['UserName'];
$Password=md5($_POST['Password']);
$query2="select * from sample where Email='$UserName' and Password='$Password'";
$result=mysql_query($query2,$connect);
if(mysql_num_rows($result)>0)
{
	echo "login succesful";
}
else
{
	echo "error";
}
?>