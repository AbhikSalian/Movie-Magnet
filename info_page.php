<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0%;
            padding: 0%;
            box-sizing: border-box;
        }

        .container {
            display: flex;
            justify-content: space-evenly;
            background-color: #31304D;
            height: 570px;
            width: 100%;
        }




        /* CSS styles */
        /* .movie-info-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #f3f3f3;
            border-radius: 5px;
            overflow: hidden;
        } */

        .movie-image {
            /* flex: 0 0 30%; */
            width: 30%;
            /* padding: 20px; */
            /* margin: auto; */
            /* background-color: red; */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .movie-image img {
            /* width: 100%; */
            height: 470px;
            /* border-radius: 5px; */
            padding: 5px;
            border: 2px solid #161A30;
        }

        .movie-details {
            /* flex: 1; */
            padding: 40px 0px;
            width: 40%;
            /* background-color: blue; */
            line-height: 30px;
            color: #F0ECE5;
        }

        .movie-title {
            font-size: 24px;
            /* margin-top: 0; */
            width: max-content;
            padding: 5px 20px 5px 20px;
            background-color: #161A30;
            color: #F0ECE5;
        }

        .movie-description {
            font-size: 16px;
        }

        .movie-meta {
            margin-top: 20px;
        }

        .movie-details-table {
            width: 100%;
            border-collapse: collapse;
        }

        .movie-details-table td {
            padding: 10px;
            border-bottom: 1px solid #161A30;
            color: #B6BBC4;

        }

        .movie-details-table .label {
            width: 150px;
            vertical-align: top;
        }

        .genre-capsule:hover {
            background-color: #ddd;
        }

        .review-section {
            width: 35%;
            padding: 20px;
            margin: 40px;
            background-color: #B6BBC4;
            overflow-y: scroll;
            scrollbar-width: none;
        }

        .review {
            border-bottom: 1px solid #ccc;
            padding: 10px;
        }

        .review p {
            margin: 0;
            font-size: 16px;
            line-height: 1.5;
        }

        .review p:first-child {
            font-weight: bold;
            color: #333;
        }

        .review p:last-child {
            margin-top: 5px;
            color: #666;
        }

        .rating {
            display: inline-block;
        }

        .rating input[type="radio"] {
            display: none;
        }

        .rating label {
            cursor: pointer;
            font-size: 25px;
            color: #ddd;
        }

        .rating label:before {
            content: "\2605";
            /* Unicode character for star */
        }

        .rating input[type="radio"]:checked~label {
            color: #ffc107;
            /* Color of the selected stars */
        }
    </style>

</head>

<body>
    <?php
    include('head.php');
    ?>

    <?php
    // Check if the movie_id parameter exists in the URL
    if (isset($_GET['movie_id'])) {
        // Get the movie ID from the URL
        $movieId = $_GET['movie_id'];

        // Connect to the database
        $con = mysqli_connect('localhost', 'root', '', 'moviemagnet');

        // Check connection
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        }

        // Query to retrieve movie information based on the movie ID
        $query = "SELECT * FROM cinematable WHERE id = $movieId";

        // Execute the query
        $result = mysqli_query($con, $query);

        // Check if the query was successful
        if ($result) {
            // Fetch the movie details
            $movie = mysqli_fetch_assoc($result);
    ?>

            <div class="container">
                <div class="movie-image">
                    <img src="admin/cinema/<?php echo $movie['image']; ?>" class="img" alt="<?php echo $movie['mname']; ?>">
                </div>

                <div class="movie-details">
                    <h2 class="movie-title"><?php echo $movie['mname']; ?></h2>
                    <p class="movie-description"><?php echo $movie['desc']; ?></p>

                    <div class="movie-meta">
                        <table class="movie-details-table">
                            <tr>
                                <td class="label">Language</td>
                                <td><?php echo $movie['lang']; ?></td>
                            </tr>
                            <tr>
                                <td class="label">Genres</td>
                                <td>
                                    <?php
                                    $genres = explode(", ", $movie['genre']);
                                    foreach ($genres as $genre) {
                                        echo "<span class='genre-capsule'>$genre</span> ";
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="label">Duration</td>
                                <td><?php echo $movie['duration']; ?> Hrs</td>
                            </tr>
                            <tr>
                                <td class="label">Cast</td>
                                <td><?php echo $movie['cast']; ?></td>
                            </tr>
                            <tr>
                                <td class="label">Director</td>
                                <td><?php echo $movie['dir']; ?></td>
                            </tr>
                            <tr>
                                <td class="label">Release Date</td>
                                <td><?php echo $movie['date']; ?></td>
                            </tr>
                        </table>
                    </div> <!-- Close movie-meta -->
                </div> <!-- Close movie-details -->


                <div class="review-section">
                    <h3>Write a Review</h3>
                    <form action="submit_review.php" method="post">
                        <input type="hidden" name="movie_id" value="<?php echo $movieId; ?>">
                        <input name="review_content" placeholder="Write your review" required></input>
                        <div class="rating">
                            <input type="radio" id="star5" name="rating" value="5">
                            <label for="star5"></label>
                            <input type="radio" id="star4" name="rating" value="4">
                            <label for="star4"></label>
                            <input type="radio" id="star3" name="rating" value="3">
                            <label for="star3"></label>
                            <input type="radio" id="star2" name="rating" value="2">
                            <label for="star2"></label>
                            <input type="radio" id="star1" name="rating" value="1">
                            <label for="star1"></label>
                        </div>
                        <button type="submit">Submit Review</button>
                    </form>


                    <h2>User Reviews</h2>
                    <?php
                    // Retrieve movie ID from the URL
                    if (isset($_GET['movie_id'])) {
                        $movie_id = $_GET['movie_id'];

                        // Fetch reviews and ratings for the movie from the database
                        $query = "SELECT * FROM reviews WHERE movie_id = '$movie_id'";
                        $result = mysqli_query($con, $query);

                        if ($result) {
                            // Display reviews and ratings
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<div class='review'>";
                                echo "<p>{$row['review_content']}</p>";
                                echo "<p>Rating: {$row['rating']}</p>";
                                echo "</div>";
                            }
                        } else {
                            // Error handling
                            echo "Error: " . mysqli_error($con);
                        }
                    }
                    ?>


                </div>

            </div> <!-- Close container -->

    <?php
            // Close the database connection
            mysqli_close($con);
        } else {
            echo "Error: " . mysqli_error($con);
        }
    }
    ?>












</body>

</html>