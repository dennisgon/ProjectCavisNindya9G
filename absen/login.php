<?php

if($_POST['password1']==password)
{
	header("location:admin.php");
}
else if($_POST['password1']!=password)
{
	header("location:salah.php");
}
?>