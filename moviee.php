<div class="movie-details">
    <!-- Display movie details here -->
</div>

<div class="review-section">
    <h2>User Reviews</h2>
    <!-- Display existing reviews here -->

    <h3>Write a Review</h3>
    <form action="submit_review.php" method="post">
        <input type="hidden" name="movie_id" value="<?php echo $movie_id; ?>">
        <textarea name="review_content" placeholder="Write your review" required></textarea>
        <input type="number" name="rating" min="1" max="5" placeholder="Rating (1-5)" required>
        <button type="submit">Submit Review</button>
    </form>
</div>
