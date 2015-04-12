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
    <title>Plan N Share | MyTrips</title>
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
	   <li><a href="sharemytrip.php">ShareMyTrip</a></li>	
         <li class="has-dropdown">
        <a href="#" class="style1"><font size="3">Hi.<?php echo $_SESSION["username"]; ?></font></a>
        <ul class="dropdown">
		  <li><a href="profile.php">Profile</a></li>
		  <li><a href="documents.php">MyDocuments</a></li>
          <li class="active"><a href="signout.php">Sign Out</a></li>
        </ul>
      </li>
    </ul>

    <!-- Left Nav Section -->
  </section>
</nav>
    <div class="row">
      <div class="large-12 columns">
        <h3><center>MyTrip</center></h3>
		
         <div align="right">Find Trips..
          <a href="find.php"><input type="submit" name="sub" value="Find" class="opqbutton" /></a>

		</div>
      </div>
	 
    </div>
    
    <div class="row">
      <div class="large-12 columns">
      	<div class="panel">
		
		<table border="5" width="800" align="center" cellspacing="0" cellpadding="5px">
	
    <tr>
    	<th width="73" class="fill">No.</th>
        <th width="150" class="fill">Tripname</th>
        <th width="150" class="fill">From</th>
		 <th width="150" class="fill">To</th>
       <th width="55" class="fill">Expense</th>
        
  </tr>
        <?php
		$rr=0;
		$user=$_SESSION["username"];
			$sql = "SELECT * FROM `data` where `username`='$user'";
			$result = mysql_query($sql);
			while($row = mysql_fetch_array($result))
			{
			
		?>
<tr>
	<td height="30" align="center"><?php $rr++; echo $rr; ?></td>
    <td align="center"><a href="see.php?id=<?php echo $row['id']; ?>"><?php echo $row['trip_name']; ?></a></td>
    <td align="center"><?php  echo $row['from']; ?></td>
	<td align="center"><?php echo $row['to']; ?></td>
    <td align="center"><?php  echo $row['total']; ?></td>
    
	 
</tr>
    
    <?php } ?>
</table>    
		
		
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
