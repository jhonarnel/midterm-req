<?php 
include 'db-connect.php';
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <style>
body {
  background-image: url('ian2.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}

img {
  border-radius: 50%;
}
label {
  text-shadow: 2px 2px #fff;
}

</style>

</head>
<body >
       <?php  
if (isset($_GET['error'])) { 
       if ($_GET['error'] == "error") { ?>
          <div class="alert alert-danger text-center" role="alert">
                 Username or Password is incorrect.
          </div>    
<?php
    }   
}
       ?>

       <form method="POST" action="login-action.php">
       	<div class="container col md-3 mt-5">
       		<center><img class="mt-3" src="cpsu.jpg" height="100" width="100"  ></center>
       		<h1 class="h1 mb-3 font-weight-normal text-center" style="color:white">Please Sign In</h1>
       		<label for="username" class="font-weight-bold mr-auto" style="color:black">Username</label>
       		<input type="text" name="username" class="form-control mb-3" placeholder="Username" required="">

       		<label for="password" class="font-weight-bold mr-auto" style="color:black" >Password</label>
       		<input type="password" name="password" class="form-control mb-3" placeholder="Password" required="">

       		<button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Sign in</button>
       		<a href="registration.php" class="btn btn-lg btn-success btn-block" name="submit" type="submit">Register</a>
       	</div>
       </form>
</body>
</html>
