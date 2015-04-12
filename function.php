<?php

session_start();

function login()
{
	if(isset($_SESSION["username"]))
	{
		$loged=TRUE;
		return $loged;
	}
}
?>