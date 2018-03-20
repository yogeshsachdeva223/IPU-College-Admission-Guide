<?php
require_once('connect.php');
if(isset($_POST) & !empty($_POST)){
	$username = mysqli_real_escape_string($connection, $_POST['username']);
	//$email = mysqli_real_escape_string($connection, $_POST['email']);
	$password = $_POST['password'];

	$sql = "INSERT INTO `loginto` (uname, psw ) VALUES ('$username', '$password' )";
	$result = mysqli_query($connection, $sql);
	if($result){
		$smsg = "User Registration successfull";
	}else{
		$fmsg = "User registration failed";
	}
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>User Registration in PHP & MySQL</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<link rel='stylesheet prefetch' href='bootstrap.min.css'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>

	<link rel="stylesheet" type="text/css" href="cssregister/styles.css">
</head>
<body  style="background-color:#E8E8E8">




  <!--   HEADER PART    
<div id="header">
  <div class="page-header">
    </a>
    <h9><b>IPU  College  Admission  Guide</b></h9>
  </div>
</div> -->

<!--    NAVIGATION BAR PART    -->

<div id="nav">
  <nav class="navbar navbar-default navbar-fixed-top">
    <!-- <nav class="navbar navbar-default"> -->
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> <!-- buttons when screen size is small -->
          <span class="icon-bar"></span>                <!-- buttons when screen size is small -->
          <span class="icon-bar"></span>                <!-- buttons when screen size is small -->
          <span class="icon-bar"></span>                                        <!-- buttons when screen size is small -->
         </button>
        <!-- buttons when screen size is small -->

        <a style="color:#CCD6DD; font-size:16px;" class="navbar-brand" href="index.php#imagepiclogo">
<img id='nav-image' src='logo_final.png' >
        </a>

      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li <!--class="active"--><a href="index.php" >Home</a></li>
          <li class="dropdown"  >
           <a   class="dropdown-toggle"    href="IPUCET.html" >Entrance Exam  <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="IPUCET.html#ipucet" style="color:black">IPU CET</a></li>
              <li><a href="IPUCET.html#ipucetcriteria" style="color:black">Eligibility Criteria</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a class="dropdown-toggle"  href="abc.html">Engineering Colleges<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="abc.html" style="color:black">About Colleges</a></li>
              <li><a href="placement.html" style="color:black">Placement Cell</a></li>
			  <li><a href="faculty.html" style="color:black">Faculty</a></li>
              <li><a href="engc.html" style="color:black">Allumini</a></li>
              <li><a href="ann.html" style="color:black">Anugoonj</a></li>
              <li><a href="location.html" style="color:black">Location & Maps</a></li>
            </ul>
          </li>

          <li class="dropdown">
            <a class="dropdown-toggle"  href="Counselling.html">Counselling<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="Counselling.html#c1" style="color:black">1st Counselling</a></li>

              <li><a href="Counselling.html#c2" style="color:black">2nd Counselling</a></li>
              <li><a href="Counselling.html#c3" style="color:black">3rd Counselling</a></li>
              <li><a href="Counselling.html#sc" style="color:black">Spot Counselling</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a class="dropdown-toggle"  href="streams4.html">Streams<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="streams4.html#it" style="color:black">Information Technology</a></li>

              <li><a href="streams4.html#cse" style="color:black">Computer Science & Engineering</a></li>
              <li><a href="streams4.html#ece" style="color:black">Electronics & Communication Engineering</a></li>
              <li><a href="streams4.html#mae" style="color:black">Mechanical & Automation Engineering</a></li>

              <li><a href="streams4.html#power" style="color:black">Power Engineering</a></li>

              <li><a href="streams4.html#EEE" style="color:black">Electrical & Electronics Engineering</a></li>

              <li><a href="streams4.html#ice" style="color:black">Instrumentation & Control Engineering</a></li>
              <li><a href="streams4.html#tool" style="color:black">Tool Engineering</a></li>

              <li><a href="streams4.html#chem" style="color:black">Chemical Engineering</a></li>

              <li><a href="streams4.html#enviromental" style="color:black">Environment Engineering</a></li>
            </ul>
          </li>
        </ul>

       
        <ul class="nav navbar-nav navbar-right">
          <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li><a href="tools.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
      </div>
    </div>
  </nav>
</div>








<div class="container">
      <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
      <form class="form-signin" method="POST">
        <h2 class="form-signin-heading"  style="color:red">Sign-up</h2>
        <div class="input-group">
		  <span class="input-group-addon" id="basic-addon1">@</span>
		  <input type="text" name="username" class="form-control" placeholder="Username" required>
		</div>
       <!-- <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus> -->
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
       <button class="btn btn-lg btn-primary btn-block" type="submit" style="background-color:#DC4C46">Register</button>
       <!-- <a class="btn btn-lg btn-primary btn-block" href="login.php">Login</a> -->
      </form>
</div>






<!--    FOOTER PART    -->
<!--<div id="footer">Copyright &copy;  IPU College Admission Guide</div> -->

<div id='footer' class='container-fluid'>
  <div style='background-color:#DC4C46;' class="bgcolor row">
    <div class="col-sm-8">

      <div style="margin-top:15px" class="pull-right">
        <p>Copyright &copy; IPU College Admission Guide</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class=" t pull-right">
        <i class="fa fa-facebook "></i>
        <a href="https://www.instagram.com/yogesh_sachdeva223/?hl=en" target="_blank" class="fa fa-instagram"></a>
        <a href="https://twitter.com/yogeshsachdeva2" target="_blank" class="fa fa-twitter"></a>
        <a href="https://www.linkedin.com/in/yogesh-sachdeva-a02aa5102/" target="_blank" class="fa fa-linkedin"></a>
      </div>
    </div>
  </div>
</div>
  <script src='jquery.min.js'></script>
<script src='bootstrap.min.js'></script>

  
</body>
</html>





</body>
</html>