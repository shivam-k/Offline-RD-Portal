<?php  
  include("user-info.php");
?> 
<!DOCTYPE html>
<html>
<head>
		  <title>Events Registration</title>
		  <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    text-align:  : center;
}

td {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    border-color: #555;
    text-align: center;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
th {
    background-color: #555;
    color: white;
   border: 1px solid #FFF;
   text-align:  : center;
}
tr > th {
	text-align: center;
}
</style>
</head>

<body>


</body>


<nav class="navbar navbar-inverse" style="box-shadow: 0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)!important;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand active" href="#" style="color: #01A3E8;">NSSC'16</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="home.php">Home</a></li>
        <li><a href="newPI-R.php">NewPI-R</a></li>
        <li><a href="PI-R.php">PI-R</a></li>
        <li  class="active"><a href="#">Events-R</a></li>
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
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout </a></li>
      </ul>
    </div>
  </div>
</nav>


<div class="well" style="box-shadow: 0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)!important;"> 
   <h2 class="text-center"><kbd style="background-color: #FF4A56;">Go For Events Registration</kbd></h2>
    <blockquote class="col-sm-offset-2"><code>With Great Power Comes Great Responsibility..! Use your Admin Powers Carefully !!</code> </blockquote>
</div>


<?php
$error_pi = "";
$success_pi = "";

if(isset($_POST['submit_pi'])) {
  $info_pi = $_POST['info_pi'];
  if(!empty($info_pi)) {
      $sql = "SELECT * FROM register WHERE pi = '$info_pi'";
      $run_query = mysqli_query($dbcon, $sql);
      if(mysqli_num_rows($run_query) > 0) {
         while($row = mysqli_fetch_assoc($run_query)) {
                 echo $pname = $row['name'];
                  $liftoff_admin = $row['liftoff'];
                  $pi_admin = $row['pi'];
                  $hoverpod_admin = $row['hoverpod'];
                  $spazor_admin = $row['spazor'];
                  $rocrun_admin = $row['rocrun'];
                  $senso_admin= $row['senso'];
                  $paper_admin= $row['paper'];
                  $cases_admin= $row['cases'];
                  $space_admin= $row['space'];
                  $design_admin= $row['design'];
              }

            $_SESSION['pi_admin'] = $pi_admin;
            header("Location: events-R/events-registration.php");
      }
      else {
         $error_pi = "Entered '$info_pi' participants Id does not exists in database.";
      }
  }
}


?>


  <?php
  if(empty($error_pi)) {
    echo '<style type="text/css">
           #error_pi {
                display: none;
           }
           </style>';
    }

    if(empty($success_pi)) {
    echo '<style type="text/css">
           #success_pi {
                display: none;
           }
           </style>';
    }
   ?>


<div class="container col-sm-8 col-sm-offset-2">
  <div class="form-group well col-sm-offset-2 col-sm-8" style="box-shadow: 0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)!important;">
       <!-- alert for danger =========== -->
       <div class="alert alert-danger" id="error_pi">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <p class="text-center"><strong><?php echo $error_pi; ?></strong></p>
       </div>
       <!-- alert for success ============== -->
       <div class="alert alert-success" id="success_pi">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <p class="text-center"><strong><?php echo $success_pi; ?></strong></p>
       </div>
      <form role="form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          <div class="well form-group  col-sm-12" style="box-shadow: 0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)!important;">
           <label for="usr">Participant Id :</label>
           <input type="text" class="form-control input-lg" id="usr" placeholder="Enter Partcipant Id" name="info_pi" value="<?php echo $info_pi; ?>"  required/>
      </div>
        <button type="submit" class="btn btn-primary btn-lg col-sm-offset-2 col-sm-8" name="submit_pi">Go for Events Registration</button>
      </form> </div>
  </div>
</div>




</body>

</html>
