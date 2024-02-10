<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Review</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .review-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .movie-card {
            text-align: center;
            max-width: 400px; /* Adjust as needed */
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            background-color: #7077A1    ;
        }

        .movie-card img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .movie-name {
            font-size: 18px;
            margin-top: 10px;
        }

        .description {
            margin-top: 10px;
            font-size: 14px;
        }

        .movie-details {
            margin-top: 10px;
            font-size: 14px;
        }

        .movie-time,
        .movie-year,
        .director,
        .actors {
            margin-top: 5px;
            font-size: 14px;
        }

        label {
            display: block;
            margin-top: 10px;
            font-size: 16px;
        }

        input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="review-container">
        <?php
            // Movie data (you can fetch this from a database or other source)
            $movie = [
                'title' => 'Avatar',
                'image' => 'download.jpg',
                'description' => 'A visually stunning science fiction film directed by James Cameron.',
                'movie_time' => '2h 42min',
                'movie_year' => 2009,
                'director' => 'James Cameron',
                'actors' => 'Sam Worthington, Zoe Saldana, Sigourney Weaver',
            ];
        ?>
        
        <div class="movie-card">
            <img src="<?php echo $movie['image']; ?>" alt="<?php echo $movie['title']; ?>">
            <p class="movie-name"><?php echo $movie['title']; ?></p>
            <p class="description"><?php echo $movie['description']; ?></p>
            <p class="movie-details">
                <span class="movie-time">Runtime: <?php echo $movie['movie_time']; ?></span><br>
                <span class="movie-year">Year: <?php echo $movie['movie_year']; ?></span><br>
                <span class="director">Director: <?php echo $movie['director']; ?></span><br>
                <span class="actors">Actors: <?php echo $movie['actors']; ?></span>
            </p>
            <label for="review">Your Review:</label>
            <input type="text" id="review" name="review" placeholder="Write your review...">
        </div>
    </div>
</body>
</html>
