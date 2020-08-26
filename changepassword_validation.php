<?php
session_start();

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
$oldpassword=md5($_POST['Old_Password']);
$Email=$_SESSION['mail'];

$Password=md5($_POST['New_Password']);
$query2="select * from sample where Email='$Email'";
$result=mysql_query($query2,$connect);
$row=mysql_fetch_array($result);
if ($row['Password']==$oldpassword)
 {
 	$updatequery=mysql_query("update sample set Password='$Password' where Email='$Email'",$connect);
 	if ($updatequery)
 	 {
 		echo "Updated";
 	}
 	else
 	{
 		echo "not updated";
 	}
}
else
{
	echo "incorrect old password";
}
?>