<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>temp Rank predictor 2</title>
  
  
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="cssrankpredictor/style.css">

  
</head>

<body>
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
          <li ><a href="index.php">Home</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle"  href="IPUCET.html">Entrance Exam<span class="caret"></span></a>
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
            <a class="dropdown-toggle" href="streams4.html">Streams<span class="caret"></span></a>
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

<!--predictor-->
<!--1.Body color -  #E8E8E8

2.Division or midportion color - White

3.Header/footer/theme color - #DC4C46

4.For Headings and hyperlink use - Red-->
<br><br><br><br>
<div class="row container-fluid">
  <div class="col-sm-3"></div>
  <div class="col-sm-6">
    <h1 style="font-size:50px; color:white; text-align: center;">IPUCET Rank Predictor</h1>
  </div>
  <div class="col-sm-3"></div>
</div>
<div class='container-fluid row'>
  <div class='col-sm-4 for_pad'>
  </div>
  <div class='well col-sm-4'>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> ">
      <div class="form-group">
        <label for="score">Enter CET Score:</label>
        <input name="score" type="number" placeholder="CET Score" min="0" max="600" class="form-control" id="score" required>
      </div>
      
      <button type="submit" class="btn btn-block btn-danger btn-lg">PREDICT RANK</button>
    </form>
  </div>
  <div class='col-sm-4'></div>
</div>
<?php
$score="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  $score=$_POST["score"]; $minimum=0;$maximum=0;
  //    echo "<p style='color:white'>".$score."</p>";
  if($score>500&&$score<=600)
  {    $minimum=1;$maximum=10; 
  }
  if($score>400&&$score<=500)
  {    $minimum=10;$maximum=100; 
  }
  if($score>360&&$score<=400)
  {    $minimum=100;$maximum=400; 
  }
  if($score>350&&$score<=360)
  {    $minimum=400;$maximum=800; 
  }
  if($score>330&&$score<=350)
  {    $minimum=500;$maximum=1000; 
  }
  if($score>310&&$score<=330)
  {    $minimum=1000;$maximum=2000; 
  }
  if($score>290&&$score<=310)
  {    $minimum=2000;$maximum=3000; 
  }
  if($score>250&&$score<=290)
  {    $minimum=3000;$maximum=5000; 
  }
  if($score>235&&$score<=250)
  {    $minimum=5000;$maximum=7000; 
  }
  if($score>220&&$score<=235)
  {    $minimum=7000;$maximum=10000; 
  }
  if($score>210&&$score<=220)
  {    $minimum=10000;$maximum=15000; 
  }
  if($score>200&&$score<=210)
  {    $minimum=15000;$maximum=20000; 
  }
  if($score>180&&$score<=200)
  {    $minimum=20000;$maximum=25000; 
  }
  if($score>160&&$score<=180)
  {    $minimum=25000;$maximum=30000; 
  }
  if($score>130&&$score<=160)
  {    $minimum=30000;$maximum=35000; 
  }
  if($score>100&&$score<=130)
  {    $minimum=35000;$maximum=40000; 
  }
  if($score>80&&$score<=100)
  {    $minimum=40000;$maximum=45000; 
  }
  if($score>50&&$score<=80)
  {    $minimum=45000;$maximum=50000; 
  }
  if($score>=0&&$score<=50)
  {    $minimum=50000;$maximum=100000; 
  }  
  ?>
  <div style='margin-top:25px' class='row container'>
  <div class='col-sm-3'></div>
  <?php
  if($minimum!=50000&&$maximum!=100000)
  {
    echo "<div style='text-align:center' class='well col-sm-6'><p style='font-size:20px'> Your expected rank is between <span > <mark style='color:red'>{$minimum}</mark></span> to <span><mark style='color:red'>{$maximum}</mark></span>.</p></div>"; 
  }
  else
      echo"<div style='text-align:center; margin-top:-25px' class='well col-sm-6'> <p style='font-size:15px;color:red;'>You may not be able to clear the cutoff score.</p><p style='font-size:15px;' class='text-primary'><b>If you learn from defeat, you haven't really lost. Success is not final, failure is not fatal: it is the courage to continue that counts.</b></p>
<p><span class='text-info' style='font-size:25px'>All the best for your future!</span><span style='margin-left:-40px;margin-right:20px;float:right;font-size:40px;color:red;' class='glyphicon glyphicon-thumbs-up'></span></p></div>";
?>
<div class='col-sm-3'></div>
</div>
<?php /*PHP
 $servername = "localhost";
$username = "root";
$password = "";
$dbname = "predict";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM predictor WHERE $category>=$rank";
$result = mysqli_query($conn, $sql);*/ 
?>
<!--<div class="container-fluid row">
<div class="col-sm-3"></div>
<div class="col-sm-6 container well">
<!--<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for College names..">
   <table id="myTable" class="table table-striped table-hover table-bordered">
    <thead>
      <tr>
        <th>S.no</th>
        <th>College name</th>
        <th>Course</th>
        <th><?php /* echo $category; */?></th>
      </tr>
    </thead>
    <tbody>
    -->
<?php
/*if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $row_style = array("d", "success", "danger","info","warning","active");
    $s=1;
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>{$s}</td><td>{$row['Name']}</td><td>{$row['Course']}</td><td>{$row["$category"]}</td></tr>   \n";
        $s++;
    }
} else {
    echo "0 results";
}*/
?>

<!--    </tbody>
   </table>
</div>
<div class="col-sm-3"></div>
</div>  -->
<?php
/*mysqli_close($conn); */

/*PHP ends*/
  
  
  
  
  
  
  
  
}

?>


<!--    FOOTER PART    -->
<!--<div id="footer">Copyright &copy;  IPU College Admission Guide</div> -->

<div id='footer' <?php if(true){echo 'style="position:absolute;bottom:0;"';}?>  class='container-fluid'>
  <div style='background-color:#DC4C46;' class="bgcolor row">
    <div class="col-sm-8">

      <div style="margin-top:15px" class="pull-right">
        <p>Copyright &copy; College Admission Guide</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class=" t pull-right">
        <i class="fa fa-facebook "></i>
        <a href="#" class="fa fa-instagram"></a>
        <a href="#" class="fa fa-twitter"></a>
        <a href="#" class="fa fa-linkedin"></a>
      </div>
    </div>
  </div>
</div>
 <script src='jquery.min.js'></script>
<script src='bootstrap.min.js'></script>

  
</body>
</html>
