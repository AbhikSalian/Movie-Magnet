<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Review & Rating</title>
    <style>
        /* Basic styling for the review section */
        .review-section {
            margin-top: 20px;
        }
        .review-form {
            margin-bottom: 20px;
        }
        .review {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
        }
        .review .user-info {
            font-weight: bold;
        }
        .rating {
            color: orange;
        }
    </style>
</head>
<body>
    <h1>Movie Review & Rating</h1>

    <!-- Review form -->
    <div class="review-form">
        <h2>Write a Review</h2>
        <form action="submit_review.php" method="post">
            <input type="hidden" name="movie_id" value="<?php echo $movieId; ?>">
            <div>
                <label for="review_content">Review:</label><br>
                <textarea name="review_content" id="review_content" rows="4" cols="50" required></textarea>
            </div>
            <div>
                <label for="rating">Rating:</label>
                <input type="number" name="rating" id="rating" min="1" max="5" required>
            </div>
            <button type="submit">Submit Review</button>
        </form>
    </div>

    <!-- Existing reviews -->
    <div class="review-section">
        <h2>User Reviews</h2>
        <?php
        // Display existing reviews fetched from the database
        foreach ($reviews as $review) {
            ?>
            <div class="review">
                <p class="user-info"><?php echo $review['username']; ?> - <span class="rating"><?php echo $review['rating']; ?></span></p>
                <p><?php echo $review['content']; ?></p>
            </div>
            <?php
        }
        ?>
    </div>
</body>
</html>
