<?php
  include("user-info.php");
?>
<!DOCTYPE html>
<head>
		  <title>Total Registered Participants</title>
		  <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>$pi_edit[$x]
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
            <li class="active"><a href="#">Total-R</a></li>
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
        <li>
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Web <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="../web/viewRegister.php">Total-R</a></li>
            <li><a href="viewlf.php">Liftoff</a></li>
            <li><a href="viewhp.php">Hoverpod</a></li>
            <li><a href="viewsp.php">Spazor</a></li>
            <li><a href="viewrc.php">Rocrun</a></li>
            <li><a href="viewss.php">Sensorous</a></li>
            <li><a href="viewpp.php">Paper Presentation</a></li>
            <li><a href="viewcs.php">Case Study</a></li>
            <li><a href="viewsd.php">Space Deb</a></li>
            <li><a href="viewde.php">Designeer</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout </a></li>
      </ul>
    </div>
  </div>
</nav>


<div class="well" style="box-shadow: 0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)!important;"> 
   <h2 class="text-center"><kbd style="background-color: #FF4A56;">Participants on RD</kbd></h2>
    <blockquote class="col-sm-offset-2"><code>With Great Power Comes Great Responsibility..! Use your Admin Powers Carefully !!</code> </blockquote>
</div>

<div id="body">
<table>
<tr>
    <th>Id</th>
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
    <th>Created</th>
</tr>


<?php
$x = 0;
$sql = "SELECT * FROM pionrd";
$run_query = mysqli_query($dbcon, $sql);
if(mysqli_num_rows($run_query) > 0) {
  while($row = mysqli_fetch_assoc($run_query)) {
    $x++;
    $pi_edit[$x] = $row['pi'];
  }
}
for($y=1; $y <= $x; $y++) {
$getpname = "SELECT * FROM register WHERE pi = '$pi_edit[$y]'";
$run_query = mysqli_query($dbcon, $getpname);
if(mysqli_num_rows($run_query) > 0) {
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
        $created = $row['created'];
     ?>
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
          <td><?php echo $created ; ?></td>          

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
