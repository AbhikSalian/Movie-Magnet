<?php 
$id=$_GET['ID'];
$con = mysqli_connect('localhost', 'root', '', 'moviemagnet');
mysqli_query($con,"DELETE FROM `user` WHERE id=$id");
header("location:userDetails.php");
?>