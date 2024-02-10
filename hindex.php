<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <?php
    include 'header.php';
    ?>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    h1 {
        text-align: center;
        margin: 20px 0;
    }

    .cbody {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        align-items: stretch;
        margin: 10px;
        /* border: 2px solid black;
        box-sizing: border-box; */
    }

    form {
        box-sizing: border-box;
        border-radius: 10px;
        box-shadow: 10px 10px 10px lightblue;
        margin: 10px;
    }

    .card {
        width: 200px;
        margin: 10px;
        text-align: center;
    }


    .card-body {
        padding: 10px;
    }

    h5,
    p {
        font-size: 16px;
        margin: 4px 0;
    }

    input {
        margin: 4px 0;
        padding: 2px;
        width: 100%;
    }

    input[type="submit"] {
        background-color: #1F2544;
        color: white;
        border: none;
        padding: 6px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #2780b9;
    }

    .card {
        overflow: hidden;
        position: relative;
        width: 200px;
        /* Adjust the width as needed */
    }

    .card img {
        width: 100%;
        height: auto;
        transition: transform 0.3s ease-in-out;
    }

    .card:hover img {
        transform: scale(1.1);
    }

    .card-body {
        padding: 8px;
        box-sizing: border-box;
        background: #F8F5F1 ;
    }

    .card-body h5,
    .card-body p {
        margin: 0;
    }

    .card-body input {
        margin-top: 4px;
    }

    #banner {
        position: relative;
        height: 600px;
        /* Adjust as needed */
        overflow: hidden;
    }

    #banner .carousel-inner {
        height: 100%;
    }

    #banner img {
        object-fit: cover;
        width: 100%;
        height: 100%;
    }

    .carousel-caption {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 100%;
        text-align: center;
        color: #fff;
        /* Text color */
    }

    .category {
        background-color: #e6e6fa;
        /* Soft Lavender Color */
        padding: 1rem;
        font-family: Arial, sans-serif;
        /* Set font to Arial or a sans-serif fallback */
        color: #333;
        /* Darker font color for better contrast */
    }

    .category ul {
        margin-top: 1rem;
        display: flex;
        justify-content: space-evenly;
        list-style: none;
    }

    .category ul li a {
        font-size: 1.7rem;
        text-decoration: none;
        text-transform: uppercase;
        color: #555;
        /* Adjust link color for better contrast */
    }
</style>

<body>
    <div>
        <!-- Banner with Slideshow -->
        <div id="banner" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="image.jpg" class="d-block w-100" alt="Slide 1">
                    <div class="carousel-caption">
                        <!-- Add caption or content for Slide 1 -->
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="image2.jpg" class="d-block w-100" alt="Slide 2">
                    <div class="carousel-caption">
                        <!-- Add caption or content for Slide 2 -->
                    </div>
                </div>
                <!-- Add more carousel items as needed -->
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#banner" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#banner" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- Include Bootstrap JS and Popper.js -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

        <div class="category">
            <ul>
                <li><a href=""><b>Action</b></a></li>
                <li><a href=""><b>Comedy</b></a></li>
                <li><a href=""><b>Horror</b></a></li>
            </ul>
        </div>

        <div class='cbody'>
            <div class='card'>
                <img src='download.jpg' class='card-img-top' alt='...'>
                <div class='card-body'>
                    <h5>Avatar</h5>
                    <a href="review.php"><input type='submit' name='addCart' value='Description'></a>
                </div>
            </div>
            <div class='card'>
                <img src='img2.jpg' class='card-img-top' alt='...'>
                <div class='card-body'>
                    <h5>Frozen</h5>
                    <a href="review.php"><input type='submit' name='addCart' value='Description'></a>
                </div>
            </div>
            <div class='card'>
                <img src='img3.jpg' class='card-img-top' alt='...'>
                <div class='card-body'>
                    <h5>Wednesday</h5>
                    <a href="review.php"><input type='submit' name='addCart' value='Description'></a>
                </div>
            </div>
            <div class='card'>
                <img src='img9.jpg' class='card-img-top' alt='...'>
                <div class='card-body'>
                    <h5>Nowhere</h5>
                    <a href="review.php"><input type='submit' name='addCart' value='Description'></a>
                </div>
            </div>
            <div class='card'>
                <img src='img4.jpg' class='card-img-top' alt='...'>
                <div class='card-body'>
                    <h5>Iron man</h5>
                    <a href="review.php"><input type='submit' name='addCart' value='Description'></a>
                </div>
            </div>
            <div class='card'>
                <img src='img5.jpg' class='card-img-top' alt='...'>
                <div class='card-body'>
                    <h5>Kaala Paani</h5>
                    <a href="review.php"><input type='submit' name='addCart' value='Description'></a>
                </div>
            </div>
            <div class='card'>
                <img src='img6.jpg' class='card-img-top' alt='...'>
                <div class='card-body'>
                    <h5>The Mother</h5>
                    <a href="review.php"><input type='submit' name='addCart' value='Description'></a>
                </div>
            </div>
            <div class='card'>
                <img src='img7.jpg' class='card-img-top' alt='...'>
                <div class='card-body'>
                    <h5>Enola Holmes</h5>
                    <a href="review.php"><input type='submit' name='addCart' value='Description'></a>
                </div>
            </div>
            <div class='card'>
                <img src='img8.jpg' class='card-img-top' alt='...'>
                <div class='card-body'>
                    <h5>Matilda</h5>
                    <a href="review.php"><input type='submit' name='addCart' value='Description'></a>
                </div>
            </div>
            <div class='card'>
                <img src='img10.jpg' class='card-img-top' alt='...'>
                <div class='card-body'>
                    <h5>Salaar</h5>
                    <a href="review.php"><input type='submit' name='addCart' value='Description'></a>
                </div>
            </div>
        </div>
    </div>
    <?php
    include 'footer.php';
    ?>
</body>

</html>