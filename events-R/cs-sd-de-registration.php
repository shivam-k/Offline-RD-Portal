<?php  
include("user-info.php");
?> 

<!DOCTYPE html>
<html>
<head>

      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>NSSC | Events Registration</title>
       <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">   
       <meta name="description" content="Shivam Kumar">
       <meta name="keywords" content="Exhibition Page of nssc.in" />
       <meta name="description" content="Exhibition Page of National Students' Space Challenge '16"/>
       <link rel="shortcut icon" type="image/png" href="nssc.png"/>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="events-css/register.css">
      <link rel="stylesheet" href="events-css/events-registration.css"> 
      <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script> // Script for Opening-Closing of box
 
    $(document).ready(function(){
        $("#cases-btn").click(function(){
            $("#cases").toggle("slow");
        });
    });

    $(document).ready(function(){
        $("#info-btn").click(function(){
            $("#basic-info-allevents").toggle("slow");
        });
    });

    $(document).ready(function(){
        $("register-all-events-btn").click(function(){
            $("#register-all-events").toggle("slow");
        });
    });

    $(document).ready(function(){
        $("#space-btn").click(function(){
            $("#space").toggle("slow");
        });
    });
    $(document).ready(function(){
        $("#design-btn").click(function(){
            $("#design").toggle("slow");
        });
    });


</script>


<style>
     .error_value {
       display: table;
       margin: 10px auto 40px auto;
       text-align: center;
       background-color: rgba(1,163,232,0.2);
     }
     .error_value p {
       text-align: center;
        margin: 10px 25px 10px 25px;
        color: #ff4a56;
     }

    #head_of_page_h2 {
  max-width: 100%;
  width: 90%;
}
#head_of_page {
  display: inline-block;
  margin-right: 5%;
}
 #user-name-drop {
       display: inline-block ;
       margin-right: 5%;
       margin-left: 0%;
       float: right;
}

.dropbtn {
    background-color: #F9F9F9; 
    color: #2E3138;
    padding: 5px 16px;
    font-size: 60%;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    top: 30.5px;
    background-color: #f9f9f9;
    min-width: 150%;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); 
}

.dropdown-content a {
    color: #555555;
    font-weight: 100;
    padding: 6px 8px;
    text-decoration: none;
    display: block;
    font-size: 50%;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color:;
}
/* ============= Media query for username tab ======== */
@media only screen and (max-width: 623px) {
  #head_of_page_h2 {
  max-width: 100%;
  width: 85%;
}
} 
@media only screen and (max-width: 440px) {
  #head_of_page_h2 {
  max-width: 100%;
  width: 80%;
}
}

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

<?php

$pi_admin = $_SESSION['pi_admin'];

$sql = "SELECT * FROM register WHERE pi = '$pi_admin'";
$run_query = mysqli_query($dbcon, $sql);
if(mysqli_num_rows($run_query) > 0) {
   while($row = mysqli_fetch_assoc($run_query)) {
            $pname = $row['name'];
            $pemail = $row['email'];
            $liftoff_admin = $row['liftoff'];
            $hoverpod_admin = $row['hoverpod'];
            $spazor_admin = $row['spazor'];
            $rocrun_admin = $row['rocrun'];
            $senso_admin= $row['senso'];
            $paper_admin= $row['paper'];
            $cases_admin= $row['cases'];
            $space_admin= $row['space'];
            $design_admin= $row['design'];
        }
}
else {
   $error_pi = "Entered '$info_pi' participants Id does not exists in database.";
}

?>

<table>
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>PI</th>
    <th>LF</th>
    <th>HP</th>
    <th>SP</th>
    <th>RC</th>
    <th>SS</th>
    <th>PP</th>
    <th>CS</th>
    <th>SD</th>
    <th>DE</th>
  </tr>
  <tr>
    <td><?php echo "<p>$pname</p> "; ?></td>
    <td><?php echo "<p>$pemail</p> "; ?></td>
    <td><?php echo "<p>$pi_admin</p> "; ?></td>
    <td><?php echo "<p>$liftoff_admin</p> "; ?></td>
    <td><?php echo "<p>$hoverpod_admin</p>  "; ?></td>
    <td><?php echo "<p>$spazor_admin</p>  "; ?></td>
    <td><?php echo "<p>$rocrun_admin</p> "; ?></td>
    <td><?php echo "<p>$senso_admin</p> "; ?></td>
    <td><?php echo "<p>$paper_admin</p> "; ?></td>
    <td><?php echo "<p>$cases_admin</p> "; ?></td>
    <td><?php echo "<p>$space_admin</p> "; ?></td>
    <td><?php echo "<p>$design_admin</p> "; ?></td>
  </tr>

</table>


<div id="body-container"> <!-- ============ whole body ========= -->

 <div class="bottom-links event-btn-container" style="">
          <div class="link-redirect">
              <a class="button button6" href="../home.php">GET BACK</a>
         </div>
          <div class="link-redirect">
              <a class="button button6" href="events-registration.php">Liftoff & Hoverpod</a>
         </div>
         <div class="link-redirect">
              <a class="button button6" href="ss-pp-registration.php">Sensorous & Paper Presentation</a>
         </div>
         <div class="link-redirect">
              <a class="button button6" href="sp-rc-registration.php">Spazor & Rocrun</a>
         </div>
    </div>

<!-- ==============================================
                      ================ results & error of Registering all events at a time ================================= -->

<!-- =================== btn to show registration box ===================== -->
    <div class="event-btn-container" style="margin-top: 50px">
       <div class="event-btn-tag" >
           <button id="register-all-events-btn" class="show-hide-btn">Register for Events</button>
        </div>
     </div>


<div class="allevents-result">
<?php
if(isset($_POST['all-events'])) {
    if(!empty($_POST['check_list'])) {
        
    $checked_count = count($_POST['check_list']); // counting number selected checkbox
    // echo "You have selected following ".$checked_count." option(s): <br/>";
    $sql = "SELECT * FROM register WHERE pi = '$pi_admin' AND email = '$pemail'";
    $run_query = mysqli_query($dbcon, $sql);
    if(mysqli_num_rows($run_query) > 0) {
      while($row = mysqli_fetch_assoc($run_query)) {
          $liftoff = $row['liftoff'];
          $hoverpod = $row['hoverpod'];
          $rocrun = $row['rocrun'];
          $spazor = $row['spazor'];
          $senso = $row['senso'];
          $paper = $row['paper'];
          $cases = $row['cases'];
          $space = $row['space'];
          $design = $row['design'];
      }
    }
    foreach($_POST['check_list'] as $selected) {
      // echo "<p>".$selected ."</p>";
      if($selected == 1) { /* ================= if Liftoff selected ============================= */
        if(!empty($liftoff)) {
                   echo "You have already registered for Liftoff with event Id $liftoff.<br />";
        }
        else {
          $check = "SELECT * FROM register WHERE liftoff = (SELECT MAX(liftoff) FROM register)";
                    $result = mysqli_query($dbcon,$check);
                    if(mysqli_num_rows($result) > 0) {  
                      while($row = mysqli_fetch_assoc($result)) {
                        $liftoff = $row['liftoff'];
                          // echo "<script>alert('You dont have an event id. now creating your event id);</script>";
                          // echo "<script>alert('last event id is $liftoff ');</script>";
                          $liftoff = str_replace("LF", "", $liftoff);
                          $liftoff = "LF".($liftoff+1);
                    }
                    // updating liftoff id of participant in colmn liftoff 
                        $insert_liftoff = "UPDATE register SET liftoff = '$liftoff' WHERE email = '$pemail'";
                        if(mysqli_query($dbcon, $insert_liftoff) > 0) {
                          // echo "<script>alert('updated register with liftoff = $liftoff');</script>";
                        }
                        // updating liftoff Id of participant in events table with their PI Id as a admin(Pi1)
                        $insert_lfevent = "INSERT INTO lfevent (teamid, pi1, pi2, pi3, pi4) VALUE ('$liftoff', '$pi_admin', '', '', '')";
                        if(mysqli_query($dbcon, $insert_lfevent) > 0) {
                          // echo "<script>alert('inserted in lfevent with teamid = $liftoff and pi1 = $pi_admin');</script>"; 
                          // header("Refresh:0");
                          echo "You just registered for Liftoff with event Id $liftoff.<br />";           
                        }
                }
        }
      }
      if($selected == 2) {
        if(!empty($hoverpod)) { /* ================= if Hoverpod selected ============================= */
          echo "You have already registered for Hoverpod with event Id $hoverpod.<br />";
        }
        else {
          $check = "SELECT * FROM register WHERE hoverpod = (SELECT MAX(hoverpod) FROM register)";
                    $result = mysqli_query($dbcon,$check);
                    if(mysqli_num_rows($result) > 0) {  
                      while($row = mysqli_fetch_assoc($result)) {
                         $hoverpod = $row['hoverpod'];
                          // echo "<script>alert('last event id is $hoverpod ');</script>";
                          $hoverpod = str_replace("HP", "", $hoverpod);
                          $hoverpod = "HP".($hoverpod+1);
                    }
                    // updating hoverpod id of participant in colmn hoverpod
                        $insert = "UPDATE register SET hoverpod = '$hoverpod' WHERE email = '$pemail'";
                        if(mysqli_query($dbcon, $insert) > 0) {
                          // echo "<script>alert('updated register with hoverpod = $hoverpod');</script>";
                        }
                        // updating hoverpod Id of participant in events table with their PI Id as a admin(Pi1)
                        $insert = "INSERT INTO hpevent (teamid, pi1, pi2, pi3, pi4, pi5) VALUE ('$hoverpod', '$pi_admin', '', '', '', '')";
                        if(mysqli_query($dbcon, $insert) > 0) {
                          // echo "<script>alert('inserted in lfevent with teamid = $hoverpod and pi1 = $pi_admin');</script>";
                          // header("Refresh:0");
                          echo "You just registered for Hoverpod with event Id $hoverpod.<br />";
                        }
                }
        }
      }
      if($selected == 3) { /* ============================ if Spazor selected ======================== */
        if(!empty($spazor)) {
          echo "You have already registered for Spazor with event Id $spazor.<br />";
        }
        else {
          $check = "SELECT * FROM register WHERE spazor = (SELECT MAX(spazor) FROM register)";
                    $result = mysqli_query($dbcon,$check);
                    if(mysqli_num_rows($result) > 0) {  
                      while($row = mysqli_fetch_assoc($result)) {
                        $spazor = $row['spazor'];
                          // echo "<script>alert('last event id is $spazor ');</script>";
                          $spazor = str_replace("SP", "", $spazor);
                          $spazor = "SP".($spazor+1);
                    }
                    // updating liftoff id of participant in colmn liftoff 
                        $insert = "UPDATE register SET spazor = '$spazor' WHERE email = '$pemail'";
                        if(mysqli_query($dbcon, $insert) > 0) {
                          // echo "<script>alert('updated register with spazor = $spazor');</script>";
                        }
                        // updating liftoff Id of participant in events table with their PI Id as a admin(Pi1)
                        $insert = "INSERT INTO spevent (teamid, pi1, pi2, pi3, pi4, pi5) VALUE ('$spazor', '$pi_admin', '', '', '', '')";
                        if(mysqli_query($dbcon, $insert) > 0) {
                          // echo "<script>alert('inserted in lfevent with teamid = $spazor and pi1 = $pi_admin');</script>";
                          // header("Refresh:0");
                          echo "You just registered for Spazor with event Id $spazor.<br />";
                        }
                }
        }
      }
      if($selected == 4) { // =================================== if Rocrun Selected ================================
        if(!empty($rocrun)) {
          echo "You have already registered for Rocrun with event Id $rocrun.<br />";
        }
        else {
          $check = "SELECT * FROM register WHERE rocrun = (SELECT MAX(rocrun) FROM register)";
                $result = mysqli_query($dbcon,$check);
                if(mysqli_num_rows($result) > 0) {  
                    while($row = mysqli_fetch_assoc($result)) {
                        $rocrun = $row['rocrun'];
                        // echo "<script>alert('last event id is $rocrun ');</script>";
                        $rocrun = str_replace("RC", "", $rocrun);
                        $rocrun = "RC".($rocrun + 1);
                    }
                // updating liftoff id of participant in colmn liftoff 
                    $insert = "UPDATE register SET rocrun = '$rocrun' WHERE email = '$pemail'";
                    if(mysqli_query($dbcon, $insert) > 0) {
                        // echo "<script>alert('updated register with rocrun = $rocrun');</script>";
                    }
                    // updating liftoff Id of participant in events table with their PI Id as a admin(Pi1)
                    $insert = "INSERT INTO rcevent (teamid, pi1, pi2, pi3, pi4, pi5) VALUE ('$rocrun', '$pi_admin', '', '', '', '')";
                    if(mysqli_query($dbcon, $insert) > 0) {
                        // echo "<script>alert('inserted in lfevent with teamid = $rocrun and pi1 = $pi_admin');</script>";
                        // header("Refresh:0");
                        echo "You just registered for Rocrun with event Id $rocrun.<br />";
                    }
               }
          }
      }
      if($selected == 5) { // =================================== if Sensorous Selected ================================
        if(!empty($senso)) {
          echo "You have already registered for Sensorous with event Id $senso.<br />";
        }
        else {
          $check = "SELECT * FROM register WHERE senso = (SELECT MAX(senso) FROM register)";
                $result = mysqli_query($dbcon,$check);
                if(mysqli_num_rows($result) > 0) {  
                    while($row = mysqli_fetch_assoc($result)) {
                        $senso = $row['senso'];
                        // echo "<script>alert('last event id is $senso ');</script>";
                        $senso = str_replace("SS", "", $senso);
                        $senso = "SS".($senso + 1);
                    }
                // updating liftoff id of participant in colmn liftoff 
                    $insert = "UPDATE register SET senso = '$senso' WHERE email = '$pemail'";
                    if(mysqli_query($dbcon, $insert) > 0) {
                        // echo "<script>alert('updated register with senso = $senso');</script>";
                    }
                    // updating liftoff Id of participant in events table with their PI Id as a admin(Pi1)
                    $insert = "INSERT INTO ssevent (teamid, pi1, pi2, pi3, pi4) VALUE ('$senso', '$pi_admin', '', '', '')";
                    if(mysqli_query($dbcon, $insert) > 0) {
                        // echo "<script>alert('inserted in ssevent with teamid = $senso and pi1 = $pi_admin');</script>";
                        // header("Refresh:0");
                        echo "You just registered for Sensorous with event Id $senso.<br />";
                    }
               }
          }
      }
      if($selected == 6) { // ================================ if Paper Presentation Selected =============================
        if(!empty($paper)) {
          echo "You have already registered for Paper Presentation with Event Id $paper.<br />";
        }
        else {
          $check = "SELECT * FROM register WHERE paper = (SELECT MAX(paper) FROM register)";
                $result = mysqli_query($dbcon,$check);
                if(mysqli_num_rows($result) > 0) {  
                    while($row = mysqli_fetch_assoc($result)) {
                        $paper = $row['paper'];
                        // echo "<script>alert('last event id is $paper ');</script>";
                        $paper = str_replace("PP", "", $paper);
                        $paper = "PP".($paper + 1);
                    }
                // updating liftoff id of participant in colmn liftoff 
                    $insert = "UPDATE register SET paper = '$paper' WHERE email = '$pemail'";
                    if(mysqli_query($dbcon, $insert) > 0) {
                        // echo "<script>alert('updated register with paper = $paper');</script>";
                    }
                    // updating liftoff Id of participant in events table with their PI Id as a admin(Pi1)
                    $insert = "INSERT INTO ppevent (teamid, pi1, pi2, pi3, pi4, pi5) VALUE ('$paper', '$pi_admin', '', '', '', '')";
                    if(mysqli_query($dbcon, $insert) > 0) {
                        // echo "<script>alert('inserted in ssevent with teamid = $paper and pi1 = $pi_admin');</script>";
                        // header("Refresh:0");
                        echo "You just registered for Paper Presentation with event Id $paper.<br />";
                    }
               }
          }
      }
      if($selected == 7) { // ================================ if Paper Case Study Selected =============================
        if(!empty($cases)) {
          echo "You have already registered for Case Study with Event Id $cases.<br />";
        }
        else {
          $check = "SELECT * FROM register WHERE cases = (SELECT MAX(cases) FROM register)";
                $result = mysqli_query($dbcon,$check);
                if(mysqli_num_rows($result) > 0) {  
                    while($row = mysqli_fetch_assoc($result)) {
                        $cases = $row['cases'];
                        // echo "<script>alert('last event id is $cases ');</script>";
                        $cases = str_replace("CS", "", $cases);
                        $cases = "CS".($cases + 1);
                    }
                // updating liftoff id of participant in colmn liftoff 
                    $insert = "UPDATE register SET cases = '$cases' WHERE email = '$pemail'";
                    if(mysqli_query($dbcon, $insert) > 0) {
                        // echo "<script>alert('updated register with cases = $cases');</script>";
                    }
                    // updating liftoff Id of participant in events table with their PI Id as a admin(Pi1)
                    $insert = "INSERT INTO csevent (teamid, pi1, pi2, pi3, pi4) VALUES ('$cases', '$pi_admin', '', '', '')";
                    if(mysqli_query($dbcon, $insert) > 0) {
                        // echo "<script>alert('inserted in csevent with teamid = $cases and pi1 = $pi_admin');</script>";
                        // header("Refresh:0");
                        echo "You just registered for Case Study with event Id $cases.<br />";
                    }
               }
          }
      }
      if($selected == 8) { // ================================ if Paper Space Study Selected =============================
        if(!empty($space)) {
          echo "You have already registered for Space Deb with Event Id $space.<br />";
        }
        else {
          $check = "SELECT * FROM register WHERE space = (SELECT MAX(space) FROM register)";
                $result = mysqli_query($dbcon,$check);
                if(mysqli_num_rows($result) > 0) {  
                    while($row = mysqli_fetch_assoc($result)) {
                        $space = $row['space'];
                        // echo "<script>alert('last event id is $space ');</script>";
                        $space = str_replace("SD", "", $space);
                        $space = "SD".($space + 1);
                    }
                   // updating liftoff id of participant in colmn liftoff 
                    $insert = "UPDATE register SET space = '$space' WHERE email = '$pemail'";
                    if(mysqli_query($dbcon, $insert) > 0) {
                        // echo "<script>alert('updated register with space = $space');</script>";
                    }
                    // updating liftoff Id of participant in events table with their PI Id as a admin(Pi1)
                    $insert = "INSERT INTO sdevent (teamid, pi1, pi2, pi3) VALUES ('$space', '$pi_admin', '', '')";
                    if(mysqli_query($dbcon, $insert) > 0) {
                        // echo "<script>alert('inserted in sdevent with teamid = $space and pi1 = $pi_admin');</script>";
                        // header("Refresh:0");
                        echo "You just registered for Space Deb with event Id $space.<br />";
                    }
               }
          }
      }
      if($selected == 9) { // =================================== if Designeer Selected ================================
        if(!empty($design)) {
          echo "You have already registered for Designeer with Event Id $design.<br />";
        }
        else {
          $check = "SELECT * FROM register WHERE design = (SELECT MAX(design) FROM register)";
                $result = mysqli_query($dbcon,$check);
                if(mysqli_num_rows($result) > 0) {  
                    while($row = mysqli_fetch_assoc($result)) {
                        $design = $row['design'];
                        // echo "<script>alert('last event id is $design ');</script>";
                        $design = str_replace("DE", "", $design);
                        $design = "DE".($design + 1);
                    }
                  // updating liftoff id of participant in colmn liftoff 
                    $insert = "UPDATE register SET design = '$design' WHERE email = '$pemail'";
                    if(mysqli_query($dbcon, $insert) > 0) {
                        // echo "<script>alert('updated register with design = $design');</script>";
                    }
                    // updating liftoff Id of participant in events table with their PI Id as a admin(Pi1)
                    $insert = "INSERT INTO deevent (teamid, pi1, pi2, pi3) VALUES ('$design', '$pi_admin', '', '')";
                    if(mysqli_query($dbcon, $insert) > 0) {
                        // echo "<script>alert('inserted in deevent with teamid = $design and pi1 = $pi_admin');</script>";
                        // header("Refresh:0");
                        echo "You just registered for Designeer with event Id $design.<br />";
                    }
               }
          }
      }
    } 

    ?>
    <script>
    function Redirect() 
                 {  
                      window.location="cs-sd-de-registration.php"; 
                  }
                 setTimeout('Redirect()',  5000);   
  </script>
  <?php
  }
  else {
    echo "<b>Please Select Atleast One Option.</b>";
  }

   
}
?> 

</div>

<!-- =================== all events at a time ===================================== -->

<div class="events-selection-container" id="register-all-events">
    <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" >
      <p>Register for all events at a time</p>
     <div style="display: table; margin: 0 auto" class="selection-container-inside">
        <span class="bigcheck">
            <label class="bigcheck">Liftoff
                <input type="checkbox" class="bigcheck" name="check_list[]" value="1"/>
                <span class="bigcheck-target"></span>
            </label>
        </span>
        
        <span class="bigcheck">
            <label class="bigcheck">Hoverpod
                <input type="checkbox" class="bigcheck" name="check_list[]" value="2"/>
                <span class="bigcheck-target"></span>
            </label>
        </span>
        <span class="bigcheck">
            <label class="bigcheck">Spazor
                <input type="checkbox" class="bigcheck" name="check_list[]" value="3"/>
                <span class="bigcheck-target"></span>
            </label>
        </span>
        <span class="bigcheck">
            <label class="bigcheck">Rocrun
                <input type="checkbox" class="bigcheck" name="check_list[]" value="4"/>
                <span class="bigcheck-target"></span>
            </label>
        </span>
        <span class="bigcheck">
            <label class="bigcheck">Sensorous
                <input type="checkbox" class="bigcheck" name="check_list[]" value="5"/>
                <span class="bigcheck-target"></span>
            </label>
        </span> 
        <span class="bigcheck">
            <label class="bigcheck">Paper Presentation
                <input type="checkbox" class="bigcheck" name="check_list[]" value="6"/>
                <span class="bigcheck-target"></span>
            </label>
        </span> 
        <span class="bigcheck">
            <label class="bigcheck">Case Study
                <input type="checkbox" class="bigcheck" name="check_list[]" value="7"/>
                <span class="bigcheck-target"></span>
            </label>
        </span>
        <span class="bigcheck">
            <label class="bigcheck">Space Deb
                <input type="checkbox" class="bigcheck" name="check_list[]" value="8"/>
                <span class="bigcheck-target"></span>
            </label>
        </span>
       <span class="bigcheck">
            <label class="bigcheck">Designeer
                <input type="checkbox" class="bigcheck" name="check_list[]" value="9"/>
                <span class="bigcheck-target"></span>
            </label>
        </span> <br /><br />
         <div style="display: table; margin: 0 auto"> <input type="submit" value="Submit" name="all-events" class="button button5"/></div>
      </div><br />   
    </form>
</div>



<!-- ===========================================
                        ================ backend of Case Study(Adding participants) =================================== -->
<?php

if(isset($_POST['cases-submit'])) {
  	$cspi = $_POST['cspi'];
  	$cspi = strtoupper("$cspi"); // converting to uppercase letter
  	if(!empty($cspi) ) {
  		if($cspi == $pi_admin) {
  		    echo "<script>alert('Dont Put your Own PI over here..Here you can add other participants in your team if you have registered for Case Study.If you have not registered yet, first register for Case Study above.')</script>";
  	      $cspi = '';
      }
  		else {
    			$sql = "SELECT * FROM register WHERE pi = '$cspi'";
    			$run_query = mysqli_query($dbcon, $sql);
    			if(mysqli_num_rows($run_query) > 0) {
              while($row = mysqli_fetch_assoc($run_query)) {
               		$name = $row['name'];
               		$pi = $row['pi'];
               		$cases = $row['cases'];
              }
            	// echo "<script>alert('Name: $name, PI Id: $pi, LF Id: $liftoff ')</script>";
            	// Checking if admin has place to add the participant
            	$event_table = "SELECT * FROM csevent WHERE teamid = '$cases_admin'";
				      $run_event_table = mysqli_query($dbcon, $event_table);
				      if(mysqli_num_rows($run_event_table) > 0) { 
               		while($row = mysqli_fetch_assoc($run_event_table)) {
               	   		$pi1 = $row['pi1'];
               	   		$pi2 = $row['pi2'];
               	   		$pi3 = $row['pi3'];
               	   		$pi4 = $row['pi4'];
               		}
               		if(!empty($pi2) && !empty($pi3) && !empty($pi4)) { // if any of field except Pi1 is full, ==> participants has initiated grouping
                    	echo "<script>alert('Number of participants in one team for Case Study has reached at maximum..There is no place in this team to add other participants.')</script>";
               		}
               		else { // admin has place to add participant in his group
                 			if(!empty($cases)) { // participant already has the event Id
                         		// echo "<script>alert('already have event Id')</script>";
                         		$sql = "SELECT * FROM csevent WHERE teamid = '$cases' AND (pi1 = '$cspi' OR pi2 = '$cspi' OR pi3 = '$cspi' OR pi4 = '$cspi')";
                         		$run_query = mysqli_query($dbcon, $sql);
                         		if(mysqli_num_rows($run_query) > 0) {
                           			while($row = mysqli_fetch_assoc($run_query)) {
                             				$pi1 = $row['pi1'];
        			               	   		$pi2 = $row['pi2'];
        			               	   		$pi3 = $row['pi3'];
        			               	   		$pi4 = $row['pi4'];
                             		}
                           			if(empty($pi2) && empty($pi3) && empty($pi4) && !empty($pi1)) { // Participant dont have grouping
                    									// echo "<script>alert('OK...no grouping of $lfpi with $liftoff')</script>";
                    									$sql = "DELETE FROM csevent WHERE teamid = '$cases' AND pi1 = '$cspi'";
                    									if(mysqli_query($dbcon, $sql)) {
                       										// echo "<script>alert('Deleted the row of Participant as he dint had any grouping')</script>";
                       										$sql = "UPDATE register SET cases = '$cases_admin' WHERE pi = '$cspi'";
                       										if(mysqli_query($dbcon, $sql)) {
                           											// echo "<script>alert('Updated the event Id of $lfpi from $liftoff to $liftoff_admin')</script>";
                           											$cases = $cases_admin; 

                 											  
                					                      // echo "<script>alert('Will be adding Participant in the group of admin')</script>";
                					               			  $sql = "SELECT * FROM csevent WHERE teamid = '$cases_admin'";
                					               			  $run_query = mysqli_query($dbcon, $sql);
                					               			  if(mysqli_num_rows($run_query) > 0) {
                      					               				while($row = mysqli_fetch_assoc($run_query)){
                      					               					  $pi1 = $row['pi1'];
                      					               	   				$pi2 = $row['pi2'];
                      					               	   				$pi3 = $row['pi3'];
                      					               	   				$pi4 = $row['pi4'];		
                      					               				}
                        					               			if(empty($pi2)) { //if col2 is not filled
                        					               					$sql = "UPDATE csevent SET pi2 = '$cspi' WHERE teamid = '$cases_admin'";
                                					 								if(mysqli_query($dbcon, $sql)) {
                                  					 									// echo "<script>alert('Added the PI Id $lfpi in colmn2 in the group of $pi_admin with event Id $liftoff ')</script>";
                                                            echo "<script>alert('$cspi has been successfully added in your team..')</script>";
                                  					 									$cases = $cases_admin; 
                                					 								}	
                        					               			}
                        					               			else if(empty($pi3)) { //if col3 is not filled
                        					               					$sql = "UPDATE csevent SET pi3 = '$cspi' WHERE teamid = '$cases_admin'";
                                					 								if(mysqli_query($dbcon, $sql)) {
                                  					 									// echo "<script>alert('Added the PI Id $lfpi in colmn3 in the group of $pi_admin with event Id $liftoff ')</script>";
                                                               echo "<script>alert('$cspi has been successfully added in your team..')</script>";
                                  					 									$cases = $cases_admin; 
                                					 								}	
                        					               			}
                        					               			else if(empty($pi4)) { //if col4 is not filled
                        					               					$sql = "UPDATE csevent SET pi4 = '$cspi' WHERE teamid = '$cases_admin'";
                                					 								if(mysqli_query($dbcon, $sql)) {
                                  					 									// echo "<script>alert('Added the PI Id $lfpi in colmn4 in the group of $pi_admin with event Id $liftoff ')</script>";
                                                             echo "<script>alert('$cspi has been successfully added in your team..')</script>";
                                  					 									$cases = $cases_admin; 
                                					 								}	
                        					               			}
            					               			      }
                					               			  else {
                					               				    echo "<script>alert('Error coming')</script>";
                					               			  }
           										            }
            									        }
                           			} // Otherwise pi2 or pi3 or pi4 if filled ==> already envolved  
                           			else {
                           				echo "<script>alert('$cspi is already envolved in a group. You can not add him/her in your group..')</script>";
                           			}
                       		  }

               			 }
               			else { // participant did not have the event Id
                				// echo "<script>alert('dont have event id')</script>";
                				$sql = "UPDATE register SET cases = '$cases_admin' WHERE pi = '$cspi'";
         							  if(mysqli_query($dbcon, $sql)) {
             								// echo "<script>alert('Given the event Id $liftoff_admin to participant $lfpi')</script>";
             								$cases = $cases_admin; // assigning the event id of admin to Participant

     								        
    		                    // echo "<script>alert('Will be adding Participant in the group of admin')</script>";
    		               			$sql = "SELECT * FROM csevent WHERE teamid = '$cases_admin'";
    		               			$run_query = mysqli_query($dbcon, $sql);
    		               			if(mysqli_num_rows($run_query) > 0) {
        		               				 while($row = mysqli_fetch_assoc($run_query)){
          		               					  $pi1 = $row['pi1'];
          		               	   				$pi2 = $row['pi2'];
          		               	   				$pi3 = $row['pi3'];
          		               	   				$pi4 = $row['pi4'];		
        		               				 }
    		               				    if(empty($pi2)) { //if col2 is not filled
    		               					        $sql = "UPDATE csevent SET pi2 = '$cspi' WHERE teamid = '$cases_admin'";
    		 								               if(mysqli_query($dbcon, $sql)) {
                      		 									// echo "<script>alert('Added the PI Id $lfpi in colmn2 in the group of $pi_admin with event Id $liftoff ')</script>";
                                            echo "<script>alert('$cspi has been successfully added in your team..')</script>";
                      		 									$cases = $cases_admin; 
                  		 								}	
    		               				    }
    		               				    else if(empty($pi3)) { //if col3 is not filled
        		               					   $sql = "UPDATE csevent SET pi3 = '$cspi' WHERE teamid = '$cases_admin'";
                    		 								if(mysqli_query($dbcon, $sql)) {
                        		 									// echo "<script>alert('Added the PI Id $lfpi in colmn3 in the group of $pi_admin with event Id $liftoff ')</script>";
                                              echo "<script>alert('$cspi has been successfully added in your team..')</script>";
                        		 									$cases = $cases_admin; 
                    		 								}	
    		               				    }
    		               				   else if(empty($pi4)) { //if col4 is not filled
    		               				         	$sql = "UPDATE csevent SET pi4 = '$cspi' WHERE teamid = '$cases_admin'";
                    		 								if(mysqli_query($dbcon, $sql)) {
                    		 									// echo "<script>alert('Added the PI Id $lfpi in colmn4 in the group of $pi_admin with event Id $liftoff ')</script>";
                                          echo "<script>alert('$cspi has been successfully added in your team..')</script>";
                    		 									$cases = $cases_admin; 
                    		 								}	
    		               				   }
		               			  }
		               			  else {
		               				   echo "<script>alert('Error coming')</script>";
		               			  }
 							          }
               			} 
              }
				} 
				else {
					echo "<script>alert('Error detected')</script>";
				}
			}
			else {
				echo "<script>alert('Wrong Combination of PI Id and Email Id.')</script>";
				$cspi = "";
			}			
		}
		
	}
}

?>

<!-- ============================ 
                  ============= PHP for deleting members from group in Case Study ==================== -->

 <?php
if(isset($_POST['csdelete-btn'])) {
	$csdelete = $_POST['csdelete']; 
	$csdelete = strtoupper("$csdelete"); // converting to uppercase letter
	if(!empty($csdelete)) {
    		$sql = "SELECT * FROM register WHERE pi = '$csdelete'";
    		$run_query = mysqli_query($dbcon, $sql);
    		if(mysqli_num_rows($run_query) > 0) { // entered PI Id for delete exists in database
    			$sql = "SELECT * FROM csevent WHERE teamid = '$cases_admin' AND (pi1 = '$csdelete' OR pi2 = '$csdelete' OR pi3 = '$csdelete' OR pi4 = '$csdelete')";
    			$run_query = mysqli_query($dbcon, $sql);
    			if(mysqli_num_rows($run_query) > 0) {	// entered PI Id for delete is in admin's group
                	// echo "<script>alert('$lfdelete is in the group of admin')</script>";
                	while($row = mysqli_fetch_assoc($run_query)) {
                		$pi1 = $row['pi1'];
                		$pi2 = $row['pi2'];
                		$pi3 = $row['pi3'];
                		$pi4 = $row['pi4'];
                	}
                	if($pi1 == $pi_admin) { // if loggedin participants is admin or not
                		  // echo "<script>alert('you are admin')</script>";	
                    if($csdelete == $pi1) {
                          $sql = "UPDATE csevent SET pi1 = '' WHERE teamid = '$cases_admin'";
                          if(mysqli_query($dbcon, $sql)) {
                            // echo "<script>alert('made space in colmn2 in event table..')</script>";    
                          }
                      }
   
                  		else if($csdelete == $pi2) {
                					$sql = "UPDATE csevent SET pi2 = '' WHERE teamid = '$cases_admin'";
                					if(mysqli_query($dbcon, $sql)) {
                						// echo "<script>alert('made space in colmn2 in event table..')</script>";		
                					}
        				      }
              				else if($csdelete == $pi3) {
                					$sql = "UPDATE csevent SET pi3 = '' WHERE teamid = '$cases_admin'";
                					if(mysqli_query($dbcon, $sql)) {
                						// echo "<script>alert('made space in colmn3 in admins event table..')</script>";		
                					}
              				}
              				else if($csdelete == $pi4) {
                					$sql = "UPDATE csevent SET pi4 = '' WHERE teamid = '$cases_admin'";
                					if(mysqli_query($dbcon, $sql)) {
                						// echo "<script>alert('made space in colmn4 in admins event table..')</script>";		
                					}
              				}
        				
                     $insert_cases = "UPDATE register SET cases = '' WHERE pi = '$csdelete'";
                    if(mysqli_query($dbcon, $insert_cases) > 0) {
                        echo "<script>alert('Admin, $csdelete is not anymore in your team..')</script>";
                    }

                   //============ code for giving new event id after deleting from team
        				      // $check = "SELECT * FROM register WHERE cases = (SELECT MAX(cases) FROM register)";
                  // 		$result = mysqli_query($dbcon,$check);
                  //  		if(mysqli_num_rows($result) > 0) {  
                  //       	while($row = mysqli_fetch_assoc($result)) {
                  //     			$cases = $row['cases'];
                  //     			$cases = str_replace("CS", "", $cases);
                  //     			$cases = "CS".($cases + 1);
                  //   		}
                  //   		// updating liftoff colmn register table with new LF id 
                  //   		 $insert_cases = "UPDATE register SET cases = '$cases' WHERE pi = '$csdelete'";
                  //     		if(mysqli_query($dbcon, $insert_cases) > 0) {
                          		  
                  //               // inserting new table with new event id
                		// 					$insert = "INSERT INTO csevent (teamid, pi1, pi2, pi3, pi4) VALUES ('$cases', '$csdelete', '', '', '') ";
                		// 					if(mysqli_query($dbcon, $insert) ) {
                		// 						  echo "<script>alert('Admin, $csdelete is not anymore in your team..')</script>";
                		// 					}
                  //             else {
                  //                 echo "Error: " . $sql . "<br>" . mysqli_error($dbcon);
                  //             }
            						
                  //     		}
 	
        				      // }

                      //============ end of code for giving new event id after deleting from team



                	}
                	else {
                		echo "<script>alert('You are not admin of your team..You dont have right to delete someone from your team...this thing can be done only by Admin of your team')</script>";
                	  $csdelete = "";  
                  }
    			}
    			else {
    				echo "<script>alert('$csdelete is not in your team')</script>";	
           			$csdelete = "";	
    			}
    		}	
    		else {
           		echo "<script>alert('$csdelete is not a valid event Id')</script>";	
           		$csdelete = "";
    		}
       }
	else {
		echo "<script>alert('Put PI Id if you want to delete')</script>";
	}
}

 ?>

<!-- =====================================
                 ============= PHP for viewing details of his group in Case Study ====================== -->

<?php
$sql = "SELECT * FROM csevent WHERE teamid = '$cases_admin'";
$run_query = mysqli_query($dbcon, $sql);
if(mysqli_num_rows($run_query) > 0) {
	while($row = mysqli_fetch_assoc($run_query)) {
		$cs_of_cases = $row['teamid'];
		$pi1_of_cases = $row['pi1'];
		$pi2_of_cases = $row['pi2'];
		$pi3_of_cases = $row['pi3'];
		$pi4_of_cases = $row['pi4'];
	}

     echo '<style type="text/css">
	         #didnt-register1 {
                display: none;
	         }
	         </style>';
   
      // when participants registered for events and and didnt made team
	if(empty($pi2_of_cases) && empty($pi3_of_cases) && empty($pi4_of_cases)) {
		 echo '<style type="text/css">
	         #suggestion1 {
                display: block;
	         }
	         </style>';
	}
      // hide suggestion to make team if admin has added at least one member
	if(!empty($pi2_of_cases) || !empty($pi3_of_cases) || !empty($pi4_of_cases)) {
		echo '<style type="text/css">
	         #suggestion1 {
               display: none;
	         }
	         </style>';
	}

	if(empty($pi2_of_cases)) {
	  echo '<style type="text/css">
	         #myBtn2 {
               display: none;
	         }
	         </style>';
	}
	if(empty($pi3_of_cases)) {
	  echo '<style type="text/css">
	         #myBtn3 {
               display: none;
	         }
	         </style>';
	}
	if(empty($pi4_of_cases)) {
	  echo '<style type="text/css">
	         #myBtn4 {
               display: none;
	         }
	         </style>';
	}

}

else { // if row doesnt exist or doesnt encountring the exact the row
  echo '<style type="text/css">
	         #myBtn1,  #myBtn2,  #myBtn3,  #myBtn4 {
               display: none;
	         }
	         </style>';

  echo '<style type="text/css">
	         #suggestion1 {
               display: none;
	         }
	         </style>';
}

?>

<div class="body-holder">
<!-- ======================= Case Study ===================================== -->
    <div class="row" id="liftoff-event">   

      <div class="event-btn-container">
        <div class="event-btn-tag">
           <button id="cases-btn" class="show-hide-btn" ><h2> Case Study </h2></button>
        </div>
      </div>
        
        <!-- ===== Case Study form & result conatiner -->
        <div class="event-info" id="cases" > 
           
            <div class="entry flow">
                <p style="display: table; margin: 0 auto">Make Your Team for Case Study</p> <br />
              <div class="entry-content">
               <!-- ======= form ============= -->
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="entry-input" >
                  <p><b>Instructions:</b></p>
                    <ul>
                      <li>You need to add others Participants one by one with their valid <b>PI</b> and <b>Email Id</b>.</li>
                      <li>One Event Id can have <b>max 4</b> & <b>min 1</b> participants.</li>
                      <li>Mail your queries at <b>info@nssc.in</b> .</li>
                    </ul><br/>
                      <p>Put PI Id:</p> 
                       <input type="text" name="cspi" value="<?php echo $cspi; ?>" required/> 
                       <br /><br />
                  <input type="submit" value="Add" name="cases-submit" class="button button5" />
                </form> <!-- ============ form end =========== -->
              </div>
            </div>

            <div class="result flow">
                  <p style="display: table; margin: 0 auto"> Current Satatus </p><br />
               <div class="result-content">
                   <ul>
                     <li>Your PI: <b><?php echo $pi_admin; ?></b> </li>
                     <li>Your Event Id: <b><?php echo $cases_admin; ?></b> </li>
                     <li>Members in Event Id: <b><?php echo $cs_of_cases; ?></b> 
                     <p id="didnt-register1" class="didnt-register">You have not registered for Case Study yet.. Do it now</p>
                          <ol type="a" class="mem-list">
                              <li id="myBtn1"><button class="pi-details"><?php echo $pi1_of_cases; ?></button></li>
                              <!-- Modal content for PI1 -->
                                    <div id="myModal1" class="modal">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                            <span class="close close1"><i class="fa fa-times" aria-hidden="true"></i></span>
                                            <h2>Details of  <?php echo $pi1_of_cases . " -- Admin" ?></h2>
                                          </div>
                                          <div class="modal-body">
                                            <?php 
                                              $sql = "SELECT * FROM register WHERE pi='$pi1_of_cases'";
                                              $run_query = mysqli_query($dbcon, $sql);
                                              if(mysqli_num_rows($run_query) > 0) {
                                                while($row = mysqli_fetch_assoc($run_query)) {
                                                  echo "<b>Name:</b>"." ".$row['name']; 
                                                  echo "<br><b>Email:</b>"." ".$row['email'];
                                                  echo "<br><b>College:</b>"." ".$row['college'];
                                                  echo "<br><b>College Id (Roll No):</b>"." ".$row['collegeId'];
                                                  echo "<br><b>Department:</b>"." ".$row['department'];
                                                  echo "<br><b>Mob No:</b>"." ".$row['contact'];
                                                }
                                              }
                                            ?>
                                          </div>
                                          <div class="modal-footer">
                                            <h3></h3>
                                          </div>
                                      </div>
                                    </div> <!-- end of modal === -->
                              <p class="suggestion" id="suggestion1">You do not have a team for Case Study... Make a team now</p>
                              <li id="myBtn2"><button class="pi-details"><?php echo $pi2_of_cases; ?></button></li>
                                  <!-- Modal content for PI2 -->
                                    <div id="myModal2" class="modal">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                            <span class="close close2"><i class="fa fa-times" aria-hidden="true"></i></span>
                                            <h2>Details of  <?php echo $pi2_of_cases ?></h2>
                                          </div>
                                          <div class="modal-body">
                                            <?php 
                                              $sql = "SELECT * FROM register WHERE pi='$pi2_of_cases'";
                                              $run_query = mysqli_query($dbcon, $sql);
                                              if(mysqli_num_rows($run_query) > 0) {
                                                while($row = mysqli_fetch_assoc($run_query)) {
                                                  echo "<b>Name:</b>"." ".$row['name']; 
                                                  echo "<br><b>Email:</b>"." ".$row['email'];
                                                  echo "<br><b>College:</b>"." ".$row['college'];
                                                  echo "<br><b>College Id (Roll No):</b>"." ".$row['collegeId'];
                                                  echo "<br><b>Department:</b>"." ".$row['department'];
                                                  echo "<br><b>Mob No:</b>"." ".$row['contact'];

                                                }
                                              }
                                            ?>
                                          </div>
                                          <div class="modal-footer">
                                            <h3></h3>
                                          </div>
                                      </div>
                                    </div> <!-- end of modal === -->
                              <li id="myBtn3"><button class="pi-details"><?php echo $pi3_of_cases; ?></button></li>
                                <!-- Modal content for PI3 -->
                                    <div id="myModal3" class="modal">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                            <span class="close close3"><i class="fa fa-times" aria-hidden="true"></i></span>
                                            <h2>Details of  <?php echo $pi3_of_cases; ?></h2>
                                          </div>
                                          <div class="modal-body">
                                            <?php 
                                              $sql = "SELECT * FROM register WHERE pi='$pi3_of_cases'";
                                              $run_query = mysqli_query($dbcon, $sql);
                                              if(mysqli_num_rows($run_query) > 0) {
                                                while($row = mysqli_fetch_assoc($run_query)) {
                                                  echo "<b>Name:</b>"." ".$row['name']; 
                                                  echo "<br><b>Email:</b>"." ".$row['email'];
                                                  echo "<br><b>College:</b>"." ".$row['college'];
                                                  echo "<br><b>College Id (Roll No):</b>"." ".$row['collegeId'];
                                                  echo "<br><b>Department:</b>"." ".$row['department'];
                                                  echo "<br><b>Mob No:</b>"." ".$row['contact'];
                                                }
                                              }
                                            ?>
                                          </div>
                                          <div class="modal-footer">
                                            <h3></h3>
                                          </div>
                                      </div>
                                    </div> <!-- end of modal === -->
                              <li id="myBtn4"><button class="pi-details"><?php echo $pi4_of_cases; ?></button></li>
                                  <!-- Modal content for PI3 -->
                                    <div id="myModal4" class="modal">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                            <span class="close close4"><i class="fa fa-times" aria-hidden="true"></i></span>
                                            <h2>Details of  <?php echo $pi4_of_cases ?></h2>
                                          </div>
                                          <div class="modal-body">
                                            <?php 
                                              $sql = "SELECT * FROM register WHERE pi='$pi4_of_cases'";
                                              $run_query = mysqli_query($dbcon, $sql);
                                              if(mysqli_num_rows($run_query) > 0) {
                                                while($row = mysqli_fetch_assoc($run_query)) {
                                                  echo "<b>Name:</b>"." ".$row['name']; 
                                                  echo "<br><b>Email:</b>"." ".$row['email'];
                                                  echo "<br><b>College:</b>"." ".$row['college'];
                                                  echo "<br><b>College Id (Roll No):</b>"." ".$row['collegeId'];
                                                  echo "<br><b>Department:</b>"." ".$row['department'];
                                                  echo "<br><b>Mob No:</b>"." ".$row['contact'];
                                                }
                                              }
                                            ?>
                                          </div>
                                          <div class="modal-footer">
                                            <h3></h3>
                                          </div>
                                      </div>
                                    </div> <!-- end of modal === -->
                          </ol><!--  ==== end of list of grous ====-->
                     </li>
                   </ul>
                   <div class="delete-lfmem">
                    	 <p style="text-align: center; "><b>Delete participants from team</b></p>
		                 <form method="POST" class="entry-input" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		                     <p>Put PI Id</p>
		                     <input type="text" name="csdelete" style="max-width: 100%; width: 100%" value="<?php echo $csdelete; ?>" required/><br />
		                     <input type="submit" name="csdelete-btn" value="Delete" class="button button5"/>
		                 </form>
                  </div>
               </div>
            </div>

        </div>  <!-- ===== case study form & result end -->
    </div> <!-- ==== case study ends here -->
</div>



<!-- ============================================== 
                                                            ==================================
                                                 Space Deb Event 
            ======================================= 
               
                                                           =============================== -->


<!-- ======================= backend of Space Deb(Adding participants) ========================= -->
<?php

if(isset($_POST['space-submit'])) {
	$sdpi = $_POST['sdpi'];
	$sdpi = strtoupper("$sdpi"); // converting to uppercase letter
	if(!empty($sdpi) ) {
		if($sdpi == $pi_admin) {
			echo "<script>alert('Dont Put your Own PI over here..Here you can add other participants in your team if you have registered for Space Deb.If you have not registered yet, first register for Space Deb above.')</script>";
	    $sdpi = '';
    }
		else {
			$sql = "SELECT * FROM register WHERE pi = '$sdpi'";
			$run_query = mysqli_query($dbcon, $sql);
			if(mysqli_num_rows($run_query) > 0) {
            	while($row = mysqli_fetch_assoc($run_query)) {
             		$name = $row['name'];
             		$pi = $row['pi'];
             		$space = $row['space'];
            	}
            	// echo "<script>alert('Name: $name, PI Id: $pi, HP Id: $space')</script>";
            	// Checking if admin has place to add the participant
            	$event_table = "SELECT * FROM sdevent WHERE teamid = '$space_admin'";
			      	$run_event_table = mysqli_query($dbcon, $event_table);
				      if(mysqli_num_rows($run_event_table) > 0) { 
               		while($row = mysqli_fetch_assoc($run_event_table)) {
               	   		$pi1 = $row['pi1'];
               	   		$pi2 = $row['pi2'];
               	   		$pi3 = $row['pi3'];
               		}
               		if(!empty($pi2) && !empty($pi3) ) { // if any of field except Pi1 is full, ==> participants has initiated 
               	                                                                     // grouping
                    	echo "<script>alert('Number of participants in one team for Space Dev has reached at maximum..There is no place in this team to add other participants.')</script>";
               		}
               		else { // admin has place to add participant in his group

               			if(!empty($space)) { // participant already has the event Id
                       		// echo "<script>alert('already have event Id')</script>";
                       		$sql = "SELECT * FROM sdevent WHERE teamid = '$space' AND (pi1 = '$sdpi' OR pi2 = '$sdpi' OR pi3 = '$sdpi')";
                       		$run_query = mysqli_query($dbcon, $sql);
                       		if(mysqli_num_rows($run_query) > 0) {
                       			while($row = mysqli_fetch_assoc($run_query)) {
                       				$pi1 = $row['pi1'];
			               	   		  $pi2 = $row['pi2'];
			               	   		  $pi3 = $row['pi3'];
                       			}
                       			if(empty($pi2) && empty($pi3) && !empty($pi1)) { // Participant dont have grouping
    									           // echo "<script>alert('OK...no grouping of $hppi with $hoverpod')</script>";
    								             $sql = "DELETE FROM sdevent WHERE teamid = '$space' AND pi1 = '$sdpi'";
    									           if(mysqli_query($dbcon, $sql)) {
   										           // echo "<script>alert('Deleted the row of Participant as he dint had any grouping')</script>";
   										           $sql = "UPDATE register SET space = '$space_admin' WHERE pi = '$sdpi'";
 										               if(mysqli_query($dbcon, $sql)) {
 										                   	// echo "<script>alert('Updated the event Id of $hppi from $hoverpod to $hoverpod_admin')</script>";
 											                  $space = $space_admin; // assigning the event id of admin to Participant

 											                   
					                               // echo "<script>alert('Will be adding Participant in the group of admin')</script>";
					               			           $sql = "SELECT * FROM sdevent WHERE teamid = '$space_admin'";
					               		    	       $run_query = mysqli_query($dbcon, $sql);
					               		    	       if(mysqli_num_rows($run_query) > 0) {
					               				              while($row = mysqli_fetch_assoc($run_query)){
					               					                 $pi1 = $row['pi1'];
					               	   				               $pi2 = $row['pi2'];
					               	   				               $pi3 = $row['pi3'];
					               				                }
            					               				        if(empty($pi2)) { //if col2 is not filled
            					               					            $sql = "UPDATE sdevent SET pi2 = '$sdpi' WHERE teamid = '$space_admin'";
            					 								                    if(mysqli_query($dbcon, $sql)) {
            					 									                       // echo "<script>alert('Added the PI Id $hppi in colmn2 in the group of $pi_admin with event Id $hoverpod ')</script>";
            					 									                       echo "<script>alert('$sdpi has been successfully added in your team..')</script>";
                                                               $space = $space_admin; // assigning the event id of admin to Participant
            					 								                    }	
            					               				        }
            					               				      else if(empty($pi3)) {   //if col3 is not filled
            					               					           $sql = "UPDATE sdevent SET pi3 = '$sdpi' WHERE teamid = '$space_admin'";
            					 								                   if(mysqli_query($dbcon, $sql)) {
            					 									                     // echo "<script>alert('Added the PI Id $hppi in colmn3 in the group of $pi_admin with event Id $hoverpod ')</script>";
            					 									                    echo "<script>alert('$sdpi has been successfully added in your team..')</script>";
                                                            $space = $space_admin; // assigning the event id of admin to Participant
            					 								                    }	
            					               				      }
					               			            }
					               			            else {
					               				              echo "<script>alert('Error coming')</script>";
					               			            }
 										                 }
  									             }
                       			}
                       			else {
                       				echo "<script>alert('$sdpi is already envolved in a group. You can not add him/her in your group..')</script>";
                       			}
                       		}

               			}
               			else { // participant did not have the event Id
            				      // echo "<script>alert('dont have event id')</script>";
            				      $sql = "UPDATE register SET space = '$space_admin' WHERE pi = '$sdpi'";
 							            if(mysqli_query($dbcon, $sql)) {
     								               // echo "<script>alert('Given the event Id $hoverpod_admin to participant $hppi')</script>";
     								               $space = $space_admin; // assigning the event id of admin to Participant

     								              
    		                           // echo "<script>alert('Will be adding Participant in the group of admin')</script>";
    		               		      	$sql = "SELECT * FROM sdevent WHERE teamid = '$space_admin'";
    		               		      	$run_query = mysqli_query($dbcon, $sql);
    		               			     if(mysqli_num_rows($run_query) > 0) {
    		               				       while($row = mysqli_fetch_assoc($run_query)){
    		               					        $pi1 = $row['pi1'];
    		               	   			      	$pi2 = $row['pi2'];
    		               	   			      	$pi3 = $row['pi3'];
    		               				      }
    		               				    if(empty($pi2)) { //if col2 is not filled
    		               					     $sql = "UPDATE sdevent SET pi2 = '$sdpi' WHERE teamid = '$space_admin'";
    		 								             if(mysqli_query($dbcon, $sql)) {
    		 									                 echo "<script>alert('$sdpi has been successfully added in your team..')</script>";
    		 									                $space = $space_admin; // assigning the event id of admin to Participant
    		 								             }	
    		               				    }

    		               				    else if(empty($pi3)) { //if col3 is not filled
    		               					    $sql = "UPDATE sdevent SET pi3 = '$sdpi' WHERE teamid = '$space_admin'";
    		 								           if(mysqli_query($dbcon, $sql)) {
    		 									             echo "<script>alert('$sdpi has been successfully added in your team..')</script>";
    		 									             $space = $space_admin; // assigning the event id of admin to Participant
    		 								            }	
    		               			      }
		               			}
		               			else {
		               				echo "<script>alert('Error coming')</script>";
		               			}
 							}
               			} 
               		}
				} 
				else {
					echo "<script>alert('Error detected')</script>";
				}
			}
			else {
				echo "<script>alert('Wrong Combination of PI Id and Email Id.')</script>";
				$sdpi = "";
			}			
		}
		
	}
}

?>


<!-- ============================ 
                  ============= PHP for deleting members from group in Space Deb ==================== -->

 <?php
if(isset($_POST['sddelete-btn'])) {
  $sddelete = $_POST['sddelete']; 
  $sddelete = strtoupper("$sddelete"); // converting to uppercase letter
  if(!empty($sddelete)) {
           $sql = "SELECT * FROM register WHERE pi = '$sddelete'";
           $run_query = mysqli_query($dbcon, $sql);
           if(mysqli_num_rows($run_query) > 0) { // entered PI Id for delete exists in database
               $sql = "SELECT * FROM sdevent WHERE teamid = '$space_admin' AND (pi1 = '$sddelete' OR pi2 = '$sddelete' OR pi3 = '$sddelete')";
               $run_query = mysqli_query($dbcon, $sql);
              if(mysqli_num_rows($run_query) > 0) { // entered PI Id for delete is in admin's group
                  // echo "<script>alert('$hpdelete is in the group of admin')</script>";
                  while($row = mysqli_fetch_assoc($run_query)) {
                    $pi1 = $row['pi1'];
                    $pi2 = $row['pi2'];
                    $pi3 = $row['pi3'];
                  }
                  if($pi1 == $pi_admin) { // if loggedin participants is admin or not
                      // echo "<script>alert('you are admin')</script>"; 
   
                          // (!oliftoff) hadnt registered for the event before getting into team
                        if($sddelete == $pi1) {
                            $sql = "UPDATE sdevent SET pi1 = '' WHERE teamid = '$space_admin'";
                            if(mysqli_query($dbcon, $sql)) {
                                 // echo "<script>alert('made space in colmn2 in event table..')</script>";    
                            }
                        }

                        else if($sddelete == $pi2) {
                            $sql = "UPDATE sdevent SET pi2 = '' WHERE teamid = '$space_admin'";
                            if(mysqli_query($dbcon, $sql)) {
                                 // echo "<script>alert('made space in colmn2 in event table..')</script>";    
                            }
                        }
                      else if($sddelete == $pi3) {
                            $sql = "UPDATE sdevent SET pi3 = '' WHERE teamid = '$space_admin'";
                            if(mysqli_query($dbcon, $sql)) {
                              // echo "<script>alert('made space in colmn3 in event table..')</script>";    
                            }
                      }
                      
                        $insert = "UPDATE register SET space = '' WHERE pi = '$sddelete'";
                        if(mysqli_query($dbcon, $insert) > 0) {
                            echo "<script>alert('Admin, $sddelete is not anymore in your team..Refresh the page to see result')</script>";
                        }

                      // ====== code for giving event id after deleting from team

                      // $check = "SELECT * FROM register WHERE space = (SELECT MAX(space) FROM register)";
                      // $result = mysqli_query($dbcon,$check);
                      // if(mysqli_num_rows($result) > 0) {  
                      //     while($row = mysqli_fetch_assoc($result)) {
                      //         $space = $row['space'];
                      //         $space = str_replace("SD", "", $space);
                      //         $space = "SD".($space + 1);
                      //     }
                      //         // updating liftoff colmn register table with new LF id 
                      //     $insert = "UPDATE register SET space = '$space' WHERE pi = '$sddelete'";
                      //     if(mysqli_query($dbcon, $insert) > 0) {
                      //             // echo "<script>alert('Your new event id for Hoverpod is $hoverpod')</script>";     
                      //            // inserting new table with new event id
                      //           $sql = "INSERT INTO sdevent (teamid, pi1, pi2, pi3) VALUES ('$space', '$sddelete', '', '')";
                      //           if(mysqli_query($dbcon, $sql)) {
                      //               // echo "<script>alert('inserted new row in event table with pi1: $hpdelete & teamid: $hoverpod')</script>";
                      //                echo "<script>alert('Admin, $sddelete is not anymore in your team..Refresh the page to see result')</script>";
                      //           }  
                      //     }
                      // }

                      // ====== end of code for giving event id after deleting from team

                  }
                  else {
                    echo "<script>alert('You are not admin of your team..You dont have right to delete someone from your team...this thing can be done only by Admin of your team')</script>";
                     $sddelete = ""; 
                  }
          }
          else {
            echo "<script>alert('$sddelete is not in your team')</script>";  
                $sddelete = ""; 
          }
        } 
        else {
              echo "<script>alert(' $sddelete is not a valid event Id')</script>"; 
              $sddelete = "";
        }
       }
  else {
    echo "<script>alert('Put PI Id if you want to delete')</script>";
  }
}

 ?>



<!-- ====== PHP for viewing details of his group in Space Deb ===== -->
<?php
$sql = "SELECT * FROM `sdevent` WHERE `teamid` = '$space_admin'";
$run_query = mysqli_query($dbcon, $sql) or die(mysqli_error($dbcon));  
if(mysqli_num_rows($run_query) > 0) {
	while($row = mysqli_fetch_assoc($run_query)) {
		$teamid_space = $row['teamid'];
		$pi1_of_space = $row['pi1'];
		$pi2_of_space = $row['pi2'];
		$pi3_of_space = $row['pi3'];
	}

     echo '<style type="text/css">
	         #didnt-register2 {
                display: none;
	         }
	         </style>';
   
      // when participants registered for events and and didnt made team
	if(empty($pi2_of_space) && empty($pi3_of_space) ) {
		 echo '<style type="text/css">
	         #suggestion2 {
                display: block;
	         }
	         </style>';
	}
      // hide suggestion to make team if admin has added at least one member
	if(!empty($pi2_of_space) || !empty($pi3_of_space) ) {
		echo '<style type="text/css">
	         #suggestion2 {
               display: none;
	         }
	         </style>';
	}

	if(empty($pi2_of_space)) {
	  echo '<style type="text/css">
	         #myBtn6 {
               display: none;
	         }
	         </style>';
	}
	if(empty($pi3_of_space)) {
	  echo '<style type="text/css">
	         #myBtn7 {
               display: none;
	         }
	         </style>';
	}
	
}

else { // if row doesnt exist or doesnt encountring the exact the row
  echo '<style type="text/css">
	         #myBtn5,  #myBtn6,  #myBtn7 {
               display: none;
	         }
	         </style>';

  echo '<style type="text/css">
	         #suggestion2 {
               display: none;
	         }
	         </style>';
}

?>



<div class="body-holder">
<!-- ===================================== Space Deb ========================= -->
    <div class="row" id="liftoff-event">   
      <div class="event-btn-container">
        <div class="event-btn-tag">
           <button id="space-btn" class="show-hide-btn" ><h2> Space Deb </h2></button>
        </div>
      </div>
        
        <!-- ===== Hoverpod form & result conatiner ===== -->
        <div class="event-info" id="space" > 
           
            <div class="entry flow">
                <p style="display: table; margin: 0 auto"> Make Your Team here </p> <br />
              <div class="entry-content">
               <!-- ======= form ============= -->
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="entry-input" >
                  <p><b>Instructions:</b></p>
                    <ul>
                      <li>You need to add others Participants one by one with their valid <b>PI</b> and <b>Email Id</b>.</li>
                      <li>One Event Id can have <b>max 3</b> & <b>min 1</b> participants.</li>
                      <li>Mail your queries at <b>info@nssc.in</b> .</li>
                    </ul><br/>
                      <p>Put PI Id:</p> 
                       <input type="text" name="sdpi" value="<?php echo $sdpi; ?>" required/> 
                       <br /><br />
                  <input type="submit" value="Add" name="space-submit" class="button button5" />
                </form> <!-- ============ form end =========== -->
              </div>
            </div>

            <div class="result flow">
                  <p style="display: table; margin: 0 auto"> Current Status </p><br />
               <div class="result-content">
                   <ul>
                     <li>Your PI: <b><?php echo $pi_admin; ?></b> </li>
                     <li>Your Event Id: <b><?php echo $space_admin; ?></b> </li>
                     <li>Members in Event Id: <b><?php echo $teamid_space; ?></b> 
                     <p id="didnt-register2" class="didnt-register">You have not registered for Space Deb yet.. Do it now</p>
                          <ol type="a" class="mem-list">
                              <li id="myBtn5"><button class="pi-details"><?php echo $pi1_of_space; ?></button></li>
                              <!-- Modal content for PI1 -->
                                    <div id="myModal5" class="modal">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                            <span class="close close5"><i class="fa fa-times" aria-hidden="true"></i></span>
                                            <h2>Details of  <?php echo $pi1_of_space . " -- Admin" ?></h2>
                                          </div>
                                          <div class="modal-body">
                                            <?php 
                                              $sql = "SELECT * FROM register WHERE pi='$pi1_of_space'";
                                              $run_query = mysqli_query($dbcon, $sql);
                                              if(mysqli_num_rows($run_query) > 0) {
                                                while($row = mysqli_fetch_assoc($run_query)) {
                                                  echo "<b>Name:</b>"." ".$row['name']; 
                                                  echo "<br><b>Email:</b>"." ".$row['email'];
                                                  echo "<br><b>College:</b>"." ".$row['college'];
                                                  echo "<br><b>College Id (Roll No):</b>"." ".$row['collegeId'];
                                                  echo "<br><b>Department:</b>"." ".$row['department'];
                                                  echo "<br><b>Mob No:</b>"." ".$row['contact'];
                                                }
                                              }
                                            ?>
                                          </div>
                                          <div class="modal-footer">
                                            <h3></h3>
                                          </div>
                                      </div>
                                    </div> <!-- end of modal === -->
                              <p id="suggestion2" class="suggestion">You do not have a team for Space Deb... Make a team now</p>
                              <li id="myBtn6"><button class="pi-details"><?php echo $pi2_of_space; ?></button></li>
                                  <!-- Modal content for PI2 -->
                                    <div id="myModal6" class="modal">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                            <span class="close close6"><i class="fa fa-times" aria-hidden="true"></i></span>
                                            <h2>Details of  <?php echo $pi2_of_space ?></h2>
                                          </div>
                                          <div class="modal-body">
                                            <?php 
                                              $sql = "SELECT * FROM register WHERE pi='$pi2_of_space'";
                                              $run_query = mysqli_query($dbcon, $sql);
                                              if(mysqli_num_rows($run_query) > 0) {
                                                while($row = mysqli_fetch_assoc($run_query)) {
                                                  echo "<b>Name:</b>"." ".$row['name']; 
                                                  echo "<br><b>Email:</b>"." ".$row['email'];
                                                  echo "<br><b>College:</b>"." ".$row['college'];
                                                  echo "<br><b>College Id (Roll No):</b>"." ".$row['collegeId'];
                                                  echo "<br><b>Department:</b>"." ".$row['department'];
                                                  echo "<br><b>Mob No:</b>"." ".$row['contact'];

                                                }
                                              }
                                            ?>
                                          </div>
                                          <div class="modal-footer">
                                            <h3></h3>
                                          </div>
                                      </div>
                                    </div> <!-- end of modal === -->
                              <li id="myBtn7"><button class="pi-details"><?php echo $pi3_of_space; ?></button></li>
                                <!-- Modal content for PI3 -->
                                    <div id="myModal7" class="modal">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                            <span class="close close7"><i class="fa fa-times" aria-hidden="true"></i></span>
                                            <h2>Details of  <?php echo $pi3_of_space; ?></h2>
                                          </div>
                                          <div class="modal-body">
                                            <?php 
                                              $sql = "SELECT * FROM register WHERE pi='$pi3_of_space'";
                                              $run_query = mysqli_query($dbcon, $sql);
                                              if(mysqli_num_rows($run_query) > 0) {
                                                while($row = mysqli_fetch_assoc($run_query)) {
                                                  echo "<b>Name:</b>"." ".$row['name']; 
                                                  echo "<br><b>Email:</b>"." ".$row['email'];
                                                  echo "<br><b>College:</b>"." ".$row['college'];
                                                  echo "<br><b>College Id (Roll No):</b>"." ".$row['collegeId'];
                                                  echo "<br><b>Department:</b>"." ".$row['department'];
                                                  echo "<br><b>Mob No:</b>"." ".$row['contact'];
                                                }
                                              }
                                            ?>
                                          </div>
                                          <div class="modal-footer">
                                            <h3></h3>
                                          </div>
                                      </div>
                                    </div> <!-- end of modal === -->
                          </ol><!--  ==== end of list of grous ====-->
                     </li>
                   </ul>
                   <div class="delete-lfmem">
                    	 <p style="text-align: center; "><b>Delete participants from team</b></p>
		                 <form method="POST" class="entry-input" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		                     <p>Put PI Id</p>
		                     <input type="text" name="sddelete" style="max-width: 100%; width: 100%" value="<?php echo $sddelete; ?>" required/><br />
		                     <input type="submit" name="sddelete-btn" value="Delete" class="button button5"/>
		                 </form>
                  </div>
               </div>
            </div>

        </div>  <!-- ===== Space Deb form & result end -->
    </div> <!-- ==== Space Deb ends here -->
</div>



<!-- ============================================== 
                                                            ==================================
                                                 Designeer Event 
            ======================================= 
               
                                                           =============================== -->

<!-- ======================= backend of Designeer (Adding participants) ========================= -->
<?php

if(isset($_POST['design-submit'])) {
  $depi = $_POST['depi'];
  $depi = strtoupper("$depi"); // converting to uppercase letter
  if(!empty($depi) ) {
    if($depi == $pi_admin) {
      echo "<script>alert('Dont Put your Own PI over here..Here you can add other participants in your team if you have registered for Designeer.If you have not registered yet, first register for Designeer above.')</script>";
      $depi = '';
    }
    else {
      $sql = "SELECT * FROM register WHERE pi = '$depi'";
      $run_query = mysqli_query($dbcon, $sql);
      if(mysqli_num_rows($run_query) > 0) {
              while($row = mysqli_fetch_assoc($run_query)) {
                $name = $row['name'];
                $pi = $row['pi'];
                $design = $row['design'];
              }
              // echo "<script>alert('Name: $name, PI Id: $pi, HP Id: $design')</script>";
              // Checking if admin has place to add the participant
              $event_table = "SELECT * FROM deevent WHERE teamid = '$design_admin'";
              $run_event_table = mysqli_query($dbcon, $event_table);
              if(mysqli_num_rows($run_event_table) > 0) { 
                  while($row = mysqli_fetch_assoc($run_event_table)) {
                      $pi1 = $row['pi1'];
                      $pi2 = $row['pi2'];
                      $pi3 = $row['pi3'];
                  }
                  if(!empty($pi2) && !empty($pi3) ) { // if any of field except Pi1 is full, ==> participants has initiated 
                                                                                     // grouping
                      echo "<script>alert('Number of participants in one team for Designeer has reached at maximum..There is no place in this team to add other participants.We are sorry..')</script>";
                  }
                  else { // admin has place to add participant in his group

                    if(!empty($design)) { // participant already has the event Id
                          // echo "<script>alert('already have event Id')</script>";
                          $sql = "SELECT * FROM deevent WHERE teamid = '$design' AND (pi1 = '$depi' OR pi2 = '$depi' OR pi3 = '$depi')";
                          $run_query = mysqli_query($dbcon, $sql);
                          if(mysqli_num_rows($run_query) > 0) {
                            while($row = mysqli_fetch_assoc($run_query)) {
                              $pi1 = $row['pi1'];
                              $pi2 = $row['pi2'];
                              $pi3 = $row['pi3'];
                            }
                            if(empty($pi2) && empty($pi3) && !empty($pi1)) { // Participant dont have grouping
                                 // echo "<script>alert('OK...no grouping of $hppi with $hoverpod')</script>";
                                 $sql = "DELETE FROM deevent WHERE teamid = '$design' AND pi1 = '$depi'";
                                 if(mysqli_query($dbcon, $sql)) {
                                 // echo "<script>alert('Deleted the row of Participant as he dint had any grouping')</script>";
                                 $sql = "UPDATE register SET design = '$design_admin' WHERE pi = '$depi'";
                                   if(mysqli_query($dbcon, $sql)) {
                                        // echo "<script>alert('Updated the event Id of $hppi from $hoverpod to $hoverpod_admin')</script>";
                                        $design = $design_admin; // assigning the event id of admin to Participant

                                         
                                         // echo "<script>alert('Will be adding Participant in the group of admin')</script>";
                                         $sql = "SELECT * FROM deevent WHERE teamid = '$design_admin'";
                                         $run_query = mysqli_query($dbcon, $sql);
                                         if(mysqli_num_rows($run_query) > 0) {
                                              while($row = mysqli_fetch_assoc($run_query)){
                                                   $pi1 = $row['pi1'];
                                                   $pi2 = $row['pi2'];
                                                   $pi3 = $row['pi3'];
                                                }
                                                    if(empty($pi2)) { //if col2 is not filled
                                                          $sql = "UPDATE deevent SET pi2 = '$depi' WHERE teamid = '$design_admin'";
                                                          if(mysqli_query($dbcon, $sql)) {
                                                               // echo "<script>alert('Added the PI Id $hppi in colmn2 in the group of $pi_admin with event Id $hoverpod ')</script>";
                                                               echo "<script>alert('$depi has been successfully added in your team..')</script>";
                                                               $design = $design_admin; // assigning the event id of admin to Participant
                                                          } 
                                                    }
                                                  else if(empty($pi3)) {   //if col3 is not filled
                                                         $sql = "UPDATE deevent SET pi3 = '$depi' WHERE teamid = '$design_admin'";
                                                         if(mysqli_query($dbcon, $sql)) {
                                                             // echo "<script>alert('Added the PI Id $hppi in colmn3 in the group of $pi_admin with event Id $hoverpod ')</script>";
                                                            echo "<script>alert('$depi has been successfully added in your team..')</script>";
                                                            $design = $design_admin; // assigning the event id of admin to Participant
                                                          } 
                                                  }
                                          }
                                          else {
                                              echo "<script>alert('Error coming')</script>";
                                          }
                                     }
                                 }
                            }
                            else {
                              echo "<script>alert('$depi is already envolved in a group. You can not add him/her in your group..')</script>";
                            }
                          }

                    }
                    else { // participant did not have the event Id
                          // echo "<script>alert('dont have event id')</script>";
                          $sql = "UPDATE register SET design = '$design_admin' WHERE pi = '$depi'";
                          if(mysqli_query($dbcon, $sql)) {
                                   // echo "<script>alert('Given the event Id $hoverpod_admin to participant $hppi')</script>";
                                   $design = $design_admin; // assigning the event id of admin to Participant

                                  
                                   // echo "<script>alert('Will be adding Participant in the group of admin')</script>";
                                  $sql = "SELECT * FROM deevent WHERE teamid = '$design_admin'";
                                  $run_query = mysqli_query($dbcon, $sql);
                                 if(mysqli_num_rows($run_query) > 0) {
                                     while($row = mysqli_fetch_assoc($run_query)){
                                        $pi1 = $row['pi1'];
                                        $pi2 = $row['pi2'];
                                        $pi3 = $row['pi3'];
                                    }
                                  if(empty($pi2)) { //if col2 is not filled
                                     $sql = "UPDATE deevent SET pi2 = '$depi' WHERE teamid = '$design_admin'";
                                     if(mysqli_query($dbcon, $sql)) {
                                           echo "<script>alert('$depi has been successfully added in your team..')</script>";
                                          $design = $design_admin; // assigning the event id of admin to Participant
                                     }  
                                  }

                                  else if(empty($pi3)) { //if col3 is not filled
                                    $sql = "UPDATE deevent SET pi3 = '$depi' WHERE teamid = '$design_admin'";
                                   if(mysqli_query($dbcon, $sql)) {
                                       echo "<script>alert('$depi has been successfully added in your team..')</script>";
                                       $design = $design_admin; // assigning the event id of admin to Participant
                                    } 
                                  }
                        }
                        else {
                          echo "<script>alert('Error coming')</script>";
                        }
              }
                    } 
                  }
        } 
        else {
          echo "<script>alert('Error detected')</script>";
        }
      }
      else {
        echo "<script>alert('Wrong Combination of PI Id and Email Id.')</script>";
        $depi = "";
      }     
    }
    
  }
}

?>


<!-- ============================ 
                  ============= PHP for deleting members from group in Designeer ==================== -->

 <?php
if(isset($_POST['dedelete-btn'])) {
  $dedelete = $_POST['dedelete']; 
  $dedelete = strtoupper("$dedelete"); // converting to uppercase letter
  if(!empty($dedelete)) {
           $sql = "SELECT * FROM register WHERE pi = '$dedelete'";
           $run_query = mysqli_query($dbcon, $sql);
           if(mysqli_num_rows($run_query) > 0) { // entered PI Id for delete exists in database
               $sql = "SELECT * FROM deevent WHERE teamid = '$design_admin' AND (pi1 = '$dedelete' OR pi2 = '$dedelete' OR pi3 = '$dedelete')";
               $run_query = mysqli_query($dbcon, $sql);
              if(mysqli_num_rows($run_query) > 0) { // entered PI Id for delete is in admin's group
                  // echo "<script>alert('$hpdelete is in the group of admin')</script>";
                  while($row = mysqli_fetch_assoc($run_query)) {
                    $pi1 = $row['pi1'];
                    $pi2 = $row['pi2'];
                    $pi3 = $row['pi3'];
                  }
                  if($pi1 == $pi_admin) { // if loggedin participants is admin or not
                      // echo "<script>alert('you are admin')</script>"; 
   
                          // (!oliftoff) hadnt registered for the event before getting into team
                        if($dedelete == $pi2) {
                            $sql = "UPDATE deevent SET pi1 = '' WHERE teamid = '$design_admin'";
                            if(mysqli_query($dbcon, $sql)) {
                                 // echo "<script>alert('made space in colmn2 in event table..')</script>";    
                            }
                        }
                        if($dedelete == $pi2) {
                            $sql = "UPDATE deevent SET pi2 = '' WHERE teamid = '$design_admin'";
                            if(mysqli_query($dbcon, $sql)) {
                                 // echo "<script>alert('made space in colmn2 in event table..')</script>";    
                            }
                        }
                      else if($dedelete == $pi3) {
                            $sql = "UPDATE deevent SET pi3 = '' WHERE teamid = '$design_admin'";
                            if(mysqli_query($dbcon, $sql)) {
                              // echo "<script>alert('made space in colmn3 in event table..')</script>";    
                            }
                      }
                      
                          $insert = "UPDATE register SET design = '' WHERE pi = '$dedelete'";
                          if(mysqli_query($dbcon, $insert) > 0) {
                                echo "<script>alert('Admin, $dedelete is not anymore in your team..Refresh the page to see result')</script>";
                          }

                        // ========= code for giving new event id after deleting from team

                      // $check = "SELECT * FROM register WHERE design = (SELECT MAX(design) FROM register)";
                      // $result = mysqli_query($dbcon,$check);
                      // if(mysqli_num_rows($result) > 0) {  
                      //     while($row = mysqli_fetch_assoc($result)) {
                      //         $design = $row['design'];
                      //         $design = str_replace("DE", "", $design);
                      //         $design = "DE".($design + 1);
                      //     }
                      //         // updating liftoff colmn register table with new LF id 
                      //     $insert = "UPDATE register SET design = '$design' WHERE pi = '$dedelete'";
                      //     if(mysqli_query($dbcon, $insert) > 0) {
                      //             // echo "<script>alert('Your new event id for Hoverpod is $hoverpod')</script>";     
                      //            // inserting new table with new event id
                      //           $sql = "INSERT INTO deevent (teamid, pi1, pi2, pi3) VALUES ('$design', '$dedelete', '', '')";
                      //           if(mysqli_query($dbcon, $sql)) {
                      //               // echo "<script>alert('inserted new row in event table with pi1: $hpdelete & teamid: $hoverpod')</script>";
                      //                echo "<script>alert('Admin, $dedelete is not anymore in your team..Refresh the page to see result')</script>";
                      //           }  
                      //     }
                      // }

                      // ========= end of code for giving new event id after deleting from team


                  }
                  else {
                    echo "<script>alert('You are not admin of your team..You dont have right to delete someone from your team...this thing can be done only by Admin of your team')</script>";
                    $dedelete = ""; 
                  }
          }
          else {
            echo "<script>alert('$dedelete is not in your team')</script>";  
                $dedelete = ""; 
          }
        } 
        else {
              echo "<script>alert('$dedelete is not a valid event Id')</script>"; 
              $dedelete = "";
        }
       }
  else {
    echo "<script>alert('Put PI Id if you want to delete')</script>";
  }
}

 ?>



<!-- ====== PHP for viewing details of his group in Designeer ===== -->
<?php
$sql = "SELECT * FROM `deevent` WHERE `teamid` = '$design_admin'";
$run_query = mysqli_query($dbcon, $sql) or die(mysqli_error($dbcon));  
if(mysqli_num_rows($run_query) > 0) {
  while($row = mysqli_fetch_assoc($run_query)) {
    $teamid_design = $row['teamid'];
    $pi1_of_design = $row['pi1'];
    $pi2_of_design = $row['pi2'];
    $pi3_of_design = $row['pi3'];
  }

     echo '<style type="text/css">
           #didnt-register3 {
                display: none;
           }
           </style>';
   
      // when participants registered for events and and didnt made team
  if(empty($pi2_of_design) && empty($pi3_of_design) ) {
     echo '<style type="text/css">
           #suggestion3 {
                display: block;
           }
           </style>';
  }
      // hide suggestion to make team if admin has added at least one member
  if(!empty($pi2_of_design) || !empty($pi3_of_design) ) {
    echo '<style type="text/css">
           #suggestion3 {
               display: none;
           }
           </style>';
  }

  if(empty($pi2_of_design)) {
    echo '<style type="text/css">
           #myBtn9 {
               display: none;
           }
           </style>';
  }
  if(empty($pi3_of_design)) {
    echo '<style type="text/css">
           #myBtn10 {
               display: none;
           }
           </style>';
  }
  
}

else { // if row doesnt exist or doesnt encountring the exact the row
  echo '<style type="text/css">
           #myBtn8,  #myBtn9,  #myBtn10 {
               display: none;
           }
           </style>';

  echo '<style type="text/css">
           #suggestion3 {
               display: none;
           }
           </style>';
}

?>



<div class="body-holder">
<!-- ===================================== Designeer ========================= -->
    <div class="row" id="liftoff-event">   
      <div class="event-btn-container">
        <div class="event-btn-tag">
           <button id="design-btn" class="show-hide-btn" ><h2> Designeer </h2></button>
        </div>
      </div>
        
        <!-- ===== Designeer form & result conatiner ===== -->
        <div class="event-info" id="design" > 
           
            <div class="entry flow">
                <p style="display: table; margin: 0 auto">Make Your Team here</p> <br />
              <div class="entry-content">
               <!-- ======= form ============= -->
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="entry-input" >
                  <p><b>Instructions:</b></p>
                    <ul>
                      <li>You need to add others Participants one by one with their valid <b>PI</b> and <b>Email Id</b>.</li>
                      <li>One Event Id can have <b>max 3</b> & <b>min 1</b> participants.</li>
                      <li>Mail your queries at <b>info@nssc.in</b> .</li>
                    </ul><br/>
                      <p>Put PI Id:</p> 
                       <input type="text" name="depi" value="<?php echo $depi; ?>" required/> 
                       <br /><br />
                  <input type="submit" value="Add" name="design-submit" class="button button5" />
                </form> <!-- ============ form end =========== -->
              </div>
            </div>

            <div class="result flow">
                  <p style="display: table; margin: 0 auto"> Current Status </p><br />
               <div class="result-content">
                   <ul>
                     <li>Your PI: <b><?php echo $pi_admin; ?></b> </li>
                     <li>Your Event Id: <b><?php echo $design_admin; ?></b> </li>
                     <li>Members in Event Id: <b><?php echo $teamid_design; ?></b> 
                     <p id="didnt-register3" class="didnt-register">You have not registered for Designeer yet.. Do it now</p>
                          <ol type="a" class="mem-list">
                              <li id="myBtn8"><button class="pi-details"><?php echo $pi1_of_design; ?></button></li>
                              <!-- Modal content for PI1 -->
                                    <div id="myModal8" class="modal">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                            <span class="close close8"><i class="fa fa-times" aria-hidden="true"></i></span>
                                            <h2>Details of  <?php echo $pi1_of_design . " -- Admin" ?></h2>
                                          </div>
                                          <div class="modal-body">
                                            <?php 
                                              $sql = "SELECT * FROM register WHERE pi='$pi1_of_design'";
                                              $run_query = mysqli_query($dbcon, $sql);
                                              if(mysqli_num_rows($run_query) > 0) {
                                                while($row = mysqli_fetch_assoc($run_query)) {
                                                  echo "<b>Name:</b>"." ".$row['name']; 
                                                  echo "<br><b>Email:</b>"." ".$row['email'];
                                                  echo "<br><b>College:</b>"." ".$row['college'];
                                                  echo "<br><b>College Id (Roll No):</b>"." ".$row['collegeId'];
                                                  echo "<br><b>Department:</b>"." ".$row['department'];
                                                  echo "<br><b>Mob No:</b>"." ".$row['contact'];
                                                }
                                              }
                                            ?>
                                          </div>
                                          <div class="modal-footer">
                                            <h3></h3>
                                          </div>
                                      </div>
                                    </div> <!-- end of modal === -->
                              <p id="suggestion3" class="suggestion">You do not have a team for Designeer... Make a team now</p>
                              <li id="myBtn9"><button class="pi-details"><?php echo $pi2_of_design; ?></button></li>
                                  <!-- Modal content for PI2 -->
                                    <div id="myModal9" class="modal">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                            <span class="close close9"><i class="fa fa-times" aria-hidden="true"></i></span>
                                            <h2>Details of  <?php echo $pi2_of_design ?></h2>
                                          </div>
                                          <div class="modal-body">
                                            <?php 
                                              $sql = "SELECT * FROM register WHERE pi='$pi2_of_design'";
                                              $run_query = mysqli_query($dbcon, $sql);
                                              if(mysqli_num_rows($run_query) > 0) {
                                                while($row = mysqli_fetch_assoc($run_query)) {
                                                  echo "<b>Name:</b>"." ".$row['name']; 
                                                  echo "<br><b>Email:</b>"." ".$row['email'];
                                                  echo "<br><b>College:</b>"." ".$row['college'];
                                                  echo "<br><b>College Id (Roll No):</b>"." ".$row['collegeId'];
                                                  echo "<br><b>Department:</b>"." ".$row['department'];
                                                  echo "<br><b>Mob No:</b>"." ".$row['contact'];

                                                }
                                              }
                                            ?>
                                          </div>
                                          <div class="modal-footer">
                                            <h3></h3>
                                          </div>
                                      </div>
                                    </div> <!-- end of modal === -->
                              <li id="myBtn10"><button class="pi-details"><?php echo $pi3_of_design; ?></button></li>
                                <!-- Modal content for PI3 -->
                                    <div id="myModal10" class="modal">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                            <span class="close close10"><i class="fa fa-times" aria-hidden="true"></i></span>
                                            <h2>Details of  <?php echo $pi3_of_design; ?></h2>
                                          </div>
                                          <div class="modal-body">
                                            <?php 
                                              $sql = "SELECT * FROM register WHERE pi='$pi3_of_design'";
                                              $run_query = mysqli_query($dbcon, $sql);
                                              if(mysqli_num_rows($run_query) > 0) {
                                                while($row = mysqli_fetch_assoc($run_query)) {
                                                  echo "<b>Name:</b>"." ".$row['name']; 
                                                  echo "<br><b>Email:</b>"." ".$row['email'];
                                                  echo "<br><b>College:</b>"." ".$row['college'];
                                                  echo "<br><b>College Id (Roll No):</b>"." ".$row['collegeId'];
                                                  echo "<br><b>Department:</b>"." ".$row['department'];
                                                  echo "<br><b>Mob No:</b>"." ".$row['contact'];
                                                }
                                              }
                                            ?>
                                          </div>
                                          <div class="modal-footer">
                                            <h3></h3>
                                          </div>
                                      </div>
                                    </div> <!-- end of modal === -->
                          </ol><!--  ==== end of list of grous ====-->
                     </li>
                   </ul>
                   <div class="delete-lfmem">
                       <p style="text-align: center; "><b>Delete participants from team</b></p>
                     <form method="POST" class="entry-input" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                         <p>Put PI Id</p>
                         <input type="text" name="dedelete" style="max-width: 100%; width: 100%" value="<?php echo $dedelete; ?>" required/><br />
                         <input type="submit" name="dedelete-btn" value="Delete" class="button button5"/>
                     </form>
                  </div>
               </div>
            </div>

        </div>  <!-- ===== Designeer form & result end -->
    </div> <!-- ==== Designeer ends here -->
</div>


    <div class="bottom-links event-btn-container" style="">
          <div class="link-redirect">
              <a class="button button6" href="../home.php">GET BACK</a>
         </div>
          <div class="link-redirect">
              <a class="button button6" href="events-registration.php">Liftoff & Hoverpod</a>
         </div>
         <div class="link-redirect">
              <a class="button button6" href="ss-pp-registration.php">Sensorous & Paper Presentation</a>
         </div>
         <div class="link-redirect">
              <a class="button button6" href="sp-rc-registration.php">Spazor & Rocrun</a>
         </div>
    </div>


</div>


<script>
/* ====================================== Case Study PI details btn ============================== */
// =========================== pi1 -----------------------
var modal1 = document.getElementById('myModal1');
var btn1 = document.getElementById("myBtn1");
var span1 = document.getElementsByClassName("close1")[0]; 
btn1.onclick = function() {
    modal1.style.display = "block";
}
span1.onclick = function() {
    modal1.style.display = "none";
}
// =========================== pi2 ------------------------
var modal2 = document.getElementById('myModal2');
var btn2 = document.getElementById("myBtn2");
var span2 = document.getElementsByClassName("close2")[0]; 
btn2.onclick = function() {
    modal2.style.display = "block";
}
span2.onclick = function() {
    modal2.style.display = "none";
}
// =========================== pi3
var modal3 = document.getElementById('myModal3');
var btn3 = document.getElementById("myBtn3");
var span3 = document.getElementsByClassName("close3")[0]; 
btn3.onclick = function() {
    modal3.style.display = "block";
}
span3.onclick = function() {
    modal3.style.display = "none";
}
// =========================== pi4 ------------------
var modal4 = document.getElementById('myModal4');
var btn4 = document.getElementById("myBtn4");
var span4 = document.getElementsByClassName("close4")[0]; 
btn4.onclick = function() {
    modal4.style.display = "block";
}
span4.onclick = function() {
    modal4.style.display = "none";
}

/* ====================================== Space Deb PI details btn ============================== */
// =========================== pi1 -----------------------
var modal5 = document.getElementById('myModal5');
var btn5 = document.getElementById("myBtn5");
var span5 = document.getElementsByClassName("close5")[0]; 
btn5.onclick = function() {
    modal5.style.display = "block";
}
span5.onclick = function() {
    modal5.style.display = "none";
}
// =========================== pi2 ------------------------
var modal6 = document.getElementById('myModal6');
var btn6 = document.getElementById("myBtn6");
var span6 = document.getElementsByClassName("close6")[0]; 
btn6.onclick = function() {
    modal6.style.display = "block";
}
span6.onclick = function() {
    modal6.style.display = "none";
}
// =========================== pi3 ------------------------
var modal7 = document.getElementById('myModal7');
var btn7 = document.getElementById("myBtn7");
var span7 = document.getElementsByClassName("close7")[0]; 
btn7.onclick = function() {
    modal7.style.display = "block";
}
span7.onclick = function() {
    modal7.style.display = "none";
}
/* ========================= Designeer ======================= */
// =========================== pi1 ------------------------
var modal8 = document.getElementById('myModal8');
var btn8 = document.getElementById("myBtn8");
var span8 = document.getElementsByClassName("close8")[0]; 
btn8.onclick = function() {
    modal8.style.display = "block";
}
span8.onclick = function() {
    modal8.style.display = "none";
}
// =========================== pi2
var modal9 = document.getElementById('myModal9');
var btn9 = document.getElementById("myBtn9");
var span9 = document.getElementsByClassName("close9")[0]; 
btn9.onclick = function() {
    modal9.style.display = "block";
}
span9.onclick = function() {
    modal9.style.display = "none";
}
// =========================== pi2 ------------------
var modal10 = document.getElementById('myModa10');
var btn10 = document.getElementById("myBtn10");
var span10 = document.getElementsByClassName("close10")[0]; 
btn10.onclick = function() {
    modal10.style.display = "block";
}
span10.onclick = function() {
    modal10.style.display = "none";
}



/* ===================== window click for all events ============================ */
window.onclick = function(event) {
    /* ========== Case Study ======== */
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
    else if (event.target == modal2) {
        modal2.style.display = "none";
    }
    else if (event.target == modal3) {
        modal3.style.display = "none";
    }
    else if (event.target == modal4) {
        modal4.style.display = "none";
    }
    /* ======== Space Deb ============== */
    else if (event.target == modal5) {
        modal5.style.display = "none";
    }
    else if (event.target == modal6) {
        modal6.style.display = "none";
    }
    else if (event.target == modal7) {
        modal7.style.display = "none";
    }
    /* ============= Designeer ========== */
    else if (event.target == modal8) {
        modal8.style.display = "none";
    }
    else if (event.target == modal9) {
        modal9.style.display = "none";
    }
    else if (event.target == modal10) {
        modal10.style.display = "none";
    }
}
</script>

</body>
</html>
