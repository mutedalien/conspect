<?php
session_start();
if (strlen($_SESSION['busket'])>0)
	{
		$_SESSION['colvo']=(int)$_SESSION['colvo']+1;	
		$m=$_SESSION['busket'];
		$_SESSION['busket']=$m."/".(int)$_POST['itemId'];
	}
if (strlen($_SESSION['busket'])==0)
	{	
		$_SESSION['colvo']=1;	
		$_SESSION['busket']=(int)$_POST['itemId'];	
	}
echo $_SESSION['colvo'];
?>	
