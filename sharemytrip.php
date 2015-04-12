<?php
include("header.php");
include("database.php");
include("function.php");
if(!login())
{
	header("location:index.php");
}
session_start();


?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Plan N Share | ShareMyTrip</title>
    <link rel="stylesheet" href="../onenote/foundation/css/foundation.css" />
    <script src="../onenote/foundation/js/vendor/modernizr.js"></script>
    <style type="text/css">
<!--
.style2 {font-size: 12%}
-->
    </style>
	<script language="javascript">
function check()
{

 if(document.form1.user.value=="")
  {
    alert("Plese Enter Username/Email-id");
	document.form1.user.focus();
	return false;
  }
 }
	
	</script>
</head>
  <body>
  <nav class="top-bar" data-topbar role="navigation">
  <ul class="title-area">
    <li class="name">
      <h1><font color="#FFFFFF" size="+1"><a href="index.php">Plan N Share</a></font></h1>
    </li>
     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="index.php"><span>Menu</span></a></li>
  </ul>
  <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul class="right">
	  <li><a href="http://www.yatra.com/">PlanMyTrip</a></li>	
	   <li><a href="mytrips.php">MyTrips</a></li>	
         <li class="has-dropdown">
        <a href="#" class="style1"><font size="3">Hi.<?php echo $_SESSION["username"]; ?></font></a>
        <ul class="dropdown">
		  <li><a href="profile.php">Profile</a></li>
		  <li><a href="documents.php">MyDocuments</a></li>
		  <li><a href="myguide.php">MyGuide</a></li>
          <li class="active"><a href="signout.php">Sign Out</a></li>
        </ul>
      </li>
    </ul>

    <!-- Left Nav Section -->
  </section>
</nav>
    <div class="row">
      <div class="large-12 columns">
        <h3><center>ShareMyTrip</center></h3>
		
         <div align="right">Find Trips..
          <a href="find.php"><input type="submit" name="sub" value="Find" class="opqbutton" /></a>

		</div>
      </div>
	 
    </div>
    
    <div class="row">
      <div class="large-12 columns">
      	<div class="panel">
		<form action="storenote.php" method="post" name="blog">
		<?php

				if($_GET["rc"]==1)
				{
				echo '<h3>Your data stored Sucessfully</h3> ';
				}
				?>
	      <input type="text" class="txt" name="tripname" placeholder="Name Your TRIP..." >
		  FROM:<input type="text" name="from" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TO:<input type="text" name="to" ><br>
		  <br>
		  Intermediate Haults:<br>
		  FROM.<input type="text" name="to1" placeholder="place1">
		  TO.<input type="text" name="from1" placeholder="place2">
		  VIA.<input type="text" name="via1" placeholder="e.g.:train/plane">
		  EXP.<input type="text" name="exp1" placeholder="In RS/-">
		  <br>
		   FROM.<input type="text" name="to2" placeholder="place3">
		  TO.<input type="text" name="from2" placeholder="place4">
		  VIA.<input type="text" name="via2" placeholder="e.g.:train/plane">
		  EXP.<input type="text" name="exp2" placeholder="In RS/-">
		  
		  <br>
		  FROM.<input type="text" name="to3" placeholder="place5">
		  TO.<input type="text" name="from3" placeholder="place6">
		  VIA.<input type="text" name="via3" placeholder="e.g.:train/plane">
		  EXP.<input type="text" name="exp3" placeholder="In RS/-">
		  <br><br>
		  
		   Details:
		   <textarea rows="10" placeholder="Write your note..." name="note"></textarea>
		   
		   <!-- 
		   <input type="file" name="file"  />
		   -->
		   
		   <input type="submit" name="subnote" class="medium success button" value="Save">
		   <input type="reset" class="medium success button" value="Clear">
		   
		   
		   
		  </form>
	      </div>
      </div>
    </div>
	
	        
				
    <script src="../onenote/foundation/js/vendor/jquery.js"></script>
    <script src="../onenote/foundation/js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
