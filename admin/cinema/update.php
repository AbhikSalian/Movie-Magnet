<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product page</title>
</head>
<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: Arial, sans-serif;
    }

    .container {
        width: fit-content;
        border: 2px solid black;
        border-radius: 8px;
        text-align: center;
    }

    .form {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .div {
        margin-bottom: 10px;
    }
    .opt{
        text-align: center;
    }

    label {
        font-weight: bold;
    }

    input[type="text"],
    select {
        width: 200px;
        padding: 8px;
        margin-top: 5px;
        margin-bottom: 15px;
        box-sizing: border-box;
    }

    input[type="file"] {
        margin-top: 10px;
    }

    img.img {
        width: 160px;
        margin-top: 10px;
    }

    button[name="update"] {
        padding: 10px;
        background-color: #3498db;
        color: white;
        border: none;
        cursor: pointer;
        border-radius: 5px;
    }

    button[name="update"]:hover {
        background-color: #2980b9;
    }
</style>

<body>
<?php
    $id = isset($_GET['ID']) ? $_GET['ID'] : null;

    if ($id !== null) {
        // Establish a new database connection
        $con = new mysqli('localhost', 'root', '', 'moviemagnet');

        // Check for a successful connection
        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }

        // Use prepared statement to fetch data
        $statement = $con->prepare("SELECT * FROM `cinematable` WHERE id = ?");
        $statement->bind_param("i", $id);
        $statement->execute();
        $result = $statement->get_result();

        if ($result->num_rows > 0) {
            $data = $result->fetch_assoc();
        } else {
            echo "No records found with the provided ID.";
            // You may want to handle this situation differently based on your requirements
        }

        $statement->close();
        $con->close();
    } else {
        header("location:index.php");
        // You may want to handle this situation differently based on your requirements
    }
    ?>


    <div class="container">
        <form action="update.php" method="POST" enctype="multipart/form-data" class="form">
            <span>
                <p>MOVIE UPDATE</p>
            </span>
            <div class="div">
                <label>Movie name:</label>
                <input type="text" value="<?php echo $data['mname'] ?>" name="mname" class="form-control" placeholder="Enter movie name">
            </div>
            <div class="div">
                <label>Movie description:</label>
                <input type="text" value="<?php echo $data['desc'] ?>" name="desc" class="form-control" placeholder="Enter description">
            </div>
            <div class="div">
                <label>Director:</label>
                <input type="text" value="<?php echo $data['dir'] ?>" name="dir" class="form-control" placeholder="Enter Director's name">
            </div>
            <div class="div">
                    <label>Cast:</label>
                    <input type="text" value="<?php echo $data['cast'] ?>" name="cast" class="form-control" placeholder="Enter Cast">
            </div>
            <div class="div">
                    <label>Release date:</label>
                    <input type="date" value="<?php echo $data['date'] ?>" name="date" class="form-control" placeholder="Enter Release date">
            </div>
            <div class="div">
                    <label>Language:</label>
                    <input type="text" value="<?php echo $data['lang'] ?>" name="lang" class="form-control" placeholder="Enter language">
            </div>
            <div class="div">
                    <label>Duration:</label>
                    <input type="time" value="<?php echo $data['duration'] ?>"name="duration" class="form-control" placeholder="Enter Duration">
            </div>
            <div>
                    <label>Genre</label>
                    <select name="genre">
                        <option value="action" <?php echo ($data['genre'] === 'action') ? 'selected' : ''; ?>>Action</option>
                        <option value="scifi" <?php echo ($data['genre'] === 'scifi') ? 'selected' : ''; ?>>Sci-fi</option>
                        <option value="horror" <?php echo ($data['genre'] === 'horror') ? 'selected' : ''; ?>>Horror</option>
                        <option value="crime" <?php echo ($data['genre'] === 'crime') ? 'selected' : ''; ?>>Crime</option>
                        <option value="comedy" <?php echo ($data['genre'] === 'comedy') ? 'selected' : ''; ?>>Comedy</option>
                    </select>
            </div>
            <div class="div">
                    <label style="padding-left: 4rem;">Movie Image</label>
                    <input type="file" name="image">
                    <img class="img" src="<?php echo $data['image'] ?>" alt="">
            </div>
            
            <button name="update">Update</button>
            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
        </form>
    </div>
    <!-- update code -->
    <?php
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $movie_name=$_POST['mname'];
        $movie_desc=$_POST['desc'];
        $movie_dir=$_POST['dir'];
        $movie_cast=$_POST['cast'];
        $movie_date=$_POST['date'];
        $movie_lang=$_POST['lang'];
        $movie_duration=$_POST['duration'];
        $movie_image=$_FILES['image'];
        if($movie_image){}
        $image_loc=$_FILES['image']['tmp_name'];
        $image_name=$_FILES['image']['name'];
        $img_des="Uploadimage/".$image_name;
        move_uploaded_file($image_loc,"Uploadimage/".$image_name);
        $movie_genre=$_POST['genre'];

        include '../../config.php';
        mysqli_query($con, "UPDATE `cinematable` SET `mname`='$movie_name',`desc`='$movie_desc',`dir`='$movie_dir',`cast`='$movie_cast',`date`='$movie_date',`lang`='$movie_lang',`duration`='$movie_duration',`image`='$img_des',`genre`='$movie_genre' WHERE id=$id");
        
    }
    ?>
    </body>

</html>
