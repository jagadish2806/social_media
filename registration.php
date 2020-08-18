<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



  <link rel="stylesheet" href="sample.css">
 <script type="text/javascript">
     function validate(form2)
    {  
      var FirstName=document.form2.FirstName.value; 
      var SecoundName=document.form2.SecoundName.value;  
      var Email=document.form2.Email.value;  
      var PhoneNumber=document.form2.PhoneNumber.value;  
      var Password=document.form2.Password.value;  
      var ConfirmPassword=document.form2.ConfirmPassword.value;  
      var k=0;
      if (FirstName==null || FirstName=="")
      {  
        document.getElementById('v_First').innerHTML="FirstName should not be Empty";
              k=1;
      }
      else
      {
      document.getElementById('v_First').innerHTML="";
      }
      if (SecoundName==null || SecoundName=="")
      {  
        document.getElementById('v_Secound').innerHTML="SecoundName should not be Empty";
              k=1;
      }
      else
      {
      document.getElementById('v_Secound').innerHTML="";
      }
       if (Email==null || Email=="")
      {  
        document.getElementById('v_Email').innerHTML="Email should not be Empty";
              k=1;
      }
      else
      {
      document.getElementById('v_Email').innerHTML="";
      }
       if (PhoneNumber==null || PhoneNumber=="")
      {  
        document.getElementById('v_Phone').innerHTML="PhoneNumber should not be Empty";
              k=1;
      }
      else
      {
      document.getElementById('v_Phone').innerHTML="";
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
       if (ConfirmPassword==null || ConfirmPassword=="")
      {  
        document.getElementById('v_Confirm').innerHTML="ConfirmPassword should not be Empty";
              k=1;
      }
      else
      {
      document.getElementById('v_Confirm').innerHTML="";
      }
       if(Password.length<6)
      {  
        document.getElementById('v_Password').innerHTML="Password should not be Empty";
              k=1;
      }
      else
      {
      document.getElementById('v_Password').innerHTML="";
      }
      phn=new RegExp("[0-9]{10}","g");
      if(!PhoneNumber.match(phn))
      {
        document.getElementById('v_Phone').innerHTML="Invalid Phone number";
        k=1;
      }
      else
      {
      document.getElementById('v_Phone').innerHTML="";
      }  
      // return false;

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
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-success">
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="#" style="color: white;">Home</a>  </li>    
      <li class="nav-item ">
        <a class="nav-link" href="#" style="color: white;">Upload</a>
      </li>
    
      <li class="nav-item">
        <a class="nav-link" href="login.php" style="color: white;">Sign In/sign Up</a>
      </li>
    </ul>
    
  </div>
</nav>
  <div class="container">

      <div class="row">
         <div class="col-sm-4">
        </div>
          <div class="col-sm-4 signup">
              <ul class="nav nav-tabs">
              <li class="nav-item">
                <a class="nav-link " href="login.php">Sign In</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="registration.php">Sign Up</a>
              </li>
            </ul> 

<form name="form2" method="post" action="registration_validation.php">
              <div class="form-group">  
                <label for="FirstName">FirstName</label>
                <input type="FirstName" class="form-control" name="FirstName" id="FirstName" placeholder="FirstName"><span id="v_First" style="color: red;"></span>
              </div>
              <div class="form-group">  
                <label for="SecoundName">SecoundName</label>
                <input type="SecoundName" class="form-control" name="SecoundName" id="SecoundName" placeholder="SecoundName"><span id="v_Secound" style="color: red;"></span>
              </div>
              <div class="form-group">  
                <label for="Email">Email</label>
                <input type="Email" class="form-control" name="Email" id="Email" placeholder="Email"><span id="v_Email" style="color: red;"></span>
              </div>
              <div class="form-group">  
                <label for="PhoneNumber">PhoneNumber</label>
                <input type="PhoneNumber" class="form-control" name="PhoneNumber" id="PhoneNumber" placeholder="PhoneNumber"><span id="v_Phone" style="color: red;"></span>
              </div>
              <div class="form-group">  
                <label for="Password">Password</label>
                <input type="Password" class="form-control" name="Password" id="Password" placeholder="Password"><span id="v_Password" style="color: red;"></span>
              </div>
              <div class="form-group">  
                <label for="ConfirmPassword">ConfirmPassword</label>
                <input type="ConfirmPassword" class="form-control" name="ConfirmPassword" id="ConfirmPassword" placeholder="ConfirmPassword"><span id="v_Confirm" style="color: red;"></span>
              </div>
              <button type="Submit" class="btn btn-outline-primary" onclick="return validate(this)">Submit</button>
              </form>

          </div>
        
      </div>
  </div>
</body>
</html>