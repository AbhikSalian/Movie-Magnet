<?php

 $Name=$_POST['name'];
 $Password=$_POST['password'] ;
 $con=mysqli_connect('localhost','root','','moviemagnet');
 $result=mysqli_query($con,"SELECT * FROM `user` WHERE (username='$Name' OR email='$Name') AND Userpassword='$Password'");

 session_start();
 if(mysqli_num_rows($result)){
    $_SESSION['user']=$Name;
    
    
    echo "<script> 
    alert('Succesfully login');
    window.location.href='../index.php';
    </script>";
 }
 else{
    echo "<script> 
    alert('Incorrect username/password');
    window.location.href='login.php';
    </script>";
 }
?>