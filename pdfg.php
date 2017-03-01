<?php  
  session_start();
  include("user-info.php");
  if($_SESSION['pi_edit'] || $_SESSION['email_edit']) {
    $pi_edit = $_SESSION['pi_edit'];
    $email_edit = $_SESSION['email_edit'];
  }
  else {
    header("Location: PI-R.php");
  }
?> 
<!DOCTYPE html>
<html>
<head>
		  <title>Verification with PDF Generation</title>
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
   border: 1px solid #FF4A56;
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
        <li class="active"><a href="PI-R.php">PI-R</a></li>
        <li><a href="events-R.php">Events-R</a></li>
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
   <h2 class="text-center"><kbd style="background-color: #FF4A56;">Verification with PDF Generation</kbd></h2>
    <blockquote class="col-sm-offset-2"><code>With Great Power Comes Great Responsibility..! Use your Admin Powers Carefully !!</code> </blockquote>
</div>


<?php
$id = "";
$error_pi = "";
$success_pi = "";

  if(!empty($pi_edit)) {
    $sql = "SELECT * FROM register WHERE pi = '$pi_edit'";
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
      $error_pi = "<b>Participant Id $info_pi does not exit in database.</b>";
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

<div class="container" >

    
</div>




<!-- *******************************================== teamwise =========================************************ -->

<!-- =============== Liftoff =================== -->
<div class="container">
  <?php
    $getpname = "SELECT * FROM lfevent WHERE teamid = '$liftoff'";
    $run_query = mysqli_query($dbcon, $getpname);
    if(mysqli_num_rows($run_query) > 0) {
        while($row = mysqli_fetch_assoc($run_query)) {
            $teamid_lf = $row['teamid'];
            $pi1_lf = $row['pi1'];
            $pi2_lf = $row['pi2'];
            $pi3_lf = $row['pi3'];
            $pi4_lf = $row['pi4'];
        }

        $getpname = "SELECT * FROM register WHERE pi = '$pi1_lf'";
       $run_query = mysqli_query($dbcon, $getpname);
       if(mysqli_num_rows($run_query) > 0) {
            while($row = mysqli_fetch_assoc($run_query)) {
                 $name1_lf = $row['name'];
          }
        }
           $getpname = "SELECT * FROM register WHERE pi = '$pi2_lf'";
       $run_query = mysqli_query($dbcon, $getpname);
       if(mysqli_num_rows($run_query) > 0) {
            while($row = mysqli_fetch_assoc($run_query)) {
                 $name2_lf = $row['name'];
          }
        }
        $getpname = "SELECT * FROM register WHERE pi = '$pi3_lf'";
       $run_query = mysqli_query($dbcon, $getpname);
       if(mysqli_num_rows($run_query) > 0) {
            while($row = mysqli_fetch_assoc($run_query)) {
                 $name3_lf = $row['name'];
          }
        }
        $getpname = "SELECT * FROM register WHERE pi = '$pi4_lf'";
       $run_query = mysqli_query($dbcon, $getpname);
       if(mysqli_num_rows($run_query) > 0) {
            while($row = mysqli_fetch_assoc($run_query)) {
                 $name4_lf = $row['name'];
          }
        }

    }

  ?>

</div>

<!-- =============== Hoverpod =================== -->
<div class="container" >
  <?php
    $getpname = "SELECT * FROM hpevent WHERE teamid = '$hoverpod'";
    $run_query = mysqli_query($dbcon, $getpname);
    if(mysqli_num_rows($run_query) > 0) {
        while($row = mysqli_fetch_assoc($run_query)) {
            $teamid_hp = $row['teamid'];
            $pi1_hp = $row['pi1'];
            $pi2_hp = $row['pi2'];
            $pi3_hp = $row['pi3'];
            $pi4_hp = $row['pi4'];
            $pi5_hp = $row['pi5'];
        }

        $getpname = "SELECT * FROM register WHERE pi = '$pi1_hp'";
       $run_query = mysqli_query($dbcon, $getpname);
       if(mysqli_num_rows($run_query) > 0) {
            while($row = mysqli_fetch_assoc($run_query)) {
                 $name1_hp = $row['name'];
          }
        }
           $getpname = "SELECT * FROM register WHERE pi = '$pi2_hp'";
       $run_query = mysqli_query($dbcon, $getpname);
       if(mysqli_num_rows($run_query) > 0) {
            while($row = mysqli_fetch_assoc($run_query)) {
                 $name2_hp = $row['name'];
          }
        }
        $getpname = "SELECT * FROM register WHERE pi = '$pi3_hp'";
       $run_query = mysqli_query($dbcon, $getpname);
       if(mysqli_num_rows($run_query) > 0) {
            while($row = mysqli_fetch_assoc($run_query)) {
                 $name3_hp = $row['name'];
          }
        }
        $getpname = "SELECT * FROM register WHERE pi = '$pi4_hp'";
       $run_query = mysqli_query($dbcon, $getpname);
       if(mysqli_num_rows($run_query) > 0) {
            while($row = mysqli_fetch_assoc($run_query)) {
                 $name4_hp = $row['name'];
          }
        }
        $getpname = "SELECT * FROM register WHERE pi = '$pi5_hp'";
       $run_query = mysqli_query($dbcon, $getpname);
       if(mysqli_num_rows($run_query) > 0) {
            while($row = mysqli_fetch_assoc($run_query)) {
                 $name5_hp = $row['name'];
          }
        }

    }

  ?>

</div>

<!-- =============== Spazor =================== -->
<div class="container">
  <?php
    $getpname = "SELECT * FROM spevent WHERE teamid = '$spazor'";
    $run_query = mysqli_query($dbcon, $getpname);
    if(mysqli_num_rows($run_query) > 0) {
        while($row = mysqli_fetch_assoc($run_query)) {
            $teamid_sp = $row['teamid'];
            $pi1_sp = $row['pi1'];
            $pi2_sp = $row['pi2'];
            $pi3_sp = $row['pi3'];
            $pi4_sp = $row['pi4'];
            $pi5_sp = $row['pi5'];
        }

        $getpname = "SELECT * FROM register WHERE pi = '$pi1_sp'";
       $run_query = mysqli_query($dbcon, $getpname);
       if(mysqli_num_rows($run_query) > 0) {
            while($row = mysqli_fetch_assoc($run_query)) {
                 $name1_sp = $row['name'];
          }
        }
           $getpname = "SELECT * FROM register WHERE pi = '$pi2_sp'";
       $run_query = mysqli_query($dbcon, $getpname);
       if(mysqli_num_rows($run_query) > 0) {
            while($row = mysqli_fetch_assoc($run_query)) {
                 $name2_sp = $row['name'];
          }
        }
        $getpname = "SELECT * FROM register WHERE pi = '$pi3_sp'";
       $run_query = mysqli_query($dbcon, $getpname);
       if(mysqli_num_rows($run_query) > 0) {
            while($row = mysqli_fetch_assoc($run_query)) {
                 $name3_sp = $row['name'];
          }
        }
        $getpname = "SELECT * FROM register WHERE pi = '$pi4_sp'";
       $run_query = mysqli_query($dbcon, $getpname);
       if(mysqli_num_rows($run_query) > 0) {
            while($row = mysqli_fetch_assoc($run_query)) {
                 $name4_sp = $row['name'];
          }
        }
        $getpname = "SELECT * FROM register WHERE pi = '$pi5_sp'";
       $run_query = mysqli_query($dbcon, $getpname);
       if(mysqli_num_rows($run_query) > 0) {
            while($row = mysqli_fetch_assoc($run_query)) {
                 $name5_sp = $row['name'];
          }
        }

    }

  ?>

</div>

<!-- =============== Rocrun =================== -->
<div class="container">
  <?php
    $getpname = "SELECT * FROM rcevent WHERE teamid = '$rocrun'";
    $run_query = mysqli_query($dbcon, $getpname);
    if(mysqli_num_rows($run_query) > 0) {
        while($row = mysqli_fetch_assoc($run_query)) {
            $teamid_rc = $row['teamid'];
            $pi1_rc = $row['pi1'];
            $pi2_rc = $row['pi2'];
            $pi3_rc = $row['pi3'];
            $pi4_rc = $row['pi4'];
            $pi5_rc = $row['pi5'];
        }

        $getpname = "SELECT * FROM register WHERE pi = '$pi1_rc'";
       $run_query = mysqli_query($dbcon, $getpname);
       if(mysqli_num_rows($run_query) > 0) {
            while($row = mysqli_fetch_assoc($run_query)) {
                 $name1_rc = $row['name'];
          }
        }
           $getpname = "SELECT * FROM register WHERE pi = '$pi2_rc'";
       $run_query = mysqli_query($dbcon, $getpname);
       if(mysqli_num_rows($run_query) > 0) {
            while($row = mysqli_fetch_assoc($run_query)) {
                 $name2_rc = $row['name'];
          }
        }
        $getpname = "SELECT * FROM register WHERE pi = '$pi3_rc'";
       $run_query = mysqli_query($dbcon, $getpname);
       if(mysqli_num_rows($run_query) > 0) {
            while($row = mysqli_fetch_assoc($run_query)) {
                 $name3_rc = $row['name'];
          }
        }
        $getpname = "SELECT * FROM register WHERE pi = '$pi4_rc'";
       $run_query = mysqli_query($dbcon, $getpname);
       if(mysqli_num_rows($run_query) > 0) {
            while($row = mysqli_fetch_assoc($run_query)) {
                 $name4_rc = $row['name'];
          }
        }
        $getpname = "SELECT * FROM register WHERE pi = '$pi5_rc'";
       $run_query = mysqli_query($dbcon, $getpname);
       if(mysqli_num_rows($run_query) > 0) {
            while($row = mysqli_fetch_assoc($run_query)) {
                 $name5_rc = $row['name'];
          }
        }

    }

  ?>

</div>

<!-- =============== Sensorous =================== -->
<div class="container">
  <?php
    $getpname = "SELECT * FROM ssevent WHERE teamid = '$senso'";
    $run_query = mysqli_query($dbcon, $getpname);
    if(mysqli_num_rows($run_query) > 0) {
        while($row = mysqli_fetch_assoc($run_query)) {
            $teamid_ss = $row['teamid'];
            $pi1_ss = $row['pi1'];
            $pi2_ss = $row['pi2'];
            $pi3_ss = $row['pi3'];
            $pi4_ss = $row['pi4'];
        }

        $getpname = "SELECT * FROM register WHERE pi = '$pi1_ss'";
       $run_query = mysqli_query($dbcon, $getpname);
       if(mysqli_num_rows($run_query) > 0) {
            while($row = mysqli_fetch_assoc($run_query)) {
                 $name1_ss = $row['name'];
          }
        }
           $getpname = "SELECT * FROM register WHERE pi = '$pi2_ss'";
       $run_query = mysqli_query($dbcon, $getpname);
       if(mysqli_num_rows($run_query) > 0) {
            while($row = mysqli_fetch_assoc($run_query)) {
                 $name2_ss = $row['name'];
          }
        }
        $getpname = "SELECT * FROM register WHERE pi = '$pi3_ss'";
       $run_query = mysqli_query($dbcon, $getpname);
       if(mysqli_num_rows($run_query) > 0) {
            while($row = mysqli_fetch_assoc($run_query)) {
                 $name3_ss = $row['name'];
          }
        }
        $getpname = "SELECT * FROM register WHERE pi = '$pi4_ss'";
       $run_query = mysqli_query($dbcon, $getpname);
       if(mysqli_num_rows($run_query) > 0) {
            while($row = mysqli_fetch_assoc($run_query)) {
                 $name4_ss = $row['name'];
          }
        }
    }

  ?>

</div>

<!-- =============== Paper Presentation =================== -->
<div class="container">
  <?php
    $getpname = "SELECT * FROM ppevent WHERE teamid = '$paper'";
    $run_query = mysqli_query($dbcon, $getpname);
    if(mysqli_num_rows($run_query) > 0) {
        while($row = mysqli_fetch_assoc($run_query)) {
            $teamid_pp = $row['teamid'];
            $pi1_pp = $row['pi1'];
            $pi2_pp = $row['pi2'];
            $pi3_pp = $row['pi3'];
            $pi4_pp = $row['pi4'];
            $pi5_pp = $row['pi5'];
        }

        $getpname = "SELECT * FROM register WHERE pi = '$pi1_pp'";
       $run_query = mysqli_query($dbcon, $getpname);
       if(mysqli_num_rows($run_query) > 0) {
            while($row = mysqli_fetch_assoc($run_query)) {
                 $name1_pp = $row['name'];
          }
        }
           $getpname = "SELECT * FROM register WHERE pi = '$pi2_pp'";
       $run_query = mysqli_query($dbcon, $getpname);
       if(mysqli_num_rows($run_query) > 0) {
            while($row = mysqli_fetch_assoc($run_query)) {
                 $name2_pp = $row['name'];
          }
        }
        $getpname = "SELECT * FROM register WHERE pi = '$pi3_pp'";
       $run_query = mysqli_query($dbcon, $getpname);
       if(mysqli_num_rows($run_query) > 0) {
            while($row = mysqli_fetch_assoc($run_query)) {
                 $name3_pp = $row['name'];
          }
        }
        $getpname = "SELECT * FROM register WHERE pi = '$pi4_pp'";
       $run_query = mysqli_query($dbcon, $getpname);
       if(mysqli_num_rows($run_query) > 0) {
            while($row = mysqli_fetch_assoc($run_query)) {
                 $name4_pp = $row['name'];
          }
        }
        $getpname = "SELECT * FROM register WHERE pi = '$pi5_pp'";
       $run_query = mysqli_query($dbcon, $getpname);
       if(mysqli_num_rows($run_query) > 0) {
            while($row = mysqli_fetch_assoc($run_query)) {
                 $name5_pp = $row['name'];
          }
        }

    }

  ?>

</div>

<!-- =============== Case Study =================== -->
<div class="container">
  <?php
    $getpname = "SELECT * FROM csevent WHERE teamid = '$cases'";
    $run_query = mysqli_query($dbcon, $getpname);
    if(mysqli_num_rows($run_query) > 0) {
        while($row = mysqli_fetch_assoc($run_query)) {
            $teamid_cs = $row['teamid'];
            $pi1_cs = $row['pi1'];
            $pi2_cs = $row['pi2'];
            $pi3_cs = $row['pi3'];
            $pi4_cs = $row['pi4'];
        }

        $getpname = "SELECT * FROM register WHERE pi = '$pi1_cs'";
       $run_query = mysqli_query($dbcon, $getpname);
       if(mysqli_num_rows($run_query) > 0) {
            while($row = mysqli_fetch_assoc($run_query)) {
                 $name1_cs = $row['name'];
          }
        }
           $getpname = "SELECT * FROM register WHERE pi = '$pi2_cs'";
       $run_query = mysqli_query($dbcon, $getpname);
       if(mysqli_num_rows($run_query) > 0) {
            while($row = mysqli_fetch_assoc($run_query)) {
                 $name2_cs = $row['name'];
          }
        }
        $getpname = "SELECT * FROM register WHERE pi = '$pi3_cs'";
       $run_query = mysqli_query($dbcon, $getpname);
       if(mysqli_num_rows($run_query) > 0) {
            while($row = mysqli_fetch_assoc($run_query)) {
                 $name3_cs = $row['name'];
          }
        }
        $getpname = "SELECT * FROM register WHERE pi = '$pi4_cs'";
       $run_query = mysqli_query($dbcon, $getpname);
       if(mysqli_num_rows($run_query) > 0) {
            while($row = mysqli_fetch_assoc($run_query)) {
                 $name4_cs = $row['name'];
          }
        }
    }

  ?>

</div>

<!-- =============== Space Study =================== -->
<div class="container">
  <?php
    $getpname = "SELECT * FROM sdevent WHERE teamid = '$space'";
    $run_query = mysqli_query($dbcon, $getpname);
    if(mysqli_num_rows($run_query) > 0) {
        while($row = mysqli_fetch_assoc($run_query)) {
            $teamid_sd = $row['teamid'];
            $pi1_sd = $row['pi1'];
            $pi2_sd = $row['pi2'];
            $pi3_sd = $row['pi3'];
        }

        $getpname = "SELECT * FROM register WHERE pi = '$pi1_sd'";
       $run_query = mysqli_query($dbcon, $getpname);
       if(mysqli_num_rows($run_query) > 0) {
            while($row = mysqli_fetch_assoc($run_query)) {
                 $name1_sd = $row['name'];
          }
        }
           $getpname = "SELECT * FROM register WHERE pi = '$pi2_sd'";
       $run_query = mysqli_query($dbcon, $getpname);
       if(mysqli_num_rows($run_query) > 0) {
            while($row = mysqli_fetch_assoc($run_query)) {
                 $name2_sd = $row['name'];
          }
        }
        $getpname = "SELECT * FROM register WHERE pi = '$pi3_sd'";
       $run_query = mysqli_query($dbcon, $getpname);
       if(mysqli_num_rows($run_query) > 0) {
            while($row = mysqli_fetch_assoc($run_query)) {
                 $name3_sd = $row['name'];
          }
        }
    }

  ?>

</div>


<!-- =============== Designeer =================== -->
<div class="container">
  <?php
    $getpname = "SELECT * FROM deevent WHERE teamid = '$design'";
    $run_query = mysqli_query($dbcon, $getpname);
    if(mysqli_num_rows($run_query) > 0) {
        while($row = mysqli_fetch_assoc($run_query)) {
            $teamid_de = $row['teamid'];
            $pi1_de = $row['pi1'];
            $pi2_de = $row['pi2'];
            $pi3_de = $row['pi3'];
        }

       $getpname = "SELECT * FROM register WHERE pi = '$pi1_de'";
       $run_query = mysqli_query($dbcon, $getpname);
       if(mysqli_num_rows($run_query) > 0) {
            while($row = mysqli_fetch_assoc($run_query)) {
                 $name1_de = $row['name'];
          }
        }
       $getpname = "SELECT * FROM register WHERE pi = '$pi2_de'";
       $run_query = mysqli_query($dbcon, $getpname);
       if(mysqli_num_rows($run_query) > 0) {
            while($row = mysqli_fetch_assoc($run_query)) {
                 $name2_de = $row['name'];
          }
        }
       $getpname = "SELECT * FROM register WHERE pi = '$pi3_de'";
       $run_query = mysqli_query($dbcon, $getpname);
       if(mysqli_num_rows($run_query) > 0) {
            while($row = mysqli_fetch_assoc($run_query)) {
                 $name3_de = $row['name'];
          }
        }
    }

  ?>
</div>

<?php

if(isset($_POST['submit-edit'])) {
  $name_edit = $_POST['name_edit'];
  $email_edit = $_POST['email_edit'];
  $collegeId_edit = $_POST['collegeId_edit'];
  $dob_edit = $_POST['dob_edit'];
  $department_edit = $_POST['department_edit'];
  $college_edit = $_POST['college_edit'];
  $address_edit = $_POST['address_edit'];
  $contact_edit = $_POST['contact_edit'];
  $tshirt_edit = $_POST['tshirt_edit'];
  if(!empty($name_edit) && !empty($email_edit) && !empty($collegeId_edit) && !empty($dob_edit) && !empty($department_edit) && !empty($college_edit) && !empty($address_edit) && !empty($contact_edit) && !empty($tshirt_edit)) {
      $sql = "UPDATE register SET name = '$name_edit', email = '$email_edit',  collegeId = '$collegeId_edit', dob = '$dob_edit', department = '$department_edit', college = '$college_edit', address = '$address_edit', contact = '$contact_edit', tshirt = '$tshirt_edit' WHERE email = '$email' ";
      if(mysqli_query($dbcon, $sql)) {
          echo "<script>alert('Successfully updated the the basic details.');</script>";
          ?>
              <script>
                    function Redirect() 
                         {  
                              window.location="pdfg.php"; 
                          }
                         setTimeout('Redirect()', 0);   
               </script>
          <?php
      }
      else {
          echo "<script>alert('pi = $pi Error in updating data !! Call Shivam')</script>";
      }
  }
  else {
     echo "<script>alert('All fields should be filled ')</script>";
  }
}
?>

<?php

if(isset($_POST['submit_payment'])) {
  $make_payment = $_POST['make_payment'];
  if(!empty($make_payment)) {
    if($make_payment == 'yes') {
        $sql = "UPDATE register SET payment = 'yes' WHERE pi = '$pi_edit'";
        if(mysqli_query($dbcon, $sql)) {
          echo "<script>alert('$pi_edit has Successfully made payment.')</script>";
           ?>
              <script>
                    function Redirect() 
                         {  
                              window.location="pdfg.php"; 
                          }
                         setTimeout('Redirect()', 0);   
               </script>
          <?php
        }

    }
    else {
        echo "<script>alert('Default value is zero...no need to update')</script>";
    }
  }
  else {
    echo "<script>alert('Payment box can not be empty..plz put either yes or no...defulat is no')</script>";
  }
}

?>


<!-- ================ html of container =============== -->
<div class="container" id="basic">
  <div class="col-sm-4">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
      <table class="table table-striped">
        <tr>
            <td colspan="10" style="border: 1px solid #FF4A56; color: #FF4A56"><b>BASIC</b></td>
        </tr>
        <tr>
            <th>Name</th>
             <td><input type="text" name="name_edit" value="<?php echo $name ?>" required/></td>
        <tr />
        <tr>
            <th>Email</th>
             <td><input type="email" name="email_edit" value="<?php echo $email ?>" required/></td>
        </tr>
        <tr>
            <th>CollegeId</th>
            <td><input type="text" name="collegeId_edit" value="<?php echo $collegeId ?>" required/></td>
        </tr>
        <tr>
            <th>DOB</th>
             <td><input type="date" name="dob_edit" value="<?php echo $dob ?>" required/></td>
        </tr>
        <tr>
            <th>Deparment</th>
             <td><input type="text" name="department_edit" value="<?php echo $department ?>" required/></td>
        </tr>
        <tr>
            <th>College</th>
             <td><input tpye="text" name="college_edit" value="<?php echo $college ?>" required/></td>
        </tr>
        <tr>
            <th>Address</th>
            <td><input type="text" name="address_edit" value="<?php echo $address ?>" required/></td>
        </tr>
        <tr>
            <th>Contact</th>
            <td><input type="number" name="contact_edit" value="<?php echo $contact ; ?>" required/></td>
        </tr>
        <tr>
            <th>Tshirt</th>
            <td><input type="text" name="tshirt_edit" value="<?php echo $tshirt ; ?>" required/></td>
        </tr>
    
        <tr>
           <td colspan="10"><button type="submit" class="btn btn-primary btn-md col-sm-6 col-sm-offset-3" name="submit-edit">Submit Edit</button></td>
        </tr>
      </table>
    </form>
  </div>
 <!-- ================== events participation =================================== -->
  <div class="col-sm-3">
   <table class="table table-striped">
      <tr>
        <td colspan="10" style="border: 1px solid #FF4A56; color: #FF4A56"><b>EVENT</b></td>
      </tr>
      <tr>
          <th>Payment</th>
          <td><?php echo $payment ; ?></td>
      </tr>
      <tr>
          <th>Participant Id</th>
          <td><?php echo $pi ; ?></td>
      </tr>
      <tr>
          <th>Liftoff</th>
          <td><?php echo $liftoff ; ?></td>
      </tr>
      <tr>
          <th>Hoverpod</th>
          <td><?php echo $hoverpod ; ?></td>
      </tr>
      <tr>
          <th>Spazor</th>
          <td><?php echo $spazor ; ?></td>
      </tr>
      <tr>
          <th>Rocrun</th>
          <td><?php echo $rocrun ; ?></td>
      </tr>
      <tr>
          <th>Sensorous</th>
          <td><?php echo $senso ; ?></td>
      </tr>
      <tr>
          <th>Paper Presentation</th>
          <td><?php echo $paper ; ?></td>
      </tr>
      <tr>
          <th>Case Study</th>
          <td><?php echo $cases ; ?></td>
      </tr>
      <tr>
          <th>Space Deb</th>
          <td><?php echo $space ; ?></td>
      </tr>
      <tr>
          <th>Designeer</th>
          <td><?php echo $design ; ?></td> 
      </tr>
    </table>
  </div>
  <!-- =================== make payment box ============================== -->
   <div id="payment" class="form-group well col-sm-5" style="box-shadow: 0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)!important;">
      <form role="form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
        <div class="well form-group  col-sm-12" style="box-shadow: 0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)!important;">
           <label for="usr">Make Payment here:</label>
           <input type="text" class="form-control input-lg" id="usr" name="make_payment" value="<?php echo $payment; ?>" /><br />
           <button type="submit" class="btn btn-primary btn-md col-sm-offset-2 col-sm-8" name="submit_payment">Make Payment</button>
        </div>
      </form>
   </div>
  
</div> <!-- === end of container -->


<div class="container" id="team">
<div id="liftoff">
  <table class="table table-striped">
    <tr>
      <td colspan="8" style="border: 1px solid #FF4A56; color: #FF4A56"><b>TEAM</b></td>
    </tr>
    <tr>
        <th>Event</th>
        <th>Team Id</th>
        <th>Participant 1</th>
        <th>Participant 2</th>
        <th>Participant 3</th>
        <th>Participant 4</th>
        <th>Participant 5</th>
        <th>Slot</th>
    </tr>
    <tr> 
          <td>Liftoff</td>
            <td><?php echo $teamid_lf ?></td>
            <td><?php echo $pi1_lf ?>, <?php echo $name1_lf; ?></td>
            <td><?php echo $pi2_lf ?>, <?php echo $name2_lf; ?></td>
            <td><?php echo $pi3_lf ?>, <?php echo $name3_lf; ?></td>
            <td><?php echo $pi4_lf ?>, <?php echo $name4_lf; ?></td>
             <td><?php echo $pi5_lf ?>, <?php echo $name5_lf; ?></td>
            <td><?php echo $slot ?></td>
      </tr> 
      <tr> 
          <td>Hoverpod</td>
            <td><?php echo $teamid_hp ?></td>
            <td><?php echo $pi1_hp ?>, <?php echo $name1_hp; ?></td>
            <td><?php echo $pi2_hp ?>, <?php echo $name2_hp; ?></td>
            <td><?php echo $pi3_hp ?>, <?php echo $name3_hp; ?></td>
            <td><?php echo $pi4_hp ?>, <?php echo $name4_hp; ?></td>
            <td><?php echo $pi5_hp ?>, <?php echo $name5_hp; ?></td>
            <td><?php echo $slot ?></td>
      </tr> 
      <tr> 
          <td>Spazor</td>
            <td><?php echo $teamid_sp ?></td>
            <td><?php echo $pi1_sp ?>, <?php echo $name1_sp; ?></td>
            <td><?php echo $pi2_sp ?>, <?php echo $name2_sp; ?></td>
            <td><?php echo $pi3_sp ?>, <?php echo $name3_sp; ?></td>
            <td><?php echo $pi4_sp ?>, <?php echo $name4_sp; ?></td>
            <td><?php echo $pi5_sp ?>, <?php echo $name5_sp; ?></td>
            <td><?php echo $slot ?></td>
      </tr> 
      <tr> 
          <td>Rocrun</td>
            <td><?php echo $teamid_rc ?></td>
            <td><?php echo $pi1_rc ?>, <?php echo $name1_rc; ?></td>
            <td><?php echo $pi2_rc ?>, <?php echo $name2_rc; ?></td>
            <td><?php echo $pi3_rc ?>, <?php echo $name3_rc; ?></td>
            <td><?php echo $pi4_rc ?>, <?php echo $name4_rc; ?></td>
            <td>-------------</td>
            <td><?php echo $slot ?></td>
      </tr> 
       <tr> 
          <td>Sensorous</td>
            <td><?php echo $teamid_ss ?></td>
            <td><?php echo $pi1_ss ?>, <?php echo $name1_ss; ?></td>
            <td><?php echo $pi2_ss ?>, <?php echo $name2_ss; ?></td>
            <td><?php echo $pi3_ss ?>, <?php echo $name3_ss; ?></td>
            <td><?php echo $pi4_ss ?>, <?php echo $name4_ss; ?></td>
            <td><?php echo $pi5_ss ?>, <?php echo $name5_ss; ?></td>
            <td><?php echo $slot ?></td>
      </tr> 
       <tr> 
          <td>Paper Presentation</td>
            <td><?php echo $teamid_pp ?></td>
            <td><?php echo $pi1_pp ?>, <?php echo $name1_pp; ?></td>
            <td><?php echo $pi2_pp ?>, <?php echo $name2_pp; ?></td>
            <td><?php echo $pi3_pp ?>, <?php echo $name3_pp; ?></td>
            <td><?php echo $pi4_pp ?>, <?php echo $name4_pp; ?></td>
            <td><?php echo $pi5_pp ?>, <?php echo $name5_pp; ?></td>
            <td><?php echo $slot ?></td>
      </tr> 
      <tr> 
          <td>Case Study</td>
            <td><?php echo $teamid_cs ?></td>
            <td><?php echo $pi1_cs ?>, <?php echo $name1_cs; ?></td>
            <td><?php echo $pi2_cs ?>, <?php echo $name2_cs; ?></td>
            <td><?php echo $pi3_cs ?>, <?php echo $name3_cs; ?></td>
            <td><?php echo $pi4_cs ?>, <?php echo $name4_cs; ?></td>
            <td>-------------</td>
            <td><?php echo $slot ?></td>
      </tr> 
       <tr> 
          <td>Space Deb</td>
            <td><?php echo $teamid_sd ?></td>
            <td><?php echo $pi1_sd ?>, <?php echo $name1_sd; ?></td>
            <td><?php echo $pi2_sd ?>, <?php echo $name2_sd; ?></td>
            <td><?php echo $pi3_sd ?>, <?php echo $name3_sd; ?></td>
            <td>-------------</td>
            <td>-------------</td>
            <td><?php echo $slot ?></td>
      </tr> 
       <tr> 
          <td>Designeer</td>
            <td><?php echo $teamid_de ?></td>
            <td><?php echo $pi1_de ?>, <?php echo $name1_de; ?></td>
            <td><?php echo $pi2_de ?>, <?php echo $name2_de; ?></td>
            <td><?php echo $pi3_de ?>, <?php echo $name3_de; ?></td>
            <td>-------------</td>
            <td>-------------</td>
            <td><?php echo $slot ?></td>
      </tr> 

  </table>
</div>
</div>


<div class="container col-sm-offset-10" id="pdf">
     <button type="button" class="btn btn-primary"><a href="" style="color: #FFF; text-decoration:none">Generate PDF</a></button>
</div>


<br /><br /><br /><br /><br /><br /><br /><br />





</body>

</html>
