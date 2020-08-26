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
	<title>Change Password</title>

   
    <link rel="stylesheet" href="changepassword.css">

    <script type="text/javascript">
     function validate(form1)
    {  
      var Old_Password=document.form1.Old_Password.value; 
      var New_Password=document.form1.New_Password.value;  
      var Confirm_Password=document.form1.Confirm_Password.value;  
      var k=0;
      if (Old_Password==null || Old_Password=="")
      {  
        document.getElementById('v_Old_Password').innerHTML="Old_Password should not be Empty";
              k=1;
      }
      else
      {
      document.getElementById('v_Old_Password').innerHTML="";
      }
      
      if (New_Password==null || New_Password=="")
      {  
        document.getElementById('v_New_Password').innerHTML="New_Password should not be Empty";
              k=1;
      }
      else
      {
      document.getElementById('v_New_Password').innerHTML="";
      }
      if(New_Password.length!=Confirm_Password.length)
      {
        document.getElementById('v_Confirm_Password').innerHTML="New_Password dont match";
        k=1;
      }
      else
      document.getElementById('v_Confirm_Password').innerHTML="";
      for(var i=0;i<New_Password.length;i++)
      {
      if(New_Password.charAt(i)!=Confirm_Password.charAt(i))
        {
        document.getElementById('v_Confirm_Password').innerHTML="New_Password dont match";
        k=1;
        break;
        }
      }
       if(New_Password.length<6)
      {  
        document.getElementById('v_New_Password').innerHTML="New_Password should not be Empty";
              k=1;
      }
      else
      {
      document.getElementById('v_New_Password').innerHTML="";
      }
     
     

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
	<?php include 'navbar.php';?>
    </br>
  </br>
  </br>
  <div class="main">
       
            
            <form name="form1" class="form1" method="post" action="changepassword_validation.php">
              <div class="form-group">  
             <input type="Password" class="form-control Old_Password" name="Old_Password" id="Old_Password" placeholder="Old_Password"><span id="v_Old_Password" style="color: red;"></span>
              </div>
              <div class="form-group">  
             <input type="Password" class="form-control New_Password" name="New_Password" id="New_Password" placeholder="New_Password"><span id="v_New_Password" style="color: red;"></span>
              </div>
              <div class="form-group">  
                <input type="Password" class="form-control Confirm_Password" name="Confirm_Password" id="Confirm_Password" placeholder="Confirm_Password"><span id="v_Confirm_Password" style="color: red;"></span>
              </div>
              <span style="color:red;" id="incorrect"></span>
              <button type="submit" class="btn btn-outline-primary button" onclick="return validate(this)">Submit</button>
              </form>
    </div>

</body>
</html>