<!DOCTYPE html>
<html>
<head>
    <?php 
  session_start();
  $username=$_SESSION['name'];
  ?>
    

  <title></title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top">
        <a class="nav-link" href="homepage_validation.php" style="color: white;">Home</a>  
        <a class="nav-link" href="timeline.php" style="color: white;">Timeline</a>   
       <!--  <a class="nav-link" href="upload.php" style="color: white;">Upload</a> -->


    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;"><?php echo "Hi ".$username; ?>
          
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="changepassword.php">Change Password</a>
          <a class="dropdown-item" href="logout.php">Logout</a>

        </div>
      </li>   


      </ul>
      
    </div>
  </nav>
</body>
</html>