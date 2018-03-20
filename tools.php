<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Tools page Login</title>
  
  
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="csstools/style.css">

  
</head>

<body>
<?php
session_start();
$uname=$psw="";$count=0;
if(!empty($_POST["logout"])) {
	session_unset();
	session_destroy();
}
if (($_SERVER["REQUEST_METHOD"] == "POST")&&(isset($_POST["uname"]) && isset($_POST["psw"])))
{
    $uname=$_POST["uname"]; $psw=$_POST["psw"];
    // echo "<p style='color:white'>".$rank,$category."</p>";
    
    /*PHP*/
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "login";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM loginto WHERE uname='$uname' and psw='$psw'";
    $result = mysqli_query($conn, $sql);    
    if (mysqli_num_rows($result) > 0) {
        $count=1; 
        $_SESSION["uname"]=$uname;
        $_SESSION["count"]=1;        
    }
    else{
    $count=2; 
    }
    
    mysqli_close($conn);
}
?>



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
<br><br><br>
<div style='background-color:white'>
<br>
    <div class='container row'>
        <div class='col-sm-3'></div>
        <div class='col-sm-6'>
        <h1 style='font-size:50px;color:Red;text-align:center; margin:0; margin-left:30px'><a style='color:red'>Tools</a></h1></div>
        <div class='col-sm-3'>
        <?php if(!empty($_SESSION["count"])){ ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <div style='text-align:center;'><span class='logout' >Welcome <?php echo $_SESSION["uname"]; ?>!</span><br>
            <div>You have successfully logged in</div><input type="submit" name="logout" value="Logout" class="btn btn-danger"></div>
        </form>
        <?php } ?>
        </div>
    </div>
    <div class='row'>
        <div class='col-sm-1'></div>
        <div class=' col-sm-5 well'>
            <div style='font-size:30px; color:grey'>Plan</div>
            <div>Because planning is the key to success. Choose from a variety of analytical tools based on a million data points to help you for exam preparation an college admissions. </div>
        </div>

<!-- LOGIN -->
        <?php if(empty($_SESSION["count"])){?>
        <div class='col-sm-6' style='text-align:center'>    <h2 style='text-align:center;color:red'>Login to use the tools!</h2>
            <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

            <div id="id01" class="modal">
                <form class="modal-content animate" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" style='width:50%'>
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    <!--  <img src="img_avatar2.png" alt="Avatar" class="avatar"> -->
                    </div>

                    <div class="container">
                        <label><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="uname" required>

                        <label><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="psw" required>
        
                        <button type="submit">Login</button>
     <!-- <input type="checkbox" checked="checked"> Remember me-->
      
     <!--PHP-->     <span><a style="color:black" href="register.php">Create an account</a></span>
                    </div>
                    <div class="container" style="background-color:#f1f1f1">
                        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
<!--      <span class="psw">Forgot <a href="#">password?</a></span> -->
                    </div>
                </form>
            </div>
            <?php
            if($count==2)
                echo "<div><b><u>Invalid username or password.<u></b></div>";
            ?>

        </div>
        <?php }else{ ?>
<!--AFTER LOGIN-->
        <div class='col-sm-6' style='text-align:center'>    <h2 style='text-align:center;color:red'>Click on the buttons to use tools!</h2>
            <a href="clgpredictor.php"><button style="width:auto;">College Predictor</button></a>
            <a href="rankpredictor.php"><button style="width:auto;">Rank Predictor</button></a>
            <a href="clgrank.php"><button style="width:auto;">College Rankings</button></a>
        </div>
        <?php } ?>
    </div>
</div>
<br>
<div class='row container-fluid' style='background-image:url("background.jpg"); margin-left:0px;'>
  <br>
  <div class='col-sm-1'></div>
  <div class='col-sm-6'>
    <div> <span class='predictor'>COLLEGE PREDICTOR</span></div><br>
    <h2 class='inside'>Analyze the past and predict 
      your future!</h2><br>
    <p class='inside'> Remember, in life there are no Undo and Redo buttons!</p>
  </div>
  <div class='col-sm-5'>
    <img class='imag-border' src='clg.png' width='398' alt='College Predictor'>
  </div>
</div>

<div style='background-color:white'>
  <br>
  <h1 style='color:Red;text-align:center'><a style='color:red'>How it will help you?</a></h1>
  <div class='row'>

    <div class='col-sm-4'>
      <p class='ab_tools_head'>It’s easy and fast</p>
      <p>Tell us about your actual rank and other relevant details and click on 'Predict College'. It’s unbelievably simple!!</p><br><br>
    </div>
    <div class=' col-sm-4' style='background-color:#e8e8e8;'>
      <p class='ab_tools_head'>Know every possible choice</p>
      <p>You get the result showing all probable college-course combinations. Type the name of the college you prefer in the search bar and get the results. </p><br>
    </div>
    <div class='col-sm-4'>
      <p class='ab_tools_head'>Analyze and identify the best choice</p>
      <p>It’s a matter of your career and life. Take your time to analyze and understand the results. Know the most preferred branch of every college, your probability of getting a particular college-course, and what the cut-off trend of that combination
        has been.</p>
    </div>

  </div>
</div>

<br>
<div class='row container-fluid' style='background-image:url("background.jpg"); margin-left:0px;'>
  <br>
  <div class='col-sm-1'></div>
  <div class='col-sm-6'>
    <div> <span class='predictor'>RANK PREDICTOR</span></div><br>
    <h2 class='inside'>Doing your best is not enough,
did you beat your competitors?</h2><br>
    <p class='inside'>Because, to be a winner you must know your competitors.</p>
  </div>
  <div class='col-sm-5'>
    <img class='imag-border' src='rank.png' width='398' alt='College Predictor'>
  </div>
</div>
<div style='background-color:white'>
  <br>
  <h1 style='color:Red;text-align:center'><a style='color:red'>How it will help you?</a></h1>
  <div class='row'>
    <div class='col-sm-1'></div>
    <div class='col-sm-5'>
      <p class='ab_tools_head'>Learn from history. Determine your future
</p>
      <p>Based on your expected marks and historical trends, get your rank prediction.</p><br><br>
    </div>
    <div class='col-sm-5'>
      <p class='ab_tools_head'>Know where do you stand?</p>
      <p>Find out how much marks are your competitors expecting. Are you above the average?</p><br>
    </div>
    <div class='col-sm-1'></div>
  </div>
</div>

<br>
<div class='row container-fluid' style='background-image:url("background.jpg"); margin-left:0px;'>
  <br>
  <div class='col-sm-1'></div>
  <div class='col-sm-6'>
    <div> <span class='predictor'>COLLEGE RANKINGS</span></div><br>
    <h2 class='inside'>Colleges compete too!</h2><br>
    <p class='inside'>Do you know where different colleges stand in rankings?</p>
  </div>
  <div class='col-sm-5'>
    <img class='imag-border' src='ranking.png' width='398' alt='College Predictor'>
  </div>
</div>
<div style='background-color:white'>
  <br>
  <h1 style='color:Red;text-align:center'><a style='color:red'>How it will help you?</a></h1>
  <div class='row'>
    <div class='col-sm-1'></div>
    <div class='col-sm-5'>
      <p class='ab_tools_head'>Choose the best that you can get
</p>
      <p>Based on the rankings of the colleges in different fields you can easiy choose where you want to go.</p><br><br>
    </div>
    <div class='col-sm-5'>
      <p class='ab_tools_head'>Simplified table having ratings of different colleges.</p>
      <p>You can know which are the top ten colleges, which college has the best campus, all here in a very simplified way!</p><br>
    </div>
    <div class='col-sm-1'></div>
  </div>
</div>
 <script src='jquery.min.js'></script>
<script src='bootstrap.min.js'></script>

    <script src="jstools/index.js"></script>

</body>
</html>
