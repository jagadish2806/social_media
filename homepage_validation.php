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
  

   <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <link rel="stylesheet" href="sample.css">
    <link rel="stylesheet" href="homepage.css">
 

	<title>Home</title>
<style>
.fa-thumbs-up {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}

.fa-thumbs-up:hover {
  background-color: RoyalBlue;
}
.fa-thumbs-down {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}

.fa-thumbs-down:hover {
  background-color: RoyalBlue;
}
</style>

<script type="text/javascript">
    function countClicks(x)
    {
   
    var counts=parseInt(document.getElementById('likes'+x).innerHTML)+1;
    document.getElementById('likes'+x).innerHTML=counts;
   document.getElementById("showCounts"+x).innerHTML = counts;


     $.ajax({
                type: "POST",
                url: "t_v.php",
                data: ({a:counts,b:x}),
                dataType: "html",
                success: function(responseText) {
            }
        });

 }

  function countClicks1(x)
    {
   
       var dislike_counts=parseInt(document.getElementById('dislikes'+x).innerHTML)+1;
    document.getElementById('dislikes'+x).innerHTML=dislike_counts;
   document.getElementById("showCounts1"+x).innerHTML = dislike_counts;


     $.ajax({
                type: "POST",
                url: "te_v.php",
                data: ({a:dislike_counts,b:x}),
                dataType: "html",
                success: function(responseText) {
            }
        });

 }
   
  </script>

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
// $sa=mysql_query("select * from sa where postid='$postid' ",$connect);
// $sa_row=mysql_fetch_array($sa);
// $c=intval($sa_row['text']);
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
  $_SESSION['postid']=$postid=$row['postid'];
 
echo "<div class='container'>
         <div class='row'>
<div class='card' style='width:1200px; height:650px;'>
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
         <h4 class='card-title'><p>$postid</p></h4>

     <center><img src='images/$img' style='width:400px; height:350px; border:2px solid black; '/></center>
     <h5 class='card-title'><p>Comment: $text</p></h5>
     <button onclick='countClicks(`$postid`)' ><i class='fa fa-thumbs-up'><span id='likes$postid'>0</span></i></button>

       <p id='showCounts$postid'></p>

       <button onclick='countClicks1(`$postid`)' ><i class='fa fa-thumbs-down'><span id='dislikes$postid'>0</span></i></button>

       <p id='showCounts1$postid'></p>


  </div>
</div>
</div>
</div>
";
}

?>




