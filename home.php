<?php  
  include("user-info.php");
?> 

<!DOCTYPE html>
<html>
<head>
		  <title>Participants Involvement in fest</title>
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
        <li class="active"><a href="#">Home</a></li>
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
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout </a></li>
      </ul>
    </div>
  </div>
</nav>


<div class="well" style="box-shadow: 0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)!important;"> 
   <h2 class="text-center"><kbd style="background-color: #FF4A56;">Participants Involvement in Fest</kbd></h2>
    <blockquote class="col-sm-offset-2"><code>With Great Power Comes Great Responsibility..! Use your Admin Powers Carefully !!</code> </blockquote>
</div>


<?php
$id = "";
$error_pi = "";
$success_pi = "";
if(isset($_POST['submit_pi'])) {
	$info_pi = $_POST['info_pi'];
	if(!empty($info_pi)) {
		$sql = "SELECT * FROM register WHERE pi = '$info_pi'";
		$run_query = mysqli_query($dbcon, $sql);
		if(mysqli_num_rows($run_query) > 0) {
			$success_pi = "PI is in data base";
			 while($row = mysqli_fetch_assoc($run_query)) {
			 	$id = $row['id'];
		        $name = $row['name'];
		        $email = $row['email'];
		        $collegeId = $row['collegeId'];
		        $dob= $row['dob'];
		        $department = $row['department'];
		        $college = $row['college'];
		        $yog = $row['yog'];
		        $address = $row['address'];
		        $contact = $row['contact'];
		        $pi = $row['pi'];
		        $liftoff = $row['liftoff'];
		        $hoverpod = $row['hoverpod'];
		        $spazor = $row['spazor'];
		        $rocrun = $row['rocrun'];
		        $senso = $row['senso'];
		        $paper = $row['paper'];
		        $cases = $row['cases'];
		        $space = $row['space'];
		        $design = $row['design'];
		        $payment = $row['payment'];
		        $tshirt = $row['tshirt'];
		        $created = $row['created'];
			 }
		}
		else {
			$error_pi = "<b>Such $info_pi does not exit in database.</b>";
		}
	}
}

?>



<?php
$error_email = "";
$success_email = "";
if(isset($_POST['submit_email'])) {
	$info_email = $_POST['info_email'];
	if(!empty($info_email)) {
		$sql = "SELECT * FROM register WHERE email = '$info_email'";
		$run_query = mysqli_query($dbcon, $sql);
		if(mysqli_num_rows($run_query) > 0) {
			$success_email = "Email is in data base";
			 while($row = mysqli_fetch_assoc($run_query)) {
			 	$id = $row['id'];
		        $name = $row['name'];
		        $email = $row['email'];
		        $collegeId = $row['collegeId'];
		        $dob= $row['dob'];
		        $department = $row['department'];
		        $college = $row['college'];
		        $yog = $row['yog'];
		        $address = $row['address'];
		        $contact = $row['contact'];
		        $pi = $row['pi'];
		        $liftoff = $row['liftoff'];
		        $hoverpod = $row['hoverpod'];
		        $spazor = $row['spazor'];
		        $rocrun = $row['rocrun'];
		        $senso = $row['senso'];
		        $paper = $row['paper'];
		        $cases = $row['cases'];
		        $space = $row['space'];
		        $design = $row['design'];
		        $payment = $row['payment'];
		        $tshirt = $row['tshirt'];
		        $created = $row['created'];
			 }
		}
		else {
			$error_email = "<b>Such $info_email does not exit in database.</b>";
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




<?php
  if(empty($error_email)) {
    echo '<style type="text/css">
           #error_email {
                display: none;
           }
           </style>';
    }

    if(empty($success_email)) {
    echo '<style type="text/css">
           #success_email {
                display: none;
           }
           </style>';
    }
   ?>

   <!-- ======================= html for entering PIs and email Ids ========================= -->

<div class="container col-sm-6" >
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
        <button type="submit" class="btn btn-primary btn-md col-sm-offset-2 col-sm-8" name="submit_pi">Submit PI</button>
      </form> </div>
  </div>
</div>


<div class="container col-sm-6">
  <div class="form-group well col-sm-offset-2 col-sm-8" style="box-shadow: 0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)!important;">
       <!-- alert for danger =========== -->
       <div class="alert alert-danger" id="error_email">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <p class="text-center"><strong><?php echo $error_email; ?></strong></p>
       </div>
       <!-- alert for success ============== -->
       <div class="alert alert-success" id="success_email">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <p class="text-center"><strong><?php echo $success_email; ?></strong></p>
       </div>
      <form role="form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          <div class="well form-group  col-sm-12" style="box-shadow: 0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)!important;">
		       <label for="usr">Email Id :</label>
		       <input type="email" class="form-control input-lg" id="email" placeholder="Enter Email Id" name="info_email" value="<?php echo $info_email; ?>"  required/>
		  </div>
        <button type="submit" class="btn btn-primary btn-md col-sm-offset-2 col-sm-8" name="submit_email">Submit Email</button>
      </form> </div><br />
  </div><br />
</div>

<?php

if(empty($name)) {
	 echo '<style type="text/css">
           #basic-info, #liftoff, #hoverpod, #spazor, #rocrun, #senso, #paper, #case, #space, #design {
                display: none;
           }
           </style>';
    }
if(empty($liftoff)) {
	 echo '<style type="text/css">
           #liftoff {
                display: none;
           }
           </style>';
    }

   if(empty($hoverpod)) {
	 echo '<style type="text/css">
           #hoverpod  {
                display: none;
           }
           </style>';
    }
    if(empty($spazor)) {
	 echo '<style type="text/css">
           #spazor {
                display: none;
           }
           </style>';
    }
    if(empty($rocrun)) {
	 echo '<style type="text/css">
           #rocrun {
                display: none;
           }
           </style>';
    }
    if(empty($senso)) {
	 echo '<style type="text/css">
           #senso {
                display: none;
           }
           </style>';
    }
    if(empty($paper)) {
	 echo '<style type="text/css">
           #paper {
                display: none;
           }
           </style>';
    }
    if(empty($cases)) {
	 echo '<style type="text/css">
           #case {
                display: none;
           }
           </style>';
    }
    if(empty($space)) {
	 echo '<style type="text/css">
           #space {
                display: none;
           }
           </style>';
    }
     if(empty($design)) {
	 echo '<style type="text/css">
           #design {
                display: none;
           }
           </style>';
    }

?>

<div class="container" id="basic-info">
	<table class="table table-striped  ">
		<tr>
		    <th>S. No.</th>
		    <th>Name</th>
		    <th>Email</th>
		    <th>CollegeId</th>
		    <th>DOB</th>
		    <th>Deparment</th>
		    <th>College</th>
		    <th>YOG</th>
		    <th>Address</th>
		    <th>Contact</th>
		    <th>pi</th>
		    <th>Liftoff</th>
		    <th>Hoverpod</th>
		    <th>Spazor</th>
		    <th>Rocrun</th>
		    <th>Sensorous</th>
		    <th>Paper Presen..</th>
		    <th>Case Study</th>
		    <th>Space Deb</th>
		    <th>Designeer</th>
		    <th>Payment</th>
		     <th>Tshirt</th>
		    <th>Created</th>
		</tr>
	      <tr> 
	          <td><?php echo $id ?></td>
	          <td><?php echo $name ?></td>
	          <td><?php echo $email ?></td>
	          <td><?php echo $collegeId ?></td>
	          <td><?php echo $dob ?></td>
	          <td><?php echo $department ?></td>
	          <td><?php echo $college ?></td>
	          <td><?php echo $yog ?></td>
	          <td><?php echo $address ?></td>
	          <td><?php echo $contact ?></td>
	          <td><?php echo $pi ; ?></td>
	          <td><?php echo $liftoff ; ?></td>
	          <td><?php echo $hoverpod ; ?></td>
	          <td><?php echo $spazor ; ?></td>
	          <td><?php echo $rocrun ; ?></td>
	          <td><?php echo $senso ; ?></td>
	          <td><?php echo $paper ; ?></td>
	          <td><?php echo $cases ; ?></td> 
	          <td><?php echo $space ; ?></td>
	          <td><?php echo $design ; ?></td>
	          <td><?php echo $payment ; ?></td>
	          <td><?php echo $tshirt ; ?></td>
	          <td><?php echo $created ; ?></td>          
	       </tr>
	</table>
</div>


<!-- =============== Liftoff =================== -->
<div class="container" id="liftoff">
	<h2 class="text-center">Liftoff</h2>
	<table class="table table-striped">
		<tr>
		    <th>S. No.</th>
		    <th>Team Id</th>
		    <th>Participant 1</th>
		    <th>Participant 2</th>
		    <th>Participant 3</th>
		    <th>Participant 4</th>
		    <th>Slot</th>
		</tr>
		<?php
		$getpname = "SELECT * FROM lfevent WHERE teamid = '$liftoff'";
		$run_query = mysqli_query($dbcon, $getpname);
		if(mysqli_num_rows($run_query) > 0) {
		    while($row = mysqli_fetch_assoc($run_query)) {
		        $id = $row['id'];
		        $teamid = $row['teamid'];
		        $pi1 = $row['pi1'];
		        $pi2 = $row['pi2'];
		        $pi3 = $row['pi3'];
		        $pi4 = $row['pi4'];
		    }

         $getpname = "SELECT * FROM register WHERE pi = '$pi2'";
		 $run_query = mysqli_query($dbcon, $getpname);
		 if(mysqli_num_rows($run_query) > 0) {
	      	while($row = mysqli_fetch_assoc($run_query)) {
               $name2_lf = $row['name'];
	      }
	    }
	    $getpname = "SELECT * FROM register WHERE pi = '$pi3'";
		 $run_query = mysqli_query($dbcon, $getpname);
		 if(mysqli_num_rows($run_query) > 0) {
	      	while($row = mysqli_fetch_assoc($run_query)) {
               $name3_lf = $row['name'];
	      }
	    }
	    $getpname = "SELECT * FROM register WHERE pi = '$pi4'";
		 $run_query = mysqli_query($dbcon, $getpname);
		 if(mysqli_num_rows($run_query) > 0) {
	      	while($row = mysqli_fetch_assoc($run_query)) {
               $name4_lf = $row['name'];
	      }
	    }

		      ?>
		       <tr> 
		          <td><?php echo $id ?></td>
		          <td><?php echo $teamid ?></td>
		          <td><?php echo $pi1 ?>, <?php echo $name; ?></td>
		          <td><?php echo $pi2 ?>, <?php echo $name2_lf; ?></td>
		          <td><?php echo $pi3 ?>, <?php echo $name3_lf; ?></td>
		          <td><?php echo $pi4 ?>, <?php echo $name4_lf; ?></td>
		          <td><?php echo $slot ?></td>
		       </tr> 
		      <?php
		}

		?>
	</table>

</div>


<!-- ============ hovepod ================= -->
<div class="container" id="hoverpod">
	<h2 class="text-center">Hoverpod</h2>
	<table class="table table-striped">
		<tr>
		    <th>S. No.</th>
		    <th>Team Id</th>
		    <th>Participant 1</th>
		    <th>Participant 2</th>
		    <th>Participant 3</th>
		    <th>Participant 4</th>
		    <th>Participant 5</th>
		    <th>Slot</th>
		</tr>
		<?php
		$getpname = "SELECT * FROM hpevent WHERE teamid = '$hoverpod'";
		$run_query = mysqli_query($dbcon, $getpname);
		if(mysqli_num_rows($run_query) > 0) {

		    while($row = mysqli_fetch_assoc($run_query)) {
		        $id = $row['id'];
		        $teamid = $row['teamid'];
		        $pi1 = $row['pi1'];
		        $pi2 = $row['pi2'];
		        $pi3 = $row['pi3'];
		        $pi4 = $row['pi4'];
		        $pi5 = $row['pi5'];
		    }

		 $getpname = "SELECT * FROM register WHERE pi = '$pi2'";
		 $run_query = mysqli_query($dbcon, $getpname);
		 if(mysqli_num_rows($run_query) > 0) {
	      	while($row = mysqli_fetch_assoc($run_query)) {
               $name2_hp = $row['name'];
	      }
	    }
	    $getpname = "SELECT * FROM register WHERE pi = '$pi3'";
		 $run_query = mysqli_query($dbcon, $getpname);
		 if(mysqli_num_rows($run_query) > 0) {
	      	while($row = mysqli_fetch_assoc($run_query)) {
               $name3_hp = $row['name'];
	      }
	    }
	    $getpname = "SELECT * FROM register WHERE pi = '$pi4'";
		 $run_query = mysqli_query($dbcon, $getpname);
		 if(mysqli_num_rows($run_query) > 0) {
	      	while($row = mysqli_fetch_assoc($run_query)) {
               $name4_hp = $row['name'];
	      }
	    }

	    $getpname = "SELECT * FROM register WHERE pi = '$pi5'";
		 $run_query = mysqli_query($dbcon, $getpname);
		 if(mysqli_num_rows($run_query) > 0) {
	      	while($row = mysqli_fetch_assoc($run_query)) {
               $name5_hp = $row['name'];
	      }
	    }

		      ?>
		       <tr> 
		          <td><?php echo $id ?></td>
		          <td><?php echo $teamid ?></td>
		          <td><?php echo $pi1 ?>, <?php echo $name; ?></td>
		          <td><?php echo $pi2 ?>, <?php echo $name2_hp; ?></td>
		          <td><?php echo $pi3 ?>, <?php echo $name3_hp; ?></td>
		          <td><?php echo $pi4 ?>, <?php echo $name4_hp; ?></td>
		          <td><?php echo $pi5 ?>, <?php echo $name5_hp; ?></td>
		          <td><?php echo $slot ?></td>
		       </tr> 
		      <?php

		}

		?>
	</table>
</div>


<!-- =============== Spazor ============= -->
<div class="container" id="spazor">
	<h2 class="text-center">Spazor</h2>	
	<table class="table table-striped">
		<tr>
		    <th>S. No.</th>
		    <th>Team Id</th>
		    <th>Participant 1</th>
		    <th>Participant 2</th>
		    <th>Participant 3</th>
		    <th>Participant 4</th>
		    <th>Participant 5</th>
		    <th>Slot</th>
		</tr>

		<?php
		$getpname = "SELECT * FROM spevent WHERE teamid='$spazor'";
		$run_query = mysqli_query($dbcon, $getpname);
		if(mysqli_num_rows($run_query) > 0) {

		    while($row = mysqli_fetch_assoc($run_query)) {
		        $id = $row['id'];
		        $teamid = $row['teamid'];
		        $pi1 = $row['pi1'];
		        $pi2 = $row['pi2'];
		        $pi3 = $row['pi3'];
		        $pi4 = $row['pi4'];
		        $pi5 = $row['pi5'];
		    }

          $getpname = "SELECT * FROM register WHERE pi = '$pi2'";
		 $run_query = mysqli_query($dbcon, $getpname);
		 if(mysqli_num_rows($run_query) > 0) {
	      	while($row = mysqli_fetch_assoc($run_query)) {
               $name2_sp = $row['name'];
	      }
	    }
	    $getpname = "SELECT * FROM register WHERE pi = '$pi3'";
		 $run_query = mysqli_query($dbcon, $getpname);
		 if(mysqli_num_rows($run_query) > 0) {
	      	while($row = mysqli_fetch_assoc($run_query)) {
               $name3_sp = $row['name'];
	      }
	    }
	    $getpname = "SELECT * FROM register WHERE pi = '$pi4'";
		 $run_query = mysqli_query($dbcon, $getpname);
		 if(mysqli_num_rows($run_query) > 0) {
	      	while($row = mysqli_fetch_assoc($run_query)) {
               $name4_sp = $row['name'];
	      }
	    }

	    $getpname = "SELECT * FROM register WHERE pi = '$pi5'";
		 $run_query = mysqli_query($dbcon, $getpname);
		 if(mysqli_num_rows($run_query) > 0) {
	      	while($row = mysqli_fetch_assoc($run_query)) {
               $name5_sp = $row['name'];
	      }
	    }

		      ?>
		       <tr> 
		          <td><?php echo $id ?></td>
		          <td><?php echo $teamid ?></td>
		          <td><?php echo $pi1 ?>, <?php echo $name; ?></td>
		          <td><?php echo $pi2 ?>, <?php echo $name2_sp; ?></td>
		          <td><?php echo $pi3 ?>, <?php echo $name3_sp; ?></td>
		          <td><?php echo $pi4 ?>, <?php echo $name4_sp; ?></td>
		          <td><?php echo $pi5 ?>, <?php echo $name5_sp; ?></td>
		          <td><?php echo $slot ?></td>
		       </tr> 
		      <?php


		}
		?>
	</table>
</div>



<!-- =============== Rocrun ============= -->
<div class="container" id="rocrun">
	<h2 class="text-center">Rocrun</h2>	
	<table class="table table-striped">
		<tr>
		    <th>S. No.</th>
		    <th>Team Id</th>
		    <th>Participant 1</th>
		    <th>Participant 2</th>
		    <th>Participant 3</th>
		    <th>Participant 4</th>
		    <th>Participant 5</th>
		    <th>Slot</th>
		</tr>
		<?php

		$getpname = "SELECT * FROM rcevent WHERE teamid = '$rocrun'";
		$run_query = mysqli_query($dbcon, $getpname);
		if(mysqli_num_rows($run_query) > 0) {

		    while($row = mysqli_fetch_assoc($run_query)) {
		        $id = $row['id'];
		        $teamid = $row['teamid'];
		        $pi1 = $row['pi1'];
		        $pi2 = $row['pi2'];
		        $pi3 = $row['pi3'];
		        $pi4 = $row['pi4'];
		        $pi5 = $row['pi5'];
		    }

         $getpname = "SELECT * FROM register WHERE pi = '$pi2'";
		 $run_query = mysqli_query($dbcon, $getpname);
		 if(mysqli_num_rows($run_query) > 0) {
	      	while($row = mysqli_fetch_assoc($run_query)) {
               $name2_rc = $row['name'];
	      }
	    }
	    $getpname = "SELECT * FROM register WHERE pi = '$pi3'";
		 $run_query = mysqli_query($dbcon, $getpname);
		 if(mysqli_num_rows($run_query) > 0) {
	      	while($row = mysqli_fetch_assoc($run_query)) {
               $name3_rc = $row['name'];
	      }
	    }
	    $getpname = "SELECT * FROM register WHERE pi = '$pi4'";
		 $run_query = mysqli_query($dbcon, $getpname);
		 if(mysqli_num_rows($run_query) > 0) {
	      	while($row = mysqli_fetch_assoc($run_query)) {
               $name4_rc = $row['name'];
	      }
	    }

	    $getpname = "SELECT * FROM register WHERE pi = '$pi5'";
		 $run_query = mysqli_query($dbcon, $getpname);
		 if(mysqli_num_rows($run_query) > 0) {
	      	while($row = mysqli_fetch_assoc($run_query)) {
               $name5_rc = $row['name'];
	      }
	    }

		      ?>
		       <tr> 
		          <td><?php echo $id ?></td>
		          <td><?php echo $teamid ?></td>
		          <td><?php echo $pi1 ?>, <?php echo $name; ?></td>
		          <td><?php echo $pi2 ?>, <?php echo $name2_rc; ?></td>
		          <td><?php echo $pi3 ?>, <?php echo $name3_rc; ?></td>
		          <td><?php echo $pi4 ?>, <?php echo $name4_rc; ?></td>
		          <td><?php echo $pi5 ?>, <?php echo $name5_rc; ?></td>
		          <td><?php echo $slot ?></td>
		       </tr> 
		      <?php


		}

		?>
	</table>

</div>



<!-- =============== Sensorous ============= -->
<div class="container" id="senso">
	<h2 class="text-center">Sensorous</h2>	
	<table class="table table-striped">
		<tr>
		    <th>S. No.</th>
		    <th>Team Id</th>
		    <th>Participant 1</th>
		    <th>Participant 2</th>
		    <th>Participant 3</th>
		    <th>Participant 4</th>
		    <th>Slot</th>
		</tr>
		<?php

		$getpname = "SELECT * FROM ssevent WHERE teamid = '$senso'";
		$run_query = mysqli_query($dbcon, $getpname);
		if(mysqli_num_rows($run_query) > 0) {

		    while($row = mysqli_fetch_assoc($run_query)) {
		        $id = $row['id'];
		        $teamid = $row['teamid'];
		        $pi1 = $row['pi1'];
		        $pi2 = $row['pi2'];
		        $pi3 = $row['pi3'];
		        $pi4 = $row['pi4'];
		    }

        $getpname = "SELECT * FROM register WHERE pi = '$pi2'";
		 $run_query = mysqli_query($dbcon, $getpname);
		 if(mysqli_num_rows($run_query) > 0) {
	      	while($row = mysqli_fetch_assoc($run_query)) {
               $name2_ss = $row['name'];
	      }
	    }
	    $getpname = "SELECT * FROM register WHERE pi = '$pi3'";
		 $run_query = mysqli_query($dbcon, $getpname);
		 if(mysqli_num_rows($run_query) > 0) {
	      	while($row = mysqli_fetch_assoc($run_query)) {
               $name3_ss = $row['name'];
	      }
	    }
	    $getpname = "SELECT * FROM register WHERE pi = '$pi4'";
		 $run_query = mysqli_query($dbcon, $getpname);
		 if(mysqli_num_rows($run_query) > 0) {
	      	while($row = mysqli_fetch_assoc($run_query)) {
               $name4_ss = $row['name'];
	      }
	    }

		      ?>
		       <tr> 
		          <td><?php echo $id ?></td>
		          <td><?php echo $teamid ?></td>
		          <td><?php echo $pi1 ?>, <?php echo $name; ?></td>
		          <td><?php echo $pi2 ?>, <?php echo $name2_ss; ?></td>
		          <td><?php echo $pi3 ?>, <?php echo $name3_ss; ?></td>
		          <td><?php echo $pi4 ?>, <?php echo $name4_ss; ?></td>
		          <td><?php echo $slot ?></td>
		       </tr> 
		      <?php

		}

		?>
	</table>


</div>


<!-- =============== Paper Presentation ============= -->
<div class="container" id="paper">
	<h2 class="text-center">Paper Presentation</h2>	
	<table class="table table-striped">
		<tr>
		    <th>S. No.</th>
		    <th>Team Id</th>
		    <th>Participant 1</th>
		    <th>Participant 2</th>
		    <th>Participant 3</th>
		    <th>Participant 4</th>
		    <th>Participant 5</th>
		    <th>Slot</th>
		</tr>
		<?php
		$getpname = "SELECT * FROM ppevent WHERE teamid = '$paper'";
		$run_query = mysqli_query($dbcon, $getpname);
		if(mysqli_num_rows($run_query) > 0) {

		    while($row = mysqli_fetch_assoc($run_query)) {
		        $id = $row['id'];
		        $teamid = $row['teamid'];
		        $pi1 = $row['pi1'];
		        $pi2 = $row['pi2'];
		        $pi3 = $row['pi3'];
		        $pi4 = $row['pi4'];
		        $pi5 = $row['pi5'];
		    }

         $getpname = "SELECT * FROM register WHERE pi = '$pi2'";
		 $run_query = mysqli_query($dbcon, $getpname);
		 if(mysqli_num_rows($run_query) > 0) {
	      	while($row = mysqli_fetch_assoc($run_query)) {
               $name2_pp = $row['name'];
	      }
	    }
	    $getpname = "SELECT * FROM register WHERE pi = '$pi3'";
		 $run_query = mysqli_query($dbcon, $getpname);
		 if(mysqli_num_rows($run_query) > 0) {
	      	while($row = mysqli_fetch_assoc($run_query)) {
               $name3_pp = $row['name'];
	      }
	    }
	    $getpname = "SELECT * FROM register WHERE pi = '$pi4'";
		 $run_query = mysqli_query($dbcon, $getpname);
		 if(mysqli_num_rows($run_query) > 0) {
	      	while($row = mysqli_fetch_assoc($run_query)) {
               $name4_pp = $row['name'];
	      }
	    }

	    $getpname = "SELECT * FROM register WHERE pi = '$pi5'";
		 $run_query = mysqli_query($dbcon, $getpname);
		 if(mysqli_num_rows($run_query) > 0) {
	      	while($row = mysqli_fetch_assoc($run_query)) {
               $name5_pp = $row['name'];
	      }
	    }

		      ?>
		       <tr> 
		          <td><?php echo $id ?></td>
		          <td><?php echo $teamid ?></td>
		          <td><?php echo $pi1 ?>, <?php echo $name; ?></td>
		          <td><?php echo $pi2 ?>, <?php echo $name2_pp; ?></td>
		          <td><?php echo $pi3 ?>, <?php echo $name3_pp; ?></td>
		          <td><?php echo $pi4 ?>, <?php echo $name4_pp; ?></td>
		          <td><?php echo $pi5 ?>, <?php echo $name5_pp; ?></td>
		          <td><?php echo $slot ?></td>
		       </tr> 
		      <?php

		}

		?>
	</table>


</div>

<!-- =============== Case Study ============= -->
<div class="container" id="case">
	<h2 class="text-center">Case Study</h2>	
	<table class="table table-striped">
		<tr>
		    <th>S. No.</th>
		    <th>Team Id</th>
		    <th>Participant 1</th>
		    <th>Participant 2</th>
		    <th>Participant 3</th>
		    <th>Participant 4</th>
		    <th>Slot</th>
		</tr>
		<?php
		$getpname = "SELECT * FROM csevent WHERE teamid = '$cases'";
		$run_query = mysqli_query($dbcon, $getpname);
		if(mysqli_num_rows($run_query) > 0) {
		    while($row = mysqli_fetch_assoc($run_query)) {
		        $id = $row['id'];
		        $teamid = $row['teamid'];
		        $pi1 = $row['pi1'];
		        $pi2 = $row['pi2'];
		        $pi3 = $row['pi3'];
		        $pi4 = $row['pi4'];
		    }
 
         $getpname = "SELECT * FROM register WHERE pi = '$pi2'";
		 $run_query = mysqli_query($dbcon, $getpname);
		 if(mysqli_num_rows($run_query) > 0) {
	      	while($row = mysqli_fetch_assoc($run_query)) {
               $name2_cs = $row['name'];
	      }
	    }
	    $getpname = "SELECT * FROM register WHERE pi = '$pi3'";
		 $run_query = mysqli_query($dbcon, $getpname);
		 if(mysqli_num_rows($run_query) > 0) {
	      	while($row = mysqli_fetch_assoc($run_query)) {
               $name3_cs = $row['name'];
	      }
	    }
	    $getpname = "SELECT * FROM register WHERE pi = '$pi4'";
		 $run_query = mysqli_query($dbcon, $getpname);
		 if(mysqli_num_rows($run_query) > 0) {
	      	while($row = mysqli_fetch_assoc($run_query)) {
               $name4_cs = $row['name'];
	      }
	    }

		      ?>
		       <tr> 
		          <td><?php echo $id ?></td>
		          <td><?php echo $teamid ?></td>
		          <td><?php echo $pi1 ?>, <?php echo $name; ?></td>
		          <td><?php echo $pi2 ?>, <?php echo $name2_cs; ?></td>
		          <td><?php echo $pi3 ?>, <?php echo $name3_cs; ?></td>
		          <td><?php echo $pi4 ?>, <?php echo $name4_cs; ?></td>
		          <td><?php echo $slot ?></td>
		       </tr> 
		      <?php


		}

		?>
	</table>


</div>


<!-- =============== Space Deb ============= -->
<div class="container" id="space">
	<h2 class="text-center">Space Deb</h2>	
	<table class="table table-striped">
		<tr>
		    <th>S. No.</th>
		    <th>Team Id</th>
		    <th>Participant 1</th>
		    <th>Participant 2</th>
		    <th>Participant 3</th>
		    <th>Slot</th>
		</tr>
		<?php
		$getpname = "SELECT * FROM sdevent WHERE teamid = '$space'";
		$run_query = mysqli_query($dbcon, $getpname);
		if(mysqli_num_rows($run_query) > 0) {

		    while($row = mysqli_fetch_assoc($run_query)) {
		        $id = $row['id'];
		        $teamid = $row['teamid'];
		        $pi1 = $row['pi1'];
		        $pi2 = $row['pi2'];
		        $pi3 = $row['pi3'];
		    }

         $getpname = "SELECT * FROM register WHERE pi = '$pi2'";
		 $run_query = mysqli_query($dbcon, $getpname);
		 if(mysqli_num_rows($run_query) > 0) {
	      	while($row = mysqli_fetch_assoc($run_query)) {
               $name2_sd = $row['name'];
	      }
	    }
	    $getpname = "SELECT * FROM register WHERE pi = '$pi3'";
		 $run_query = mysqli_query($dbcon, $getpname);
		 if(mysqli_num_rows($run_query) > 0) {
	      	while($row = mysqli_fetch_assoc($run_query)) {
               $name3_sd = $row['name'];
	      }
	    }
		      ?>
		       <tr> 
		          <td><?php echo $id ?></td>
		          <td><?php echo $teamid ?></td>
		          <td><?php echo $pi1 ?>, <?php echo $name; ?></td>
		          <td><?php echo $pi2 ?>, <?php echo $name2_sd; ?></td>
		          <td><?php echo $pi3 ?>, <?php echo $name3_sd; ?></td>
		          <td><?php echo $slot ?></td>
		       </tr> 
		      <?php

		}

		?>
	</table>


</div>


<!-- =============== Designeer ============= -->
<div class="container" id="design">
	<h2 class="text-center">Designeer</h2>	
	<table class="table table-striped">
		<tr>
		    <th>S. No.</th>
		    <th>Team Id</th>
		    <th>Participant 1</th>
		    <th>Participant 2</th>
		    <th>Participant 3</th>
		    <th>Slot</th>
		</tr>
		<?php
		$getpname = "SELECT * FROM deevent WHERE teamid = '$design'";
		$run_query = mysqli_query($dbcon, $getpname);
		if(mysqli_num_rows($run_query) > 0) {

		    while($row = mysqli_fetch_assoc($run_query)) {
		        $id = $row['id'];
		        $teamid = $row['teamid'];
		        $pi1 = $row['pi1'];
		        $pi2 = $row['pi2'];
		        $pi3 = $row['pi3'];
		    }

		$getpname = "SELECT * FROM register WHERE pi = '$pi2'";
		 $run_query = mysqli_query($dbcon, $getpname);
		 if(mysqli_num_rows($run_query) > 0) {
	      	while($row = mysqli_fetch_assoc($run_query)) {
               $name2_de = $row['name'];
	      }
	    }
	    $getpname = "SELECT * FROM register WHERE pi = '$pi3'";
		 $run_query = mysqli_query($dbcon, $getpname);
		 if(mysqli_num_rows($run_query) > 0) {
	      	while($row = mysqli_fetch_assoc($run_query)) {
               $name3_de = $row['name'];
	      }
	    }
		      ?>
		       <tr> 
		          <td><?php echo $id ?></td>
		          <td><?php echo $teamid ?></td>
		          <td><?php echo $pi1 ?>, <?php echo $name; ?></td>
		          <td><?php echo $pi2 ?>, <?php echo $name2_de; ?></td>
		          <td><?php echo $pi3 ?>, <?php echo $name3_de; ?></td>
		          <td><?php echo $slot ?></td>
		       </tr> 
		      <?php

		}

		?>
	</table>


</div>


</html>
