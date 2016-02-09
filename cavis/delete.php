<?php 

	include('../database/connect.php');
	$nim = null;
	$nim = $_REQUEST['nim'];

	$result = mysql_query("DELETE FROM cavis WHERE nim='$nim'");
	//echo "UPDATE Items SET nama='$nama', harga='$harga', stok'.$stok' WHERE id='$id'";
	if( $result)
	{
		header('Location: index.php');
	}
	else 
	{
		echo "Error";
	}
 ?>