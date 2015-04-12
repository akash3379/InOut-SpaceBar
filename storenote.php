<?php
include("header.php");
include("database.php");
session_start();
if(isset($_POST["subnote"]))
{
$user=$_SESSION["username"];
$a1=$_POST["tripname"];
$a2=$_POST["from"];
$a3=$_POST["to"];
$a4=$_POST["to1"];
$a5=$_POST["from1"];
$a6=$_POST["via1"];
$a7=$_POST["exp1"];
$a8=$_POST["to2"];
$a9=$_POST["from2"];
$a10=$_POST["via2"];
$a11=$_POST["exp2"];
$a12=$_POST["to3"];
$a13=$_POST["from3"];
$a14=$_POST["via3"];
$a15=$_POST["exp3"];
$a16=$_POST["note"];
$a17=$a7+$a11+$a15;
//$a18=$_POST["file"];




$insert="INSERT INTO  `data` (
`id` ,
`username` ,
`trip_name` ,
`to` ,
`from` ,
`to1` ,
`from1` ,
`via1` ,
`exp1` ,
`to2` ,
`from2` ,
`via2` ,
`exp2` ,
`to3` ,
`from3` ,
`via3` ,
`exp3` ,
`dsc` ,
`total`
)
VALUES (NULL ,  '$user',  '$a1',  '$a3',  '$a2',  '$a4',  '$a5',  '$a6',  '$a7',  '$a8',  '$a9',  '$a10',  '$a11',  '$a12',  '$a13',  '$a14',  '$a15',  '$a16',  '$a17')";


$rs=mysql_query($insert) or die("die");
 

header("location:sharemytrip.php?rc=1");
}

?>