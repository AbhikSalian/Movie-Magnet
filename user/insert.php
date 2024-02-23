<?php
$con=mysqli_connect('localhost','root','','moviemagnet');
    if(isset($_POST['submit'])){
        $Name=$_POST['name'];
        $Email=$_POST['email'];
        $Number=$_POST['number'];
        $Password=md5($_POST['password']);
        
    $dup_email=mysqli_query($con,"SELECT * FROM `user` WHERE Email='$Email'");
    $dup_username=mysqli_query($con,"SELECT * FROM `user` WHERE Username='$Name'");
    if(mysqli_num_rows($dup_email)){
        echo "<script> 
        alert('This email is already taken');
        window.location.href='register.php';
        </script>";
    }
    if(mysqli_num_rows($dup_username)){
        echo "<script> 
        alert('This username is already taken');
        window.location.href='register.php';
        </script>";
    }
    else{
        mysqli_query($con,"INSERT INTO `user`(`username`, `email`, `number`, `userpassword`) VALUES ('$Name','$Email','$Number','$Password')");
        echo "<script> 
        alert('Register succesfully');
        window.location.href='login.php';
        </script>";
    }
}
?>