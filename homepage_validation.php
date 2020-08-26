<!DOCTYPE html>
<html>
<head>

 
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  


  <link rel="stylesheet" href="sample.css">
    <link rel="stylesheet" href="homepage.css">
 

	<title>Home</title>
</head>

<body>
	<?php include 'navbar.php';?>

  <div class="main">

            <form name="form3" class="form3" method="post" action="upload_validation.php" enctype="multipart/form-data">
            <div class="form-group">
              <input type="file" class="form-control-file choose" name="file" id="file" required>
            </div>
            <div class="form-group">  
                <input type="Comment" class="form-control comment" name="Comment" id="Comment" placeholder="Comment" required>
              </div>
              <button type="submit" class="btn btn-outline-primary button">Submit</button>
            </form>
  
  </div>
</body>
</html>

<?php
$connect=mysql_connect("localhost","root","");
if($connect)
{
  echo "";
}
else
{
  echo "not connected</br>";
}
mysql_select_db("sample",$connect);
$news_feed=mysql_query("select * from news_feed",$connect);
$rows_count=mysql_num_rows($news_feed);
for($i=0;$i<$rows_count;$i++)
{
  $row=mysql_fetch_array($news_feed);
  $img=$row['imagefile'];
  $email=$row['Email'];
  $sample=mysql_query("select * from sample where Email='$email'",$connect);
  $sample_table=mysql_fetch_array($sample);
  $firstname=$sample_table['FirstName'];
  $text=$row['text'];
  $time=$row['time'];
 
echo "<div class='container'>
         <div class='row'>
<div class='card' style='width:1200px; height:550px;'>
  <div class='card-header text-white   bg-info'>
                 <div class='row'>
                   <div class='col-sm-3'>
                       <b>$firstname</b>
                    </div>
                   <div class='col-sm-5'>
                      <p>Upload-Time: $time</p>
                   </div>
                 </div>
              </div>

  <div class='card-body'>
    <h5 class='card-title'><p>Comment: $text</p>
</h5>
     <center><img src='images/$img' style='width:400px; height:350px; border:2px solid black; '/></center>

  </div>
</div>
</div>
</div>
";
}

?>




