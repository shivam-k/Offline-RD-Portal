
<?php
  session_start();
   if($_SESSION['username']) {
       header ("Location: home.php");
   }

?>

<!DOCTYPE html>
<html>

<head>

  <title>Login to have Admin's power</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
body .container{
  height: 100%;
}
.container {
  margin-top: 5%;
  vertical-align: center;
}


  </style>

</head>

<nav class="navbar navbar-inverse" style="box-shadow: 0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)!important;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand active" href="#" style="color: #01A3E8;">TITLE</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="home.php">Home</a></li>
        <li ><a href="newPI-R.php">NewPI-R</a></li>
        <li ><a href="PI-R.php">PI-R</a></li>
        <li ><a href="events-R.php">Events-R</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Rd <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="rd/viewRegister.php">Total-R</a></li>
            <li><a href="rd/viewlf.php">Liftoff</a></li>
            <li><a href="rd/viewhp.php">Hoverpod</a></li>
            <li><a href="rd/viewsp.php">Spazor</a></li>
            <li><a href="rd/viewrc.php">Rocrun</a></li>
            <li><a href="rd/viewss.php">Sensorous</a></li>
            <li><a href="rd/viewpp.php">Paper Presentation</a></li>
            <li><a href="rd/viewcs.php">Case Study</a></li>
            <li><a href="rd/viewsd.php">Space Deb</a></li>
            <li><a href="rd/viewde.php">Designeer</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Web <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="web/viewRegister.php">Total-R</a></li>
            <li><a href="web/viewlf.php">Liftoff</a></li>
            <li><a href="web/viewhp.php">Hoverpod</a></li>
            <li><a href="web/viewsp.php">Spazor</a></li>
            <li><a href="web/viewrc.php">Rocrun</a></li>
            <li><a href="web/viewss.php">Sensorous</a></li>
            <li><a href="web/viewpp.php">Paper Presentation</a></li>
            <li><a href="web/viewcs.php">Case Study</a></li>
            <li><a href="web/viewsd.php">Space Deb</a></li>
            <li><a href="web/viewde.php">Designeer</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span>  Login </a></li>
      </ul>
    </div>
  </div>
</nav>




<?php
$error = "";
session_start();
if(isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	if(!empty($username) && !empty($password)) {
		if($username == 'user@gmail.com' && $password == 'pass123') {
			$_SESSION['username'] = $username;
			?> <script> window.location="home.php"; </script> <?php 
		}
		else {
			$error = "Wrong Combination of Username and Password";
		}
	}
  else {
    $error = "Empty box... Hey, Stop kidding me !!";
  }
}

?>


<?php

  if(empty($error)) {
    echo '<style type="text/css">
           #error {
                display: none;
           }
           </style>';
    }

 ?>




<body>
<div class="container col-sm-6 col-sm-offset-3" >
<div class="well well-lg " style="box-shadow: 0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)!important;">
   <h2 class="text-center"><kbd style="background-color: #FF4A56;">Login to have Admin's power</kbd></h2><br />
  <!-- alert for danger =========== -->
   <div class="alert alert-danger" id="error">
       <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
       <p class="text-center"> <strong><?php echo $error; ?></strong></p>
   </div>
  <form class="form-horizontal" role="form" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-2 col-sm-offset-1" for="email">Username:</label>
      <div class="col-sm-8">
         <input type="text" class="form-control input-lg" id="text" placeholder="Enter username" name="username" value="<?php echo $username; ?>"  />
      </div> 
    </div>
    <div class="form-group" >
      <label class="control-label col-sm-2 col-sm-offset-1" for="pwd">Password:</label>
      <div class="col-sm-8">
         <input type="password" class="form-control input-lg" id="pwd" placeholder="Enter password" name="password" />
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-4 col-sm-4">
         <button type="submit" class="btn btn-primary btn-block btn-lg" name="submit">Login</button>
      </div>
    </div>
  </form>
 </div>
</div>


</body>

</html>
