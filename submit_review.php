<?php
include 'config.php';
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $movie_id = $_POST['movie_id'];
    $review_content = $_POST['review_content'];
    $rating = $_POST['rating'];
    $user_id=$_POST['user_id'];


    // Insert review and rating into the database
    
    $query = "INSERT INTO reviews (movie_id,review_content, rating, timestamp, user_id) VALUES ('$movie_id','$review_content', '$rating', NOW(),'$user_id')";
    $result = mysqli_query($con, $query);

    if ($result) {
        // Review submitted successfully
        header("Location:info_page.php?movie_id=$movie_id");


        exit();
    } else {
        // Error handling
        echo "Error: " . mysqli_error($con);
    }

    // Close database connection
    // mysqli_close($con);
}
