<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Website</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        /* Customize your styles here */

        #banner {
            position: relative;
            height: 400px; /* Adjust as needed */
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
            color: #fff; /* Text color */
        }

        /* Add more styles as needed */
    </style>
</head>
<body>

    <!-- Banner with Slideshow -->
    <div id="banner" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images (1).jpg" class="d-block w-100" alt="Slide 1">
                <div class="carousel-caption">
                    <!-- Add caption or content for Slide 1 -->
                </div>
            </div>
            <div class="carousel-item">
                <img src="image.jpg" class="d-block w-100" alt="Slide 2">
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
</body>
</html>
