
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

$file = $_FILES["file"]["name"];
$split_image=explode(".",$file);
$text=$_POST["Comment"];
$ab="select * from news_feed";




$pavan=mysql_query($ab,$connect);

$rows_count=mysql_num_rows($pavan)+1;

$jagadish="image_".$rows_count.".".end($split_image);
$Email=	$_SESSION['mail'];
    	$time=date("Y/m/d H:i:s", strtotime("+330 minutes"));

$query2="insert into news_feed values('$Email','$jagadish','$text','$time')";
$result=mysql_query($query2,$connect);

if($result)
{
  echo "inserted";
  if(move_uploaded_file($_FILES['file']['tmp_name'],"images/".$jagadish)){
    echo "upload sucess";
  }
  else{echo "failed to upload";} 
}
else
{
  echo "error";
}
?>



