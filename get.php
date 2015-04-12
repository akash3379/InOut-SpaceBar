<?php
include("header.php");
include("database.php");
include("function.php");
session_start();

$user=$_SESSION["username"];
$insert=mysql_query("SELECT * FROM profile WHERE `username`='$user' `id`='26'");
     while( $r=mysql_fetch_array($insert))
	 {
      
	  $image = $r["image"];
	  echo $image;
	  }
//header("Content-type: image/jpeg");

?>