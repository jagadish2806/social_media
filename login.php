<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



  <link rel="stylesheet" href="login.css">

  <title>Login</title>
<script type="text/javascript">
    function validate(form1){  
      var UserName=document.form1.UserName.value;  
      var Password=document.form1.Password.value;  
      var k=0;
      if (UserName==null || UserName=="")
      {  
        document.getElementById('v_UserName').innerHTML="UserName should not be Empty";
              k=1;
      }
      else
      {
      document.getElementById('v_UserName').innerHTML="";
      } 
      if (Password==null || Password=="")
      {  
        document.getElementById('v_Password').innerHTML="Password should not be Empty";
              k=1;
      }
      else
      {
      document.getElementById('v_Password').innerHTML="";
      } 

              $.ajax({
                type: "POST",
                url: "loginauth.php",
                data: ({a:UserName,b:Password}),
                dataType: "html",
                success: function(responseText) {
                if(responseText==0){
                  document.getElementById('incorrect').innerHTML="Incorrect Details";
                }
                else{
                    document.getElementById('incorrect').innerHTML="";
                    window.location="homepage_validation.php";
                }
            }
        });
      
      if(k==1)
      {
        return false;

      }
      else
      {
        return true;

      }
    }  
</script> 

</head>
<body >

<nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top">
        <a class="nav-link" href="#" style="color: white;">Home</a>
         <a class="nav-link" href="timeline.php" style="color: white;">Timeline</a>
<!--         <a class="nav-link" href="#" style="color: white;">Upload</a> -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
    
      <li class="nav-item">
        <a class="nav-link" href="#" style="color: white;">Sign In/sign Up</a>
      </li>
    </ul>
    
  </div>
</nav>
<div class="main">
        <ul class="nav nav-tabs" >
              <li class="nav-item">
               </li>
              <li class="nav-item">
                <a class="nav-link active loginnav" href="login.php">Sign In</a>
              </li>
              <li>
                <a class="nav-link loginnav" href="registration.php">Sign Up</a>
              </li>
              </ul>
            
            <form name="form1" class="form1" method="post" >
              <div class="form-group">  
             <input type="UserName" class="form-control UserName" name="UserName" id="UserName" placeholder="UserName"><span id="v_UserName" style="color: red;"></span>
              </div>
              <div class="form-group">  
                <input type="Password" class="form-control Password" name="Password" id="Password" placeholder="Password"><span id="v_Password" style="color: red;"></span>
              </div>
              <span style="color:red;" id="incorrect"></span>
              <button type="submit" class="btn btn-outline-primary button" onclick="return validate(this)">Login</button>
              </form>
    </div>

  
</body>
</html>