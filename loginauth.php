<?php

$a=$_POST['a'];
$b=md5($_POST['b']);



$connect=mysql_connect("localhost","root","");

mysql_select_db("sample",$connect);
$query2="select * from sample where Email='$a' and Password='$b'";
$result=mysql_query($query2,$connect);

echo json_encode(mysql_num_rows($result));
$num=mysql_num_rows($result);
if($num!=0){
	session_start();
	$row=mysql_fetch_array($result);
	$_SESSION['mail']=$a;
	$_SESSION['name']=$row[0];
}







?>