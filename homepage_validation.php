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


  


  <link rel="stylesheet" href="index.css">
  <?php 
  session_start();
  $username=$_SESSION['name'];
  ?>

	<title>Home page</title>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-success fixed-top">
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="homepage_validation.php" style="color: white;">Home</a>
      </li>    
        <li class="nav-item ">
        <a class="nav-link" href="upload.php" style="color: white;">Upload</a>
      </li>      
    <!--   <li class="nav-item">
        <a class="nav-link" href="#" style="color: white;"><?php  echo$username; ?></a>

      </li> -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;"><?php echo "Hi ".$username; ?>
          
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Change Password</a>
          <a class="dropdown-item" href="logout.php">Logout</a>

        </div>
      </li>   

<!-- 

         <li><a  class="btn btn-outline" data-toggle="dropdown"  style="text-decoration:none;font-size: 18px; color:black;"><span class="glyphicon glyphicon-user"></span><?php echo "Hi,".$username; ?><span class="caret"></span></a></button>
          <ul class="dropdown-menu" style="text-decoration:none; color:black;">
            
    
            <li><a  href="#" style="text-decoration:none; color:blue;">Change Password</a></li>
            <li class="divider"></li>
            <li><a href="logout.php" style="text-decoration:none; color:blue;">Logout</a></li>
          </ul>
        </li> -->
    </ul>
    
  </div>
</nav>
</body>



</html>
<?php
$connect=mysql_connect("localhost","root","");
if($connect)
{
  echo "</br>";
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
  // $time=$row['time'];
  // echo '<div class="container">';
  // echo '<div class="row">';
  // echo '<div class="col-sm-3">';
  // echo '</div>';
  // echo '<div class="col-sm-3">';
  // echo $text."</br>";
  // echo $time."</br>";
  // echo $firstname."</br>";

  // echo '</div>';
  // echo '<div class="col-sm-3">';
  // echo '</div>';
  // echo '</div>';
  // echo '</div>';
  // echo "<center><img src='images/$img' style='width:700px; border:2px solid black; height:350px;'/></center></br></br>";
  echo "<div class='container'><div class='card'>
            <div class='card-body'>
              <div class='row'>
                    <div class='col-sm-12' style='padding-left:50px;'><b>$firstname</b></div>
                    <div class='col-sm-3'><center><img src='images/$img' style='width:400px; border:2px solid black; height:350px;'/></center></div>
              </div>
              <div class='card-header'>
                  <p>$text</p>
              </div>
            </div>
      </div>
      </div>";

}

?>




