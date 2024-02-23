<?php

 $Name=$_POST['name'];
 $Password=md5($_POST['password']);
 $con=mysqli_connect('localhost','root','','moviemagnet');
 $result = mysqli_query($con, "SELECT id, username, email FROM `user` WHERE (username='$Name' OR email='$Name') AND Userpassword='$Password'");

 session_start();
 if ($row = mysqli_fetch_assoc($result)) {
   $_SESSION['user'] = $row['id'];
   // Other operations with retrieved data...

    
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