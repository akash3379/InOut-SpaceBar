<?php
include("header.php");
include("database.php");
include("function.php");

session_start();


?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Plan N Share | Search</title>
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
<?php
if(login())
{
?>
  <body>
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
	   <li><a href="sharemytrip.php">ShareMyTrip</a></li>	
         <li class="has-dropdown">
        <a href="#" class="style1"><font size="3">Hi.<?php echo $_SESSION["username"]; ?></font></a>
        <ul class="dropdown">
		  <li><a href="profile.php">Profile</a></li>
		  <li><a href="myguide.php">MyGuide</a></li>
		  <li><a href="documents.php">MyDocuments</a></li>
          <li class="active"><a href="signout.php">Sign Out</a></li>
        </ul>
      </li>
    </ul>
	<?php
	}
	else{
	?>
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
	  <li><a href="signin.php">Sign In</a></li>	
      <li class="has-dropdown">
        <a href="#">New?</a>
        <ul class="dropdown">
          <li><a href="about.php">ABOUT</a></li>
		  <li><a href="#">MyGuide</a></li>
          
        </ul>
      </li>
	  <li class="active"><a href="signup.php">Sign Up</a></li>
    </ul>
	<?php
	}
	?>
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
        <?php
		$rr=0;
		$user=$_SESSION["username"];
		$id=$_GET["id"];
		
		$sql = "SELECT * FROM `data` where`id`='$id'";
			$result = mysql_query($sql);
			while($row = mysql_fetch_array($result))
			{
			?>
			<center><h3><u><b><?php $user=$row['username']; echo $row['trip_name']; ?></b></u></h3></center>
			<h2> <?php echo $row['from']; ?> to <?php $vv=$row['to']; echo $vv; ?> in only <?php echo $row['total']; ?>.
			
			<?php
			}
			$sql = "SELECT * FROM `data` where `id`='$id'";
			$result = mysql_query($sql);
			while($row = mysql_fetch_array($result))
			{
			if($row['exp1']==0)
			break;
		?>
		<br>
       <h4>Intermediate Details:</h4><br>
	  <center> 
	  <table border="1">
	  <th>FROM</th>
	  <th>TO</th>
	  <th>VIA</th>
	  <th>EXP.</th>
	  
	   <tr>
	   <td width="300"><?php  echo $row['to1']; ?> </td>
	   <td width="300"> <?php echo $row['from1']; ?></td>
	   <td width="300"> <?php echo $row['via1']; ?></td>	   
	   <td width="300"> <?php echo $row['exp1']; ?></td>
	   </tr>
	   <?php 
	   if($row['exp2']==0)
			break;
	   ?>
    	<tr>
	   <td width="300"><?php echo $row['to2']; ?> </td>
	   <td width="300"> <?php echo $row['from2']; ?></td>
	   <td width="300"> <?php echo $row['via2']; ?></td>
	   <td width="300"> <?php echo $row['exp2']; ?></td>
	   </tr>
	    <?php 
	   if($row['exp3']==0)
			break;
	   ?>
    	<tr>
	   <td width="300"><?php echo $row['to3']; ?> </td>
	   <td width="300"> <?php echo $row['from3']; ?></td>
	   <td width="300"> <?php echo $row['via3']; ?></td>
	   <td width="300"> <?php echo $row['exp3']; ?></td>
	   </tr>
    <?php } ?>
</table>    </center>
		<br>
		<h3>Decription:</h3><br>
		<?php
			$sql = "SELECT * FROM `data` where `id`='$id'";
			$result = mysql_query($sql);
			$row = mysql_fetch_array($result);
			echo $row['dsc'];
			$city=$row['to'];
			?>
	      </div>
      </div>
    </div>
	<?php
		$video = "SELECT * FROM `video` WHERE video.city='$city'";
		
		$rc=mysql_query("$video");
		$row=mysql_fetch_array($rc);
		?>		
		<center><object width="420" height="315"
		data="http://www.youtube.com/v/<?php $PP=$row['link']; echo $PP; ?>">
		</object>
            <iframe src="map.php?map=<?php echo $vv; ?>" width="400" height="315"></iframe>
		</center>
				

            
				
    <script src="../onenote/foundation/js/vendor/jquery.js"></script>
    <script src="../onenote/foundation/js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
