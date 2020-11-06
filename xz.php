<?php 
	$connect = mysqli_connect("127.0.0.1", "root", "", "twitter");
	$ins = "INSERT INTO tweets (author, text) VALUES ('" . $_GET['deb1'] . "', '" . $_GET['deb2'] . "')";
	mysqli_query($connect, $ins);
	header('Location: index.php');
 ?>