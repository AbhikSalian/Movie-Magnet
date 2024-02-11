<?php
// Check if the movie_id parameter exists in the URL
if (isset($_GET['movie_id'])) {
    // Get the movie ID from the URL
    $movieId = $_GET['movie_id'];

    // Now you have the movie ID, you can use it to fetch the movie information from the database
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

        // Output the movie information (you can customize this part based on your database structure)
        echo "<h2>Movie Information</h2>";
        echo "<p>Title: " . $movie['mname'] . "</p>";
        echo "<p>Genre: " . $movie['genre'] . "</p>";
        echo "<p>Director: " . $movie['dir'] . "</p>";
        // Output other movie details as needed

        // Close the database connection
        mysqli_close($con);
    } else {
        echo "Error: " . mysqli_error($con);
    }
} else {
    // If the movie_id parameter is not provided, display an error message or redirect the user
    echo "Error: Movie ID not provided.";
}
?>
