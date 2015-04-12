<?php
include("header.php");
include("database.php");
include("function.php");
session_start();

$user=$_SESSION["username"];


?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <title>Plan N Share | Search</title>
    <link rel="stylesheet" href="foundation/css/foundation.css" />
    <script src="foundation/js/vendor/modernizr.js"></script>
    <style type="text/css">
<!--
.style1 {
	color: #00FF00;
	font-weight: bold;
	font-style: italic;
}
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
   <?php
   if(login())
{
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
	  <li><a href="http://www.yatra.com/">PlanMyTrip</a></li>	
	   <li><a href="sharemytrip.php">ShareMyTrip</a></li>	
         <li class="has-dropdown">
        <a href="#" class="style1"><font size="3">Hi.<?php echo $_SESSION["username"]; ?></font></a>
        <ul class="dropdown">
		  <li><a href="profile.php">Profile</a></li>
		  <li><a href="myguide.php">MyGuide</a></li>
          <li class="active"><a href="signout.php">Sign Out</a></li>
        </ul>
      </li>
    </ul>
	<?php
	}
	else{
	?> <nav class="top-bar" data-topbar role="navigation">
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
          <li><a href="about.php">About</a></li>
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
      	<div class="panel">
	        
			 
	<br><br>
  			
			<h3><center> Search </center></h3>
		 </br>
		   <form name="form">
          <input name="username" type="text" placeholder="Username..." style="width:89%; height: 2.3125rem;  ">
		  <br>
		 <center> OR</center>
		  
		  <input name="fromtxt" type="text" placeholder="FROM" style="width:45%; height: 2.3125rem;  ">
		  <input name="totxt" type="text" placeholder="TO" style="width:45%; height: 2.3125rem;  ">
		  <br>
		  <br>
          <center><input type="submit" name="sub121" value="Find" class="small success button"  /></center>
        </form>
		</div>
		 <h4>Result...</h4>
			<?php
			if(isset($_GET["sub121"]))
			{
			   $userinput=$_GET["username"];
			   $fromtxt=$_GET["fromtxt"];
			   $totxt=$_GET["totxt"];
			   if($userinput=='')
			   {
			   		if($fromtxt!='' && $totxt!='')
					{
						$s="SELECT * FROM `data` WHERE `to`= '$totxt' AND `from`='$fromtxt' ";
                        $rc=mysql_query($s);
						?>
						<table border="1">
						<th>Person</th>
						<th>TripName</th>
						<th>From</th>
						<th>To</th>
						<th>Expense</th>
						<?php
						
						while($row = mysql_fetch_array($rc))
			            {
			
		?>
<tr>
	<td height="30" align="center" width="300"><?php echo $row['username']; ?></td>
    <td align="center" width="300"><a href="findout.php?id=<?php echo $row['id']; ?>"><?php echo $row['trip_name']; ?></a></td>
    <td align="center" width="300"><?php  echo $row['from']; ?></td>
	<td align="center" width="300"><?php echo $row['to']; ?></td>
    <td align="center" width="300"><?php  echo $row['total']; ?></td>
    
	 
</tr>
    
                     <?php } ?>
</table>    

					 <?php } ?>
			    <?php } ?>
				<?php
				if($userinput!='')
			   {
			   		if($fromtxt=='' && $totxt=='')
					{
						$s="select * from data where `username` like '%$userinput%'";
						$rc=mysql_query($s);
						?>
						<table border="1">
						<th>Person</th>
						<th>TripName</th>
						<th>From</th>
						<th>To</th>
						<th>Expense</th>
						<?php
						
						while($row = mysql_fetch_array($rc))
			            {
			
		?>
<tr>
	<td height="30" align="center" width="300"><?php echo $row['username']; ?></td>
    <td align="center" width="300"><a href="findout.php?id=<?php echo $row['id']; ?>"><?php echo $row['trip_name']; ?></a></td>
    <td align="center" width="300"><?php  echo $row['from']; ?></td>
	<td align="center" width="300"><?php echo $row['to']; ?></td>
    <td align="center" width="300"><?php  echo $row['total']; ?></td>
    
	 
</tr>
    
                     <?php } 
					}
			   }
			   if($userinput!='')
			   {
			   		if($fromtxt!='' && $totxt!='')
					{
						$s="select * from data where `username` like '%$userinput%' AND `to`= '$totxt' AND `from`='$fromtxt'";
						$rc=mysql_query($s);
						?>
						<table border="1">
						<th>Person</th>
						<th>TripName</th>
						<th>From</th>
						<th>To</th>
						<th>Expense</th>
						<?php
						
						while($row = mysql_fetch_array($rc))
			            {
			
		?>
<tr>
	<td height="30" align="center" width="300"><?php echo $row['username']; ?></td>
    <td align="center" width="300"><a href="findout.php?id=<?php echo $row['id']; ?>"><?php echo $row['trip_name']; ?></a></td>
    <td align="center" width="300"><?php  echo $row['from']; ?></td>
	<td align="center" width="300"><?php echo $row['to']; ?></td>
    <td align="center" width="300"><?php  echo $row['total']; ?></td>
    
	 
</tr>
    
                     <?php } 
					}
			   }?>
			   
				
				
				
				
			  
			  <?php //m 
			  } ?>
			
			
      	</div>
      </div>
    </div>
    <script src="foundation/js/vendor/jquery.js"></script>
    <script src="foundation/js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
