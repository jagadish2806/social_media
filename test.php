<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title></title>

<style>
.fa-thumbs-up {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}

/* Darker background on mouse-over */
.fa-thumbs-up:hover {
  background-color: RoyalBlue;
}
</style>
<script type="text/javascript">
    <?php include 't_v.php';?>

</script>
</head>
<body>
<form action="<?php $_SERVER['PHP_SELF']; ?>"  method="post">
      <input type="submit"  name="clicks"><i class="fa fa-thumbs-up"></i></input>


  

<button  name="clicks" class="btn btn-warning"><i class="fa fa-times"></i> Clear</button>


</form>
<div>Click Count: <?php echo getClickCount(); ?></div>
</body>
</html>
