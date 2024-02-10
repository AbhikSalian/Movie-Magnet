<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix Catalog</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #141414;
            color: white;
        }

        .container {
            padding: 20px;
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .genre {
            margin-bottom: 30px;
            position: relative; /* Add relative positioning */
        }

        .genre h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .catalog-container {
            overflow-x: auto;
            margin-bottom: 20px;
        }

        .catalog {
            white-space: nowrap; /* Prevent movies from wrapping */
            transition: transform 0.5s ease; /* Add smooth transition */
        }

        .movie {
            display: inline-block;
            width: 250px;
            margin-right: 20px;
            background-color: #333;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            cursor: pointer;
            vertical-align: top; /* Align movies at the top */
        }

        .movie img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .movie h2 {
            padding: 10px;
            font-size: 16px;
            margin: 0;
        }

        .arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            padding: 10px;
            z-index: 1; /* Ensure arrows are above movies */
        }

        .arrow-left {
            left: 10px;
        }

        .arrow-right {
            right: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Netflix Catalog</h1>
        </div>

        <div class="genre">
            <h1>Action</h1>
            <div class="catalog-container action-catalog-container">
                <button class="arrow arrow-left" onclick="scrollLeft('action')">&#10094;</button>
                <div class="catalog action-catalog">
                    <div class="movie">
                        <img src="action_movie1.jpg" alt="Action Movie 1">
                        <h2>Action Movie Title 1</h2>
                    </div>
                    <div class="movie">
                        <img src="action_movie2.jpg" alt="Action Movie 2">
                        <h2>Action Movie Title 2</h2>
                    </div>
                    <div class="movie">
                        <img src="action_movie3.jpg" alt="Action Movie 3">
                        <h2>Action Movie Title 3</h2>
                    </div>
                    <div class="movie">
                        <img src="action_movie4.jpg" alt="Action Movie 4">
                        <h2>Action Movie Title 4</h2>
                    </div>
                    <div class="movie">
                        <img src="action_movie5.jpg" alt="Action Movie 5">
                        <h2>Action Movie Title 5</h2>
                    </div>
                    <div class="movie">
                        <img src="action_movie6.jpg" alt="Action Movie 6">
                        <h2>Action Movie Title 6</h2>
                    </div>
                    <div class="movie">
                        <img src="action_movie7.jpg" alt="Action Movie 7">
                        <h2>Action Movie Title 7</h2>
                    </div>
                    <div class="movie">
                        <img src="action_movie8.jpg" alt="Action Movie 8">
                        <h2>Action Movie Title 8</h2>
                    </div>
                    <div class="movie">
                        <img src="action_movie9.jpg" alt="Action Movie 9">
                        <h2>Action Movie Title 9</h2>
                    </div>
                    <div class="movie">
                        <img src="action_movie10.jpg" alt="Action Movie 10">
                        <h2>Action Movie Title 10</h2>
                    </div>
                </div>
                <button class="arrow arrow-right" onclick="scrollRight('action')">&#10095;</button>
            </div>
        </div>

        <!-- Add more genre sections here -->
    </div>

    <script>
        function scrollLeft(genre) {
            const catalogContainer = document.querySelector(`.${genre}-catalog-container`);
            catalogContainer.scrollLeft -= 300; // Adjust scrolling distance
        }

        function scrollRight(genre) {
            const catalogContainer = document.querySelector(`.${genre}-catalog-container`);
            catalogContainer.scrollLeft += 300; // Adjust scrolling distance
        }
    </script>
</body>
</html>
