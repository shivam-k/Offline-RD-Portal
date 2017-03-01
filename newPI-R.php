<?php  
  include("user-info.php");
?> 
<!DOCTYPE html>
<head>
		  <title>New Participants Registration</title>
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
}

td, th {
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
}
</style>
</head>


<body>

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
        <li class="active"><a href="#">NewPI-R</a></li>
        <li><a href="PI-R.php">PI-R</a></li>
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
   <h2 class="text-center"><kbd style="background-color: #FF4A56;">Registration for New Participants</kbd></h2>
    <blockquote class="col-sm-offset-2"><code>With Great Power Comes Great Responsibility..! Use your Admin Powers Carefully !!</code> </blockquote>
</div>





<?php
$error = "";
$success= "";

if(isset($_POST['register']))  
{  
    $pname=$_POST['pname'];
    $pemail=$_POST['pemail'];
    $pcollegeId=$_POST['pcollegeId'];
    $pdob=$_POST['pdob'];
    $pdepartment=$_POST['pdepartment'];
    $pcollege = $_POST['pcollege'];
    $pyog =$_POST['pyog'];
    $paddress = $_POST['paddress'];
    $pcontact = $_POST['pcontact'];   
    if(!empty($pname) && !empty($pemail) && !empty($pcollegeId) && !empty($pdob) && !empty($pdob) && !empty($pdepartment) && !empty($pcollege) && !empty($pyog) && !empty($paddress) && !empty($pcontact) )  
    {  
                  $checkemail="SELECT * FROM register WHERE email='$pemail'";  
                  $run_query=mysqli_query($dbcon,$checkemail);  
                  if(mysqli_num_rows($run_query)>0)  
                  {  
                    $error = "Email: $pemail is already exist in our database, Please try another one!";
                  }  
                  else {
                           $check = "SELECT * FROM register WHERE id = (SELECT MAX(id) FROM register)";
                           $result = mysqli_query($dbcon,$check);
                           if(mysqli_num_rows($result) > 0) {  
                                 while($row = mysqli_fetch_assoc($result)) {
                                      $last_id = $row['id'];
                                      $getid = $row["pi"];
                                     $getpi = str_replace("PI", "", $getid);
                                      $pi = "PI".($getpi+1);
                                      // echo "<script>alert('Your PId = $pi');</script>";
                                  }
                            }
                            else  {
                              echo "<script>alert('Not worked');</script>";
                            }  
                               
                          $insert_user="INSERT INTO register (name, email, collegeId, dob, department, college, yog, address, contact, password, pi, liftoff, hoverpod, spazor, rocrun, senso, paper, cases, space, design) VALUE ('$pname','$pemail','$pcollegeId','$pdob','$pdepartment','$pcollege','$pyog','$paddress','$pcontact','nssc16','$pi','','','','','','','','','')";              
                          if (mysqli_query($dbcon, $insert_user)) {
                              $last_id = mysqli_insert_id($dbcon);
                            // echo "<script>alert('Success. & id: $last_id');</script>";
                              ?> <script> window.location="newPI-R.php?npi=<?php echo $pi ?>" </script> <?php
                          } 
                          else {
                              echo "Error: " . $insert_user . "<br>" . mysqli_error($dbcon);
                            }                                
                   }
    }  // -------- end of !empty() braces -------------
    else 
    {
      // echo"<script>alert('All fields are required.')</script>";  
      $error = "All fields are required"; 
    }  
}  
  

?>


<?php
if (isset($_GET['npi'])) {
    $npi = $_GET['npi'];
    $success = "Successfuly registered with participant Id <h2 class='text-center'>$npi</h2>";
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


 if(empty($success)) {
    echo '<style type="text/css">
           #success {
                display: none;
           }
           </style>';
    }

?>


<div class="container">
        <form role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" >
           <!-- alert for danger =========== -->
               <div class="alert alert-danger" id="error">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <p class="text-center"><strong><?php echo $error; ?></strong></p>
               </div>
               <!-- alert for success ============== -->
               <div class="alert alert-success" id="success">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <p class="text-center"><strong><?php echo $success; ?></strong></p>
               </div>

               <div class="well form-group col-sm-offset-2 col-sm-8" style="box-shadow: 0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)!important;">
                   <label for="text">Full Name :</label>
                   <input type="text" class="form-control input-lg" id="pwd" name="pname" placeholder="*name" value="<?php echo $pname;?>"   required/>
               </div>
           
               <div class="well form-group col-sm-offset-2 col-sm-8" style="box-shadow: 0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)!important;">
                  <label for="email">Email :</label>
                  <input type="email" class="form-control input-lg" id="email" name="pemail" placeholder="*email" value="<?php echo $pemail;?>"  required/>
               </div>

               <div class="well form-group col-sm-offset-2 col-sm-8" style="box-shadow: 0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)!important;">
                    <label for="text">College Id :</label>
                    <input type="text" class="form-control input-lg" id="usr" name="pcollegeId" placeholder="*CollegeId" value="<?php echo $pcollegeId;?>" required/>
               </div>

                <div class="well form-group col-sm-offset-2 col-sm-8" style="box-shadow: 0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)!important;">
                    <label for="date">Date of Birth :</label>
                    <input type="date" class="form-control input-lg" id="date" name="pdob" value="<?php echo $pdob;?>"  required/>
               </div>

               <div class="well form-group col-sm-offset-2 col-sm-8" style="box-shadow: 0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)!important;">
                    <label for="usr">Department :</label>
                    <input type="text" class="form-control input-lg" id="usr" name="pdepartment" placeholder="*Department" value="<?php echo $pdepartment;?>"  required/>
               </div>

               <div class="well form-group col-sm-offset-2 col-sm-8" style="box-shadow: 0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)!important;">
                    <label for="usr">College Name :</label>
                    <input type="text" class="form-control input-lg" id="usr" name="pcollege" placeholder="*College" value="<?php echo $pcollege;?>"  required/>
               </div>

               <div class="well form-group col-sm-offset-2 col-sm-8" style="box-shadow: 0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)!important;">
                    <label for="usr">Year of Graduation :</label>
                    <input type="number" class="form-control input-lg" id="usr" name="pyog" placeholder="*Your year of Graduation" value="<?php echo $pyog;?>"  required/>
               </div>

               <div class="well form-group col-sm-offset-2 col-sm-8" style="box-shadow: 0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)!important;">
                   <label for="comment">Address :</label>
                   <textarea class="form-control" id="comment" rows="5" id="comment" name="paddress" placeholder="*Address"  required><?php echo $paddress;?></textarea>
               </div>

                <div class="well form-group col-sm-offset-2 col-sm-8" style="box-shadow: 0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)!important;">
                    <label for="number">Mobile Number :</label>
                    <input type="number" class="form-control input-lg" id="number" name="pcontact" placeholder="*Enter your 10 Digit Contact Number" value="<?php echo $pcontact;?>"   required/>
               </div>

               <br />
                <button type="submit" class="btn btn-primary btn-lg col-sm-offset-4 col-sm-4" name="register">Register</button>
        </form>
</div>

<br /><br /><br /><br /><br />



</body>

</html>
