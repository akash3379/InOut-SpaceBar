<?php
include("header.php");
include("database.php");
session_start();
if(isset($_POST["subsignup"])){
$a=$_POST["name"];
$b=$_POST["user"];
$c=$_POST["pass"];
$d=$_POST["city"];
$e=$_POST["phone"];
$f=$_POST["email"];
$g=$_POST["add"];

$check="SELECT * FROM signup WHERE `user`='$b'";
$result=mysql_query($check);

$count=mysql_num_rows($result);
if($count>=1)
{
header("location:signup.php?rc=1");

}
else{
/*$cre="CREATE TABLE `$b` (
`id` INT( 11 ) NOT NULL AUTO_INCREMENT ,
`username` VARCHAR(200) NOT NULL ,
`trip_name` VARCHAR( 200 ) NOT NULL ,
`to` VARCHAR( 200 ) NOT NULL ,
`from` VARCHAR( 200 ) NOT NULL ,
`to1` VARCHAR( 200 ) NULL ,
`from1` VARCHAR( 200 ) NULL ,
`via1` VARCHAR( 200 ) NULL ,
`exp1` INT( 20 ) NULL DEFAULT  '0',
`to2` VARCHAR( 200 ) NULL ,
`from2` VARCHAR( 200 ) NULL ,
`via2` VARCHAR( 200 ) NULL ,
`exp2` INT( 20 ) NULL DEFAULT  '0',
`to3` VARCHAR( 200 ) NULL ,
`from3` VARCHAR( 200 ) NULL ,
`via3` VARCHAR( 200 ) NULL ,
`exp3` INT( 20 ) NULL DEFAULT  '0',
`dsc` VARCHAR( 1000 ) NOT NULL ,
`total` INT( 20 ) NULL DEFAULT  '0',
PRIMARY KEY (  `id` )
) ";
$rrr=mysql_query($cre)or die("Could Not Perform the ");
echo $cre;*/

$table="INSERT INTO  `signup` (
`name` ,
`user` ,
`pass` ,
`city` ,
`phone` ,
`email` ,
`add`
)
VALUES (
'$a',  '$b',  '$c',  '$d',  '$e',  '$f',  '$g'
)";	

$rs=mysql_query($table)or die("Could Not Perform the Query");
header("location:signin.php?returnc=1 && name=$b");
}
}
?>