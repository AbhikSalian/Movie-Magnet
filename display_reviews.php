<?php
// Retrieve movie ID from the URL
if (isset($_GET['movie_id'])) {
    $movie_id = $_GET['movie_id'];

    // Connect to the database
    $con = mysqli_connect('localhost', 'root', '', 'moviemagnet');

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

    // Close database connection
    mysqli_close($con);
}
?>
