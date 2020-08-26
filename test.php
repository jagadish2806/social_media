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


	<title></title>
</head>
<body>
  <?php include 'navbar.php';?>
  	</br>
	</br>
	</br>
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