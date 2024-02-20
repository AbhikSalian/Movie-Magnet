<?php
error_reporting(0);
session_start();
// echo $_SESSION['user'];
// if (!$_SESSION['user']) {
//     header("location:user/login.php");
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MovieMagnet - Details</title>
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
            height: min-content;
            min-height: 600px;
            width: 100%;
        }

        .movie-image {
            /* flex: 0 0 30%; */
            width: 40%;
            /* padding: 20px; */
            /* margin: auto; */
            /* background-color: red; */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .movie-image img {
            /* width: 100%; */
            width: 75%;
            /* height: 470px; */
            /* border-radius: 5px; */
            padding: 5px;
            border: 2px solid #161A30;
        }

        .movie-details {
            /* flex: 1; */
            padding: 30px 0px;
            width: 40%;
            /* background-color: blue; */
            line-height: 25px;
            color: #F0ECE5;
            word-wrap: break-word;
            display: flex;
            flex-direction: column;

        }

        .movie-title {
            font-size: 24px;
            /* margin-top: 0; */
            width: max-content;
            padding: 5px 20px 5px 20px;
            margin-bottom: 10px;
            background-color: #161A30;
            color: #B6BBC4;
            font-weight: bold;
            word-wrap: break-word;
        }

        .movie-description {
            font-size: 16px;
            word-wrap: break-word;
            color: #B6BBC4;

        }

        /* .movie-meta {
            /* margin-top: 7px; */
        /* }  */

        .movie-details-table {
            width: 100%;
            border-collapse: collapse;
            margin: 10px 0px;

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
            /* scrollbar-width: ; */
            max-height: 500px;
        }

        /* width */
        .review-section::-webkit-scrollbar {
            width: 4px;
        }

        /* Track */
        .review-section::-webkit-scrollbar-track {
            box-shadow: inset 0 0 5px grey;
            border-radius: 10px;
        }

        /* Handle */
        .review-section::-webkit-scrollbar-thumb {
            background: #161A30;
            border-radius: 10px;
        }

        /* Handle on hover */
        .review-section::-webkit-scrollbar-thumb:hover {
            background: #b30000;
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


        .review p:last-child {
            margin-top: 5px;
            /* color: #666; */
        }

        .review_title {
            margin-bottom: 10px;
        }

        .rating {
            display: flex;
            flex-direction: row-reverse;
            align-self: center;
        }

        .rating input[type="radio"] {
            display: none;
        }

        .rating label {
            cursor: pointer;
            font-size: 18px;
            margin-right: 3px;
            color: #F0ECE5;
        }

        .rating label:before {
            content: "\2605";
            /* Unicode character for star */
        }

        .rating input[type="radio"]:checked~label {
            color: #161A30;
            /* Color of the selected stars */
        }

        .reviewBox {
            width: 100%;
            padding: 7px;
            border: none;
            border-bottom: 1px solid #161A30;
            background: transparent;

        }

        .sub {
            display: flex;
            justify-content: space-between;
            margin: 10px 0px;
        }

        .sub button,
        .sub a {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0px 20px 0px 20px;
            background-color: #161A30;
            border: none;
            cursor: pointer;
            color: #F0ECE5;
            text-decoration: none;
            font-size: 14px;

        }

        .sub button:hover,
        .sub a:hover {
            opacity: 0.5;
        }


        .ratingicon {
            padding: 3px 15px;
            background-color: #B6BBC4;
            color: #31304D;
            margin-left: 10px;


        }

        .star {
            display: inline-block;
            font-size: 15px;
            color: #161A30;
            cursor: pointer;
        }

        .star::before {
            content: "\2605";
        }

        .link {
            padding: 3px 18px;
            border: 1px solid #B6BBC4;
            color: #B6BBC4;
            /* background-color:#B6BBC4; */
            width: fit-content;
            align-self: flex-end;
            margin: 20px 5px;
            /* font-weight: bold; */

        }

        .link:hover {
            background-color: #161A30;
            color: #B6BBC4;
            border: 1px solid #161A30;
        }

        .reviewdis {
            display: flex;
            justify-content: space-between;
        }

        .ratingDis {
            width: fit-content;
        }

        .actualReview {
            color: #161A30;
            width: fit-content;
            font-size: 14px;
        }

        .reviewOn {
            font-size: 12px;
            color: #393E46;
            padding-right: 10px;
        }

        .links {
            display: flex;
            justify-content: end;
        }

        .new {
            display: flex;
            justify-content: space-between;
            align-items: center;


        }
    </style>

</head>

<body>
    <?php
    include('header.php');
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
                    <p class="movie-title"><?php echo $movie['mname']; ?></p>
                    <p class="movie-description"><?php echo $movie['desc']; ?></p>

                    <div class="movie-meta">
                        <table class="movie-details-table">
                            <tr>
                                <td class="label">Language</td>
                                <td><?php echo $movie['lang']; ?></td>
                            </tr>
                            <tr>
                                <td class="label">Duration</td>
                                <td>
                                    <?php
                                    // Example duration from the database (assuming it's in the format 'hh:mm:ss')
                                    $durationString = $movie['duration']; // For example, '05:20:00'

                                    // Split the duration into hours, minutes, and seconds
                                    list($hours, $minutes, $seconds) = explode(':', $durationString);

                                    // Convert hours, minutes, and seconds to integers
                                    $hours = (int)$hours;
                                    $minutes = (int)$minutes;
                                    $seconds = (int)$seconds;

                                    // Calculate the total duration in minutes
                                    $totalMinutes = $hours * 60 + $minutes;

                                    // Format the duration
                                    if ($hours > 0 && $minutes > 0) {
                                        $formattedDuration = "$hours h $minutes m";
                                    } elseif ($hours > 0) {
                                        $formattedDuration = "$hours h";
                                    } elseif ($minutes > 0) {
                                        $formattedDuration = "$minutes m";
                                    } else {
                                        $formattedDuration = "Unknown";
                                    }

                                    // Output the formatted duration
                                    echo $formattedDuration; // Output: 5 hours 20 minutes
                                    ?>
                                </td>

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
                                <td>
                                    <?php
                                    // Convert the date string to a timestamp
                                    $timestamp = strtotime($movie['date']);

                                    // Format the timestamp using date() function
                                    echo date('jS, M Y', $timestamp);
                                    ?>
                                </td>
                            </tr>
                        </table>
                        <?php
                        // Retrieve movie ID from the URL
                        if (isset($_GET['movie_id'])) {
                            $movie_id = $_GET['movie_id'];

                            // Fetch reviews and ratings for the movie from the database
                            $query = "SELECT * FROM reviews WHERE movie_id = '$movie_id'";
                            $result = mysqli_query($con, $query);
                            $rating = 0;
                            $count = 0;
                            if ($result) {
                                // Display reviews and ratings


                                while ($row = mysqli_fetch_assoc($result)) {
                                    if ($movie_id == $row['movie_id']) {
                                        $rating += $row['rating'];
                                        $count = $count + 1;
                                        // echo "$count ";
                                    }
                                }
                                if ($count != 0) {
                                    $ratingavg = round($rating / ($count), 1);
                                } else {
                                    $ratingavg = 0;
                                }
                                echo " <span class='ratingicon'>$movie[genre]</span>";
                                echo "<span class='ratingicon'>$ratingavg <div class='star'></div></span>";
                            } else {
                                // Error handling
                                echo "Error: " . mysqli_error($con);
                            }
                        }
                        ?>
                    </div> <!-- Close movie-meta -->
                    <div class="links">
                        <a class="link" href="<?php echo $movie['trailer_link']; ?>" target="_blank">Trailer</a>
                        <a class="link" href="<?php echo $movie['movie_link']; ?>" target="_blank">Watch Now</a>
                    </div>
                </div> <!-- Close movie-details -->


                <div class="review-section">
                    <h3 class="review_title">Reviews</h3>
                    <form id="reviewForm" action="submit_review.php" method="post" onsubmit="return validateForm()">
                        <input type="hidden" name="movie_id" value="<?php echo $movieId; ?>">
                        <input type="hidden" name="user_id" value="<?php echo $_SESSION['user']; ?>">
                        <input class="reviewBox" name="review_content" placeholder="Write your review" required></input>
                        <div class="sub">
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

                            <?php
                            if (isset($_SESSION['user'])) {
                                echo "<button id='submitButton' type='submit' disabled>Review</button>";
                            } else {

                                echo "
                                <a href='user/login.php'>Review</a>
                                ";
                            }
                            ?>

                        </div>
                    </form>


                    <?php
                    // Set the timezone to Indian Standard Time
                    date_default_timezone_set('Asia/Kolkata');

                    // Retrieve movie ID from the URL
                    if (isset($_GET['movie_id'])) {
                        $movie_id = $_GET['movie_id'];

                        // Fetch reviews and ratings for the movie from the database
                        $query = "SELECT reviews.*, user.username 
                        FROM reviews 
                        INNER JOIN user ON reviews.user_id = user.id 
                        WHERE reviews.movie_id = '$movie_id'";
                        $result = mysqli_query($con, $query);



                        if ($result) {
                            // Display reviews and ratings
                            while ($row = mysqli_fetch_assoc($result)) {
                                // Get the timestamp of the review
                                $timestamp = new DateTime($row['timestamp']);

                                // Create a DateTime object for the current time
                                $currentTime = new DateTime();

                                // Calculate the difference between review time and current time
                                $interval = $currentTime->diff($timestamp);

                                // Format the time difference in a human-readable format
                                if ($interval->y > 0) {
                                    $timeAgo = $interval->format('%yyears ago');
                                } elseif ($interval->m > 0) {
                                    $timeAgo = $interval->format('%mmon ago');
                                } elseif ($interval->d > 0) {
                                    $timeAgo = $interval->format('%ddays ago');
                                } elseif ($interval->h > 0) {
                                    $timeAgo = $interval->format('%hhours ago');
                                } elseif ($interval->i > 0) {
                                    $timeAgo = $interval->format('%imin ago');
                                } else {
                                    $timeAgo = 'Just now';
                                }

                                // Output the review with the calculated time ago
                                echo "<div class='review'>";
                                echo  "<div class='reviewdis'>";

                                echo "<p class='actualReview'>{$row['username']}</p>";

                                echo "<div class='new'><div class='reviewOn'>{$timeAgo}</div>";
                                echo "<div class='ratingdis'";

                                for ($i = 1; $i <= 5; $i++) {
                                    if ($i <= $row['rating']) {
                                        echo "<span class='star'></span>"; // Full star
                                    }
                                }
                                echo "</div></div>";
                                echo "</div>";

                                echo "<p class='actualReview'>{$row['review_content']}</p>";

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






    <script>
        function validateForm() {
            // Get the selected rating
            const ratingSelected = document.querySelector('input[name="rating"]:checked');

            // Check if a rating is selected
            if (!ratingSelected) {
                alert('Please select a rating.');
                return false; // Prevent form submission
            }
            return true; // Allow form submission
        }

        // Add event listener to rating inputs
        document.querySelectorAll('input[name="rating"]').forEach(input => {
            input.addEventListener('change', () => {
                // Enable submit button if a rating is selected
                document.getElementById('submitButton').disabled = false;
            });
        });
    </script>




</body>

</html>