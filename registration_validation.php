
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
$FirstName=$_POST['FirstName'];
$SecoundName=$_POST['SecoundName'];
$Email=$_POST['Email'];
$PhoneNumber=$_POST['PhoneNumber'];
$Password=md5($_POST['Password']);
$duplicate=mysql_query("select *from sample where Email='$Email'",$connect);
if(mysql_num_rows($duplicate)>0)
{
	echo "Email already exists";
}
$query2="insert into sample values('$FirstName','$SecoundName','$Email','$PhoneNumber','$Password')";
$result=mysql_query($query2,$connect);
if($result)
{
	echo "inserted";
}
else
{
	echo "error";
}
?>