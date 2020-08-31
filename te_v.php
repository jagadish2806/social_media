<?php
	session_start();

$text=$_POST['a'];
$msg=$_SESSION['mail'];
$postid=$_POST['b'];


$connect=mysql_connect("localhost","root","");

mysql_select_db("sample",$connect);

// $query2="insert into sa values('$text','$postid','$msg')";
// $result=mysql_query($query2,$connect);
$sa=mysql_query("select * from  sa where msg='$msg' and postid='$postid'",$connect);
$rows_count=mysql_num_rows($sa);
//num -rows
if($rows_count==0)
{
	echo "inserted";
	$count_sub=1;
	$query2="insert into sa values('$count_sub','$postid','$msg')";
$result=mysql_query($query2,$connect);
if($result){
	echo json_encode("1");
}

}
else
{
	while($row=mysql_fetch_array($sa)){
		$count_sub=0;
		$query2="update sa set text=$count_sub where msg='$msg' and postid='$postid'";
		$result=mysql_query($query2,$connect);
		if($result){
	echo json_encode("0");
}

	}
}




?>