<?php
error_reporting(0);

    // session_start(); 
    echo $_SESSION['user'];
    // if (!$_SESSION['user']) {
    //     header("location:user/login.php");
    // }
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            width: 25%;
            transition: 0.3s;
        }

        .nav-logo a {
            display: flex;
            align-items: center;
        }

        .nav-list {
            width: 30%;
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
            color: #2b300d;
            background-color: #e0e3ce;
            padding: 4px 8px 4px 8px;
            border-radius: 4px;

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
            <form action="header.php" method="GET">
                <div class="search">
                    <input type="text" id="searchInput" name="q" placeholder="Search for Movies" oninput="toggleButton()">
                    <button id="searchButton" type="submit" disabled><i class="fas fa-search" style="color: #161A30;"></i></button>
                </div>
            </form>
            
            <div class="nav-list" id="display">
                <ul class="list-ul">
                    <li><a href="#">Home</a></li>
                    <li><a href="#movie">Movies</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#">User</a></li>
                    <?php 
                    
                    if (isset($_SESSION['user'])){
                       echo "<li><a class='noselect' href='user/logout.php'><button class='signout'><i class='fa-solid fa-right-from-bracket' style='color: #B6BBC4;'></i></button></a></li>";
                        
                    }
                    else{
                        echo "<li><a class='noselect' href='user/login.php'><button class='signout'>login <i class='fa-solid fa-right-from-bracket' style='color: #B6BBC4;'></i></button></a></li>";
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
    </script>

</body>

</html>