<?php 
    $id=$_GET['ID'];
    include '../../config.php';
    mysqli_query($con,"DELETE FROM `cinematable` WHERE ID=$id");
    header("location:index.php");
    ?>