
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
    <title>oneNOTES | Create</title>
    <link rel="stylesheet" href="foundation/css/foundation.css" />
    <script src="foundation/js/vendor/modernizr.js"></script>
  </head>
  <body>
  <nav class="top-bar" data-topbar role="navigation">
  <ul class="title-area">
    <li class="name">
      <h1><a href="#">oneNOTES</a></h1>
    </li>
     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>
  <section class="top-bar-section">
    <!-- Right Nav Section -->
     <ul class="right">
	  <li 	><a href="see.php">See Notes</a></li>
	  <li class="active"><a href="create.php">Create Note</a></li>
      <li class="has-dropdown">
        <a href="#" class="style1"><font size="3">Hi.<?php echo $_SESSION["username"]; ?></font></a>
        <ul class="dropdown">
		  <li><a href="#">Help</a></li>
          <li class="active"><a href="signout.php">Sign Out</a></li>
        </ul>
      </li>
	  
	
    </ul> 
	
    <!-- Left Nav Section -->
    <ul class="left">
      <li><a href="menu.php">Home</a></li>
    </ul>
  </section>
</nav>


<div class="row">
      <div class="large-12 columns">
      	<div class="panel">
	        <center><h3>Upload your image</h3></center>
		   <form action="storeimage.php" name="fromimage" method="post"  enctype="multipart/form-data">
				  <div class="row">
				    <div class="large-4 medium-4 columns">
				      <label>CAPTION</label>
				      <input type="text" placeholder="Caption" name="imagename" />
				    </div>
				  </div>
				  <br><br>
				  <div class="row">
				    <div class="large-12 columns">
				      <label>Image</label>
					  
					  <input type="file" name="file" class="button"> 
 			          <input type="checkbox" name="private">Private Note
					</div>
					
				  </div>
				    <input type="submit" name="subnote" class="small button" value="Save">
				</form>
		 <br/></center>
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