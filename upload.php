<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



  <link rel="stylesheet" href="index.css">
  <?php 
  session_start();
  $username=$_SESSION['name'];
  ?>

	<title>Home page</title>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-success">
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
      </li> <!--      
       <li class="nav-item">
        <a class="nav-link" href="#" style="color: white;"><?php session_start(); echo $_SESSION['name']; ?> </a>
      </li> -->

         <li><a  class="btn btn-outline" data-toggle="dropdown"  style="text-decoration:none;font-size: 18px; color:black;"><span class="glyphicon glyphicon-user"></span><?php echo "Hi ".$username; ?><span class="caret"></span></a></button>
          <ul class="dropdown-menu" style="text-decoration:none; color:black;">
            
    
            <li><a  href="#" style="text-decoration:none; color:blue;">Change Password</a></li>
            <li class="divider"></li>
            <li><a href="logout.php" style="text-decoration:none; color:blue;">Logout</a></li>
          </ul>
        </li> 


    </ul>
    
  </div>
</nav>

<div class="container">
   <div class="row">
        <div class="col-sm-4">
            <form method="post" action="upload_validation.php" enctype="multipart/form-data">
            <div class="form-group">
              <label for="file">Upload file</label>
              <input type="file" class="form-control-file" name="file" id="file">
            </div>
            <div class="form-group">  
                <label for="Comment">Comment</label>
                <input type="Comment" class="form-control" name="Comment" id="Comment" placeholder="Comment">
              </div>
              <button type="submit" class="btn btn-outline-danger">Submit</button>
             
       
          </form>
        </div>
    </div>


</div>

</body>



</html>