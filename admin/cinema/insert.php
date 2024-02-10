<?php
if(isset($_POST['submit'])){
    include '../../config.php';
    $movie_name=$_POST['mname'];
    $movie_desc=$_POST['desc'];
    $movie_dir=$_POST['dir'];
    $movie_cast=$_POST['cast'];
    $movie_date=$_POST['date'];
    $movie_lang=$_POST['lang'];
    $movie_duration=$_POST['duration'];
    $movie_image=$_FILES['image'];
    $image_loc=$_FILES['image']['tmp_name'];
    $image_name=$_FILES['image']['name'];
        $img_des="Uploadimage/".$image_name;
    move_uploaded_file($image_loc,"Uploadimage/".$image_name);
    $movie_genre=$_POST['genre'];

    //insert product
    mysqli_query($con, " INSERT INTO `cinematable`( `mname`, `desc`, `dir`, `cast`, `date`, `lang`, `duration`, `genre`, `image`) VALUES ('$movie_name','$movie_desc','$movie_dir','$movie_cast','$movie_date','$movie_lang','$movie_duration','$movie_genre',' $img_des')");
}
?>
