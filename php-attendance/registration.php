<?php 
include 'db-connect.php';
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>registration</title>
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
h1 {
  text-shadow: 2px 2px #000000;
}
</style>

</head>
<body>
       
       <?php  
if (isset($_GET['register_action'])) { 
       if ($_GET['register_action'] == "success") { ?>
          <div class="alert alert-success text-center" role="alert">
                 Successfully register
          </div>    
<?php
    }   
}
       ?>

       <form method="POST" action="register-action.php">
       	<div class="container col md-3 mt-5">
       		<center><img class="mt-5" src="cpsu.jpg" height="80" width="80"></center>
       		<h1 class="h1 mb-3 font-weight-normal text-center" style="color:white">Please Sign In</h1>
        
       		<label for="username" class="font-weight-bold mr-auto" style="color:black">Username</label>
       		<input type="text" name="username" class="form-control mb-3" placeholder="Username" required="">

       		<label for="password" class="font-weight-bold mr-auto" style="color:black">Password</label>
       		<input type="password" name="password" class="form-control mb-3" placeholder="Password" required="">

                     <label for="fullname" class="font-weight-bold mr-auto" style="color:black">Fullname</label>
                     <input type="text" name="fullname" class="form-control mb-3" placeholder="Fullname" required="">
       		<button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Sign in</button>
       		
       	</div>
       </form>
       <p class="text-center" style="color:black">Already a member? Click <a href="login.php">here</a> to login.</p>
</body>
</html>
