<?php 
	require_once("conn/koneksi.php");
	
	$sql = $conn->prepare("DELETE  FROM addmanga WHERE judul=?");  
	$sql->bind_param("s", $_GET["judul"]); 
	$sql->execute();
	$sql->close(); 
	$conn->close();
	header('location:crud.php');		
?>