<?php
$con=mysqli_connect('localhost','root','','moviemagnet');
$A_name=$_POST['username'];
$A_password=$_POST['userpassword'];
$result=mysqli_query($con,"SELECT * FROM `admin` WHERE adminname='$A_name' AND adminpassword='$A_password'");

session_start();
if(mysqli_num_rows($result)){
    $_SESSION['admin']=$A_name;
    echo"
    <script>
    alert('Login successfully');
    window.location.href='../adminPanel.php';
    </script>
    ";
}
else{
    echo"
    <script>
    alert('Login failed');
    window.location.href='login.php';
    </script>
    ";
}
?>