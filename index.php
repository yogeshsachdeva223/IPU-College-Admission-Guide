<?php
    mysql_connect("localhost", "root", "") or die("Error connecting to database: ".mysql_error());
    /*
        localhost - it's location of the mysql server, usually localhost
        root - your username
        third is your password
         
        if connection fails it will stop loading the page and display an error
    */
     
    mysql_select_db("tutorial_search") or die(mysql_error());
    /* predictor is the name of database we've created */
     
     
     
?>














<!DOCTYPE html>
<html>
  <head>
   <title>homepage</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet"  href="index.css">
    <link rel="stylesheet" href="bootstrap.min.css">
	
	 <script src="jquery.min.js"></script>
   <script src="bootstrap.min.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	 <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
   <link rel="stylesheet"  href="index.css">

   <style>
     
   </style>
   
   
 

   
   
   
  </head>
  
  <body style="background-color:#E8E8E8" "height:1500px">
  
  
  
  
  
  
  
  
  <?php
    $query = $_GET['query']; 
    // gets value sent over search form
     
   $min_length = 3;
    // you can set minimum length of the query if you want
     
    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
         
        $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
         
        $query = mysql_real_escape_string($query);
        // makes sure nobody uses SQL injection
         
        $raw_results = mysql_query("SELECT * FROM articles
            WHERE (`title` LIKE '%".$query."%') OR (`text` LIKE '%".$query."%')") or die(mysql_error());
             
        // * means that it selects all fields, you can also write: `id`, `title`, `text`
        // articles is the name of our table
         
        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
        // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
        // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
         
        if(mysql_num_rows($raw_results) > 0){ // if one or more rows are returned do following
             
            while($results = mysql_fetch_array($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
             
                echo "<p><h3>".$results['title']."</h3>".$results['text']."</p>";
                // posts results gotten from database(title and text) you can also show id ($results['id'])
            }
             
        }
        else{ // if there is no matching rows do following
            echo "No results";
        }
         
    }
    else{ // if query length is less than minimum
      //  echo "Minimum length is ".$min_length;
    }
?>

  
  
  
  
  
  
   <div id="header">
     
  <div class="page-header">
  

      </a> <h9><b>IPU  College  Admission  Guide</b></h9>      
  </div>
   </div>
   <div id="nav">
   <nav class="navbar navbar-inverse navbar-fixed-top"  >
   <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
	  
	   <a style="color:#CCD6DD; font-size:16px;" class="navbar-brand" href="#imagepiclogo">
<img id='nav-image' src='logo_final.png' >
        </a>

    
    </div> 
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle"  href="IPUCET.html">Enterance Exam<span class="caret"></span></a>
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
          </ul></li>
		
        <li class="dropdown">
          <a class="dropdown-toggle"  href="Counselling.html">Counselling<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="Counselling.html#c1" style="color:black">1st Councelling</a></li>
			
            <li><a href="Counselling.html#c2" style="color:black">2nd Councelling</a></li>
			 <li><a href="Counselling.html#c3" style="color:black">3rd Councelling</a></li>
            <li><a href="Counselling.html#sc" style="color:black">Spot Councelling</a></li>
          </ul></li>
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
          </ul></li>
      </ul>
	  <div class="barsearch">
          <!--this class is not needed btw-->

          <form class="navbar-form navbar-left"   action="search.php" target="_blank" method="GET">

            <div class="input-group">
		
    

              <input type="text" class="form-control" placeholder="Search"  name="query" > <!--  name="srch-term" id="srch-term"	-->
			<!--  <input type="submit"   /> -->
              <div class="input-group-btn">
                <button class="btn btn-default" type="submit" value="Search">
              <i class="glyphicon glyphicon-search"></i> 
             </button> 
              </div>
            </div>
          </form>
		
		  
		  
        </div>
	  
	  
	  
	  
	  
	  
	  
	  
	  
      <ul class="nav navbar-nav navbar-right">
        <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="tools.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul></div>
    
  </div>
</nav>
  </nav>
   
   </div>
   <div id="header">
   
   </div>
   <div id="midportion">
    <div class="container">
   
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
	  <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="1.jpg" alt="IP UNIVERSITY & COLLEGES" style="width:100%;height:400px;">
		
      </div>

      <div class="item">
        <img src="1-13522523.jpg" alt="IP UNIVERSITY & COLLEGES" style="width:100%;height:400px;">
      </div>
    
      <div class="item">
        <img src="bpit1.jpg" alt="IP UNIVERSITY & COLLEGES" style="width:100%;height:400px;">
      </div>
	  
	   <div class="item">
        <img src="mait-1.jpg" alt="IP UNIVERSITY & COLLEGES" style="width:100%;height:400px;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
  
  <div id="imagepiclogo">  
	
      <div class="jumbotron text-center">
	  <div class="heading">
  <h1>Welcome to IPU College </h1><h1> Admission Guide</h1></div>
  <p><b>Because Planning is key to sucess! </b></p> <div id="para"><h12>Guru Gobind Singh Indraprastha University (GGSIPU) is first University established in 1998 by Govt. of NCT of Delhi under the provisions of Guru Gobind Singh Indraprastha University Act, 1998 read with its Amendment in 1999 The University is recognized by University Grants Commission (UGC), India under section 12B of UGC Act. 
 It is a teaching and affiliating University with the explicit objective of facilitating and promoting “studies, research and extension work in emerging areas of higher education with focus on professional education, for example engineering, technology, management studies, medicine, pharmacy, nursing, education, law, etc. and also to achieve excellence in these and connected fields and other matters connected therewith or incidental thereto.”
In order to serve the broad purposes for which the University was established, it set out its statements of Vision, Mission and Quality Policy which read as thus :</h12></div>
  
  </div>

</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Tools</h3>
      <p>Because planning is key to success. We have made a variety of analytical tools based on previous data points to help students plan for exam preparations and College predict ...<a href="tools.php">try tools...</a></p>
    </div>
    <div class="col-sm-4">
      <h3>About us</h3>
      <p>IPU College Admission Guide is a website to help students getting information about Guru Gobind Singh Indraprastha University, i.e. one of the top most ranked Universities of India. IPU College Admission Guide helps students to get the proper guidance for getting admitted in a B.Tech program in Colleges affiliated to G.G.S.I.P.U.<a href="aboutus.html">know more...</a></p>
    </div>
    <div class="col-sm-4">
      <h3>News</h3>     
      <p> <marquee ONMOUSEOVER="this.stop();"
            ONMOUSEOUT="this.start();"  direction="up" SCROLLDELAY="200" scrollamount="5">  IPU CET Counselling 2017 - Earlier, the last date for registration of IPU CET counselling 2017 was June 16. The last date for online fee payment, registration, verification of reserved category certificates have also been extended till June 19..</p><p>
   IPU CET Seat Allotment 2017 - The seat allotment process of IPU CET 2017 at Guru Gobind Singh Indraprastha University (GGSIPU) will be done online from tentatively from June, 2017... <a href="ipunews.html">read more...</a></marquee></p>
    </div>
  </div>
</div>



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
    
	<i href="https://www.facebook.com/yogesh.sachdeva.16" target="_blank" class=" fa fa-facebook"></i>
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