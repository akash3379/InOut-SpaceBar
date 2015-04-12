<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <title>PlanAndShare | Welcome</title>
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
	</head>
<body>
  <nav class="top-bar" data-topbar role="navigation">
  <ul class="title-area">
    <li class="name">
      <h1><font color="#FFFFFF" size="+1"><a href="index.php">PlanAndShare</a></font></h1>
    </li>
     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="index.php"><span>Menu</span></a></li>
  </ul>
  <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul class="right">
	  <li><a href="planmytrip.php">PlanMyTrip</a></li>	
	   <li><a href="sharemytrip.php">ShareMyTrip</a></li>	
         <li class="has-dropdown">
        <a href="#" class="style1"><font size="3">Hi.<?php echo $_SESSION["username"]; ?></font></a>
        <ul class="dropdown">
		  <li><a href="#">Help</a></li>
          <li class="active"><a href="signout.php">Sign Out</a></li>
        </ul>
      </li>
    </ul>

    <!-- Left Nav Section -->
  </section>
</nav>

	
<form  method="post" name="frm" enctype="multipart/form-data">
<center><input type="text" name="name" />
<div align="centre"><input type="file" name="file"  /></div>
<input type="submit" name="sub" value="submit" class="opqbutton" />
</center>
</form>
</body>
</html>

<?php

include("header.php");
include("database.php");
include("function.php");
$user=$_SESSION["username"];
$file=$_FILES["file"]["tmp_name"];
if(!isset($file))
{
echo "plz select image";
}
else{

$image=addslashes(file_get_contents($_FILES["file"]["tmp_name"]));
$name=addslashes($_FILES["file"]["name"]);
$size=getimagesize($_FILES["file"]["tmp_name"]);
if($size==FALSE)
echo "This is not a image";

mysql_query("INSERT INTO  `profile` (
`id` ,
`username` ,
`name`,
`image`
)
VALUES (NULL ,  '$user',  '$name','$image')");
//echo "<img src='get.php?id=$lastid'>";
}
?>
