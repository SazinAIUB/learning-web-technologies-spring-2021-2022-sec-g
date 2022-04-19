<!DOCTYPE html>
<html>
<head>
<title>Forgot Password</title>
<link rel="stylesheet" href="CSS/style.css">
</head>
<body>

<?php 
session_start();
if (isset($_SESSION['username'])){header("location:welcome.php");}
else{require 'Bar/top.php';}
require 'Controller/retrievePassword.php';
?>

<div class="div">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
 <fieldset>
  <legend>Forgot Password</legend>

  <label for="hemail">Enter Email :</label>
  <input type="text" id="email" name="hemail">
  <span class="error"> <?php echo $hemailErr;?></span><hr>

  <input type="submit" value="Submit" class="btn btn-info">
 </fieldset>
</form> 

<?php 
echo $msg;?>
</div>

<?php require 'Bar/footer.php';?>
</body>
</html>