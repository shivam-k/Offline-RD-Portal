<?php
    include("user-info.php");
?>
<!DOCTYPE html>
<head>
		  <title>Designeer--team grouping</title>
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
        <li><a href="../home.php">Home</a></li>
        <li ><a href="../newPI-R.php">NewPI-R</a></li>
        <li ><a href="../PI-R.php">PI-R</a></li>
        <li ><a href="../events-R.php">Events-R</a></li>
        <li class="dropdown active">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Rd <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="../rd/viewRegister.php">Total-R</a></li>
            <li><a href="../rd/viewlf.php">Liftoff</a></li>
            <li><a href="../rd/viewhp.php">Hoverpod</a></li>
            <li><a href="../rd/viewsp.php">Spazor</a></li>
            <li><a href="../rd/viewrc.php">Rocrun</a></li>
            <li><a href="../rd/viewss.php">Sensorous</a></li>
            <li><a href="../rd/viewpp.php">Paper Presentation</a></li>
            <li><a href="../rd/viewcs.php">Case Study</a></li>
            <li><a href="../rd/viewsd.php">Space Deb</a></li>
            <li><a href="../rd/viewde.php">Designeer</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Web <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="viewRegister.php">Total-R</a></li>
            <li><a href="viewlf.php">Liftoff</a></li>
            <li><a href="viewhp.php">Hoverpod</a></li>
            <li><a href="viewsp.php">Spazor</a></li>
            <li><a href="viewrc.php">Rocrun</a></li>
            <li><a href="viewss.php">Sensorous</a></li>
            <li><a href="viewpp.php">Paper Presentation</a></li>
            <li><a href="viewcs.php">Case Study</a></li>
            <li><a href="viewsd.php">Space Deb</a></li>
            <li class="active"><a href="#">Designeer</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout </a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div id="body">


<div class="well" style="box-shadow: 0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)!important;"> 
   <h2 class="text-center"><kbd style="background-color: #FF4A56;">Designeer--Team Grouping on RD</kbd></h2>
   <blockquote class="col-sm-offset-2"><code>With Great Power Comes Great Responsibility..! Use your Admin Powers Carefully !!</code> </blockquote>
</div>

<table>

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
$x = 0;
$y = 0;
$sql = "SELECT * FROM pionrd";
$run_query = mysqli_query($dbcon, $sql);
if(mysqli_num_rows($run_query) > 0) {
  while($row = mysqli_fetch_assoc($run_query)) {
    $pi_edit = $row['pi'];
    $find = "SELECT * FROM register WHERE pi = '$pi_edit'";
    $query = mysqli_query($dbcon, $find);
    if(mysqli_num_rows($query) > 0) {
      while($row = mysqli_fetch_assoc($query)) {
         $x++;
         $design[$x] = $row['design'];
      }
    }
    else {
    echo "<br />not getting table info from register table";
   } 
  }
}
else {
  echo "not getting table pionrd";
}

for($y=1; $y <= $x; $y++) {
    $getpname = "SELECT * FROM deevent WHERE teamid = '$design[$y]'";
    $run_query = mysqli_query($dbcon, $getpname);
    if(mysqli_num_rows($run_query) > 0) {
        while($row = mysqli_fetch_assoc($run_query)) {
            $id = $row['id'];
            $teamid = $row['teamid'];
            $pi1 = $row['pi1'];
            $pi2 = $row['pi2'];
            $pi3 = $row['pi3'];
            $pi4 = $row['pi4'];
         ?>

           <tr> 
              <td><?php echo $id ?></td>
              <td><?php echo $teamid ?></td>
              <td><?php echo $pi1 ?></td>
              <td><?php echo $pi2 ?></td>
              <td><?php echo $pi3 ?></td>
              <td><?php echo $pi4 ?></td>
              <td><?php echo $slot ?></td>
           </tr>
        <?php
        }
    }
}

?>


</table>

    
</div>



</body>
</html>
