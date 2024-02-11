<?php
// Database connection
$con=mysqli_connect('localhost','root','','moviemagnet');

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

// Get the search query from the form
$searchString = mysqli_real_escape_string($con, $_GET['q']);

// Query to search movies in the database
$sql = "SELECT * FROM cinematable WHERE mname LIKE '$searchString'";

// Perform the query
$result = mysqli_query($con, $sql);

// Check if there are any results
if (mysqli_num_rows($result) > 0) {
    // Output search results
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div>{$row['desc']}</div>";
        // Output other movie details as needed
    }
} else {
    echo "No results found";
}

// Close database connection
mysqli_close($con);
?>
