<?php
include("header.php");
include("database.php");
//include("function.php");
session_start();/*
if(!login())
{
	header("location:index.php");
}*/

$user=$_SESSION["username"];
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Plan N Share | MyProfile</title>
    <link rel="stylesheet" href="foundation/css/foundation.css" />
    <script src="foundation/js/vendor/modernizr.js"></script>
    <style type="text/css">
<!--
.style2 {font-size: 12%}
-->
    </style>
	
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
        <a href="#" class="style1"><font size="3">Hi.<?php echo $user ?></font></a>
        <ul class="dropdown">
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
         <div align="right">Find Trips..
         <a href="find.php"><input type="submit" name="sub" value="Find" class="opqbutton" /></a>
		</div>
      </div>
	 
    </div>
    
    <div class="row">
      <div class="large-12 columns">
      	<div class="panel">
		<h3>You can upload your documents and tickets here:</h3>
		This can be helpful in ID proofs storage, tickets storage...</br><br>
<form  method="post" name="frm" enctype="multipart/form-data">
<input type="file" name="file"  />
<input type="submit" name="sub" value="submit" />
</form>
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

<?php

include("header.php");
include("database.php");
include("function.php");

$file=$_FILES["file"]["tmp_name"];
if(!isset($file))
{
echo "<script language='javascript'> alert('plz select image'); </script>";
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
