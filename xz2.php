<?php 
	$connect = mysqli_connect("127.0.0.1", "root", "", "twitter");
	$ins = "INSERT INTO followings (name, chanel, img) VALUES ('" . $_GET['name1'] . "', '" . $_GET['channel'] . "', '" . $_GET['image'] . "')";
	mysqli_query($connect, $ins);
	header('Location: index.php');
 ?>