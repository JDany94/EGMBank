<?php
if(!empty($_POST))
{
			if($_POST["tipo"]=="1")
			{
			  print "<script>window.location='../indexprincipal.php';</script>";
			}
			if($_POST["tipo"]=="2")
			{
				print "<script>window.location='../indexadmin.php';</script>";
			}
			if($_POST["tipo"]=="3")
			{
				print "<script>window.location='../indexsecundario.php';</script>";
			}
			if($_POST["tipo"]=="4")
			{
				print "<script>window.location='../indexinterno.php';</script>";
			}            
}
