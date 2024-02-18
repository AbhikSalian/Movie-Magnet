<?php
error_reporting(0);

// Database connection
$con = mysqli_connect('localhost', 'root', '', 'moviemagnet');

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

// Initialize variable to store search results
$searchResults = '';
$searchImage = '';
$searchLang = '';
$searchGenre = '';
$searchDur = '';

// Check if the form has been submitted
if (isset($_POST['q'])) {
    // Get the search query from the form
    $searchString = mysqli_real_escape_string($con, $_POST['q']);

    // Query to search movies in the database
    $sql = "SELECT * FROM cinematable WHERE mname LIKE '%$searchString%'";

    // Perform the query
    $result = mysqli_query($con, $sql);

    // Check if there are any results
    if (mysqli_num_rows($result) > 0) {
        // Output search results
        while ($row = mysqli_fetch_assoc($result)) {
            $searchImage .= "<div><img class='img' src='admin/cinema/$row[image]' alt=''></div>";

            $searchResults .= "<div class='det'><a href='info_page.php?movie_id={$row['id']}' class='head'>{$row['mname']}</a>";
            $searchLang .= "<div class='secondline'><div class='res'>{$row['lang']}</div>";
            $searchGenre .= "<div class='res'>{$row['genre']}</div>";

            // Split the duration into hours, minutes, and seconds
            list($hours, $minutes, $seconds) = explode(':', $row['duration']);

            // Calculate the total duration in seconds
            $totalSeconds = ($hours * 3600) + ($minutes * 60) + $seconds;

            // Convert duration from seconds to hours and minutes format
            $durationHours = floor($totalSeconds / 3600);
            $durationMinutes = floor(($totalSeconds % 3600) / 60);

            // Format the duration to display hours and minutes
            $searchDur .= "<div class='res'>{$durationHours}h {$durationMinutes}m</div></div></div>";

            // Output other movie details as needed
        }
    } else {
        $searchResults = "No results found";
    }
}

// Close database connection
mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        @font-face {
            font-family: 'hii';
            src: url('fonts/TT-Norms-sv/TT Norms sv/TTNorms-Regular.otf');
        }

        * {
            margin: 0;
            padding: 0;
            text-decoration: none;
            box-sizing: border-box;
            list-style: none;
            font-family: 'hii';
        }

        .nav-div {
            width: 100%;
            height: 70px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #31304D;
            /* border-bottom: 8px solid #2b300d; */
        }

        .nav-logo {
            display: flex;
            justify-content: center;
            width: 26%;
            transition: 0.3s;
        }

        .nav-logo a {
            display: flex;
            align-items: center;
        }

        .nav-list {
            width: 25%;
        }

        .list-ul {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
        }

        .list-ul li a:not(.noselect) {
            /* transition: 0.2s; */
            font-size: 14px;
            font-weight: bolder;
            text-transform: uppercase;
            color: #B6BBC4;
            padding: 4px 0px 4px 0px;
        }

        .signout {
            padding: 8px 15px 8px 15px;
            /* border-radius: 10px; */
            border: none;
            background-color: #31304D;
            color: #e0e3ce;
            font-size: 15px;
            cursor: pointer;
            transition: 0.2s;
        }

        .signout:hover {
            opacity: 0.5;
        }

        .list-ul li a:hover:not(.noselect) {
            /* color: #2b300d; */
            /* background-color: #e0e3ce; */
            /* border-radius: 4px; */
            /* opacity: 0.5; */
            border-bottom: 1.5px solid #B6BBC4;

        }

        .nav-logo a:hover {
            opacity: 0.5;
        }

        .nav-menuicon {
            display: none;
        }

        a.active {
            border-bottom: 1.5px solid #B6BBC4;

        }

        .search {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;

        }

        .search input {
            height: 30px;
            width: 200px;
            border: none;
            border: 1.5px solid #B6BBC4;

        }


        .search input[type=text] {
            padding: 5px 10px;
        }

        .search button {
            border: 1.5px solid #B6BBC4;
            cursor: pointer;
            background-color: #B6BBC4;
            color: #161A30;
        }

        .fas {
            transition: transform 0.2s ease-in-out;
            padding: 7px;

        }

        .fas:hover {
            transform: scale(1.3);
            font-weight: bold;
        }

        #searchResults {
            display: none;
            position: absolute;
            background-color: #B6BBC4;
            width: 400px;
            height: min-content;
            display: flex;
            z-index: 1;
            top: 55px;
            left: 400px;
            /* justify-content: center; */
            align-items: center;
            margin-left: auto;
            margin-right: auto;
            padding: 8px;
        }

        #searchResults .img {
            width: 50px;
            height: 100%;
            /* margin: 10px; */
            display: flex;
            justify-content: center;
            align-items: center;

        }

        #searchResults .res {
            margin: 0px 10px;
        }

        .secondline {
            display: flex;
            justify-content: space-evenly;
        }

        .res {
            background-color: #161A30;
            color: #B6BBC4;
            font-size: 14px;
            padding: 2px 10px;
        }

        .head {

            color: #161A30;
            margin: 5px;
            font-weight: bold;
            font-size: 18px;

        }

        .det {
            display: flex;
            flex-direction: column;
            margin: 10px 10px;
            height: 60px;
        }

        .head:hover {
            text-decoration: underline;
        }

        #closeButton {
            position: absolute;
            top: 10px;
            right: 10px;
            border: none;
            background: transparent;
            cursor: pointer;
            padding: 1px 4px;
            border-radius: 100%;
            text-decoration: none;

        }

        #closeButton:hover {
            background-color: #161A30;
            color: #e0e3ce;

        }

        #linke {
            color: #161A30;
        }

        #linke:hover {
            color: #e0e3ce;
        }
    </style>
</head>

<body>
    <header>
        <div class="nav-div">
            <div class="nav-logo">
                <a href="index.php">
                    <img src="MovieMagnet Logo.png" alt="SmartStitch" width="140px ">
                </a>
            </div>
            <form id="searchForm" action="" method="POST">
                <div class="search">
                    <input type="text" id="searchInput" name="q" placeholder="Search for Movies" oninput="toggleButton()">
                    <button id="searchButton" type="submit" onclick="showSearchResults()"><i class="fas fa-search" style="color: #161A30;"></i></button>
                </div>
            </form>

            <div id="searchResults" <?php if (empty($_POST['q'])) {
                                        echo 'style="display: none;"';
                                    } ?>>
                <?php
                $currentURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                if (strpos($currentURL, 'index.php') !== false) {
                    // Code specific to index.php
                    echo '<button id="closeButton" onclick="closeSearchResults()"><a id="linke" href="index.php">X</a></button>';
                } elseif (strpos($currentURL, 'info_page.php') !== false) {
                    // Code specific to info_page.php
                    echo '<button id="closeButton" onclick="reloadInfoPage()">X</button>';
                }

                echo $searchImage;
                echo $searchResults;
                echo $searchLang;
                echo $searchGenre;
                echo $searchDur;
                ?>
            </div>

            <script>
                function reloadInfoPage() {
                    var currentURL = window.location.href;
                    window.location.href = currentURL; // Reload the page with the current URL
                }
            </script>

            <div class="nav-list" id="display">
                <?php
                // Get the current page URL
                $currentURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                // Function to check if a given URL is the current page
                function isActive($url)
                {
                    global $currentURL;
                    return strpos($currentURL, $url) !== false ? 'active' : '';
                }
                ?>
                <ul class="list-ul">
                    <li><a href="index.php" class="<?php echo isActive('index.php'); ?>">Home</a></li>
                    <li><a href="index.php#movie" class="<?php echo isActive('index.php#movie'); ?>">Movies</a></li>
                    <li><a href="admin/form/login.php">Admin</a></li>
                    <?php
                    if (isset($_SESSION['user'])) {
                        echo "<li><a class='noselect' href='user/logout.php'><button class='signout'><i class='fa-solid fa-right-from-bracket' style='color: #B6BBC4;'></i></button></a></li>";
                    } else {
                        echo "<li><a class='noselect' href='user/login.php'><button class='signout' style='background-color:#161A30; color:#B6BBC4; font-size:13px; text-transform:uppercase;'>Login</button></a></li>";
                    }
                    ?>
                </ul>
            </div>
        </div>
    </header>

    <script>
        function toggleButton() {
            var input = document.getElementById('searchInput');
            var button = document.getElementById('searchButton');
            // Disable the button if input field is empty
            if (input.value.trim() === '') {
                button.disabled = true;
            } else {
                button.disabled = false;
            }
        }

        function showSearchResults() {
            var input = document.getElementById('searchInput');
            var button = document.getElementById('searchButton');
            // Disable the button if input field is empty
            var resultsContainer = document.getElementById('searchResults');
            if (input.value.trim() === '') {
                button.disabled = true;
            } else {
                button.disabled = false;
                resultsContainer.style.display = 'flex';
            }

        }

        function closeSearchResults() {
            var resultsContainer = document.getElementById('searchResults');
            resultsContainer.style.display = 'none';
        }
    </script>
</body>

</html>