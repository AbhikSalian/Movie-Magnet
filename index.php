<!-- <?php
        // error_reporting(0);
        // include('config.php');
        // include('login_check.php');

        ?> -->
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/x-icon" href="Images/Favicon.png">

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






        /* Customize your styles here */
        /* body {
            background-color: red;
        } */

        .bannerMain {
            background-color: #31304D;

            padding-top: 20px;
            padding-bottom: 40px;
        }

        #banner {
            position: relative;
            height: 510px;
            /* Adjust as needed */
            overflow: hidden;
            width: 80%;
            margin: auto;
        }

        #banner .slides {
            display: flex;
            transition: transform 0.5s ease;

        }

        .slide1 {
            flex: 0 0 100%;
            /* Flex item width */

        }

        .slide1 img {
            width: 100%;
            height: 100%;
            object-fit: cover;

        }

        /* Slide controls */
        .controls {
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
        }

        .control {
            cursor: pointer;
            padding: 10px;
            background-color: rgba(0, 0, 0, 0.5);
            color: #fff;
            border: none;
            outline: none;
            transition: background-color 0.3s ease;
        }

        .control:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Add more styles as needed */


        @media only screen and (max-width: 850px) {
            .nav-list {
                width: 60%;
            }
        }

        @media only screen and (max-width: 700px) {
            .nav-div {
                width: 100%;
                display: flex;
                justify-content: space-between;
            }

            .nav-logo {
                width: 60%;
                position: absolute;

            }

            .nav-logo a {
                display: flex;
                align-items: center;
            }

            .nav-list {
                display: block;
                z-index: 10;

            }

            .list-ul {
                background-color: #7e876d;
                display: flex;
                flex-direction: column;
                position: absolute;
                top: 60px;
                left: 0;
                height: 40%;
                width: 100%;

            }

            .nav-menuicon {
                display: flex;
                position: absolute;
                right: 30px;
                cursor: pointer;
                padding: 4px;

            }

            .nav-menuicon:hover {
                background-color: #e0e3ce;
                border-radius: 2px;

            }

            .list-ul li a:hover {
                color: #e0e3ce;
            }

            .nav-list {
                display: none;
            }

            .nav-list.displayactive {
                display: block;
            }

        }







        .container {
            width: 100%;
            height: 100%;
            margin: 0 auto;
        }

        /* 
        .center {
            width: 50%;
            height: 50%;
        } */

        .title {
            color: #161A30;
            font-size: 20px
        }

        section.slider {
            padding: 0;
            background: #B6BBC4;
            height: 100%;
            width: 100%;

        }

        section.slider .title {
            font-size: 20px;
            position: relative;
            top: -15px;
            /* left: 20px; */
        }

        .slider-title {
            display: flex;
            justify-content: space-between;
            align-items: end;
            /* margin-bottom: 50px; */
        }


        button.slider__button {
            background: #B6BBC4;
            border: 1px solid #161A30;
            width: 30px;
            height: 30px;
            font-size: 20px;
            cursor: pointer;
            color: #0e0e16;
            opacity: 1 !important;
            position: relative;
            top: -15px;
        }

        button.slider__button:hover {
            border: 1px solid #161A30;
            background: #31304D;
            color: #B6BBC4;
        }


        .slider .btns {
            text-align: center;
            margin-top: 50px;
        }

        .slider .btns button {
            height: 48px;
            width: 150px;
            border-radius: 50px;
            font-size: 18px;
            padding: 0 10px;
            cursor: pointer;
            outline: none;
            transition: all 0.3s ease;
            background: none;
            font-family: charlieUltra;
            border: 3px solid #45f882;
            color: #45f882;
            letter-spacing: 1px;
        }

        .slider .btns button:hover {
            background: #45f882;
            border: 3px solid #45f882;
            color: #0e0e16;
        }

        .slide:hover {
            border: 3px solid #31304D;

        }

        .slider {
            --slider-padding: 1rem;
            --slider-column-gap: .3rem;
            --slide-width: 17%;
            --slide-min-width: 10rem;
            position: relative;
            overflow: hidden;
            background-color: #B6BBC4;
            padding: 15px;
            width: 100%;
            /* box-shadow: 0px 0px 20px 1px #161A30; */

        }

        .slider__track {
            display: flex;
            overflow-x: auto;
            -ms-scroll-snap-type: x mandatory;
            scroll-snap-type: x mandatory;
            padding-inline: var(--slider-padding);
            scroll-behavior: smooth;
            list-style-type: none;
            padding: 0;
            margin-right: calc(--var(slider-column-gap) * -1);
            scrollbar-width: none;
        }

        .slider__track>* {
            flex: 0 0 var(--slide-width);
            min-width: var(--slide-min-width);
            scroll-snap-align: start;
            scroll-snap-stop: always;
            padding-right: var(--slider-column-gap);
        }

        .slider__track::-webkit-scrollbar {
            display: none;
        }

        .slider__buttons {
            margin-top: 1rem;
        }

        .slider__buttons [disabled] {
            opacity: 0.5;
        }

        .slide {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            aspect-ratio: 1/1;
            position: relative;
            border: 1px solid #B6BBC4;
            /* border-radius: 13px; */
            padding: 3px;
            transition: 0.2s;
        }

        .slideimg {
            width: 100%;
            /* border-radius: 10px; */
            transition: transform 0.1s ease-in-out;
        }

        .slideimg:hover {
            transform: scale(1.01);

        }

        /* Responsive Media Query */
        /* @media (max-width: 1400px) {
            .container {
                width: 90%;
            }
        }

        @media (min-width: 1200px) {
            .menu ul {
                display: flex;
                justify-content: center;
            }

            .mob-icons {
                display: none;
            }
        } */

        @media (max-width: 769px) {
            .main_title {
                font-size: 60px;
                line-height: 60px;
            }

            .title {
                font-size: 60px;
            }
        }

        @media (max-width: 600px) {
            .title {
                font-size: 40px;
            }

            .main_title {
                font-size: 40px;
                line-height: 50px;
            }

            section.slider .title {
                font-size: 40px;
            }

            button.slider__button {
                width: 40px;
                height: 40px;
                font-size: 20px;
            }

            .slider .btns button {
                font-size: 16px;
            }
        }

        @media (max-width: 426px) {
            .main_title {
                font-size: 35px;
                line-height: 35px;
            }

            section.slider .title {
                font-size: 30px;
                top: 10px;
            }
        }

        /* Responsive Media Query End */
    </style>
</head>

<body>

    <!-- //header -->
    <?php
    include('header.php')
    ?>
    <!-- Banner with Automatic Slideshow -->
    <div class="bannerMain">

        <div id="banner">
            <div class="slides">

                <div class="slide1">
                    <img src="image.jpg" alt="Slide 1">
                </div>
                <div class="slide1">
                    <img src="image.jpg" alt="Slide 2">
                </div>
                <div class="slide1">
                    <img src="image.jpg" alt="Slide 3">
                </div>
                <div class="slide1">
                    <img src="image.jpg" alt="Slide 4">
                </div>
                <div class="slide1">
                    <img src="image.jpg" alt="Slide 5">
                </div>
                <!-- Add more slides as needed -->
            </div>
            <div class="controls">
                <button class="control prev">&lt;</button>
                <button class="control next">&gt;</button>
            </div>
        </div>
    </div>

    <?php
    $genres = array(
        "action" => "Action",
        "horror" => "Horror",
        "crime" => "Crime",
        "scifi" => "Sci-Fi",
        "comedy" => "Comedy"
    );

    foreach ($genres as $key => $genre) {
        echo "<section id ='movie'  class='slider'>
        <div class='container'>
            <div class='slider' data-slider>
                <div class='slider-title'>
                    <div>
                        <p class='title'>$genre</p>
                    </div>
                    <div class='slider__buttons'>
                        <button class='slider__button' data-slider-prev disabled>
                            <i class='fa fa-angle-left'></i>
                        </button>
                        <button class='slider__button' data-slider-next>
                            <i class='fa fa-angle-right'></i>
                        </button>
                    </div>
                </div>
                <ul class='slider__track' data-slider-track>";

        // Database connection
        $con = mysqli_connect('localhost', 'root', '', 'moviemagnet');
        $record = mysqli_query($con, "SELECT * FROM cinematable WHERE genre='$key'");
        while ($row = mysqli_fetch_array($record)) {
            echo "<li>
            <a href='info_page.php?movie_id={$row['id']}' class='movie-link'>
                <div class='slide'>
                    <img src='admin/cinema/{$row['image']}' class='slideimg'/>
                </div>
            </a>
        </li>";
        }

        echo "</ul>
            </div>
        </div>
    </section>";
    }

    // Close database connection
    // mysqli_close($con);
    ?>


    <script>
        document.querySelectorAll("[data-slider]").forEach(slider => {
            const track = slider.querySelector("[data-slider-track]");
            const prev = slider.querySelector("[data-slider-prev]");
            const next = slider.querySelector("[data-slider-next]");

            if (track) {
                prev.addEventListener("click", () => {
                    next.removeAttribute("disabled");

                    track.scrollTo({
                        left: track.scrollLeft - track.firstElementChild.offsetWidth,
                        behavior: "smooth"
                    });
                });

                next.addEventListener("click", () => {
                    prev.removeAttribute("disabled");

                    track.scrollTo({
                        left: track.scrollLeft + track.firstElementChild.offsetWidth,
                        behavior: "smooth"
                    });
                });

                track.addEventListener("scroll", () => {
                    const trackScrollWidth = track.scrollWidth;
                    const trackOuterWidth = track.clientWidth;

                    prev.removeAttribute("disabled");
                    next.removeAttribute("disabled");

                    if (track.scrollLeft <= 0) {
                        prev.setAttribute("disabled", "");
                    }

                    if (track.scrollLeft === trackScrollWidth - trackOuterWidth) {
                        next.setAttribute("disabled", "");
                    }
                });
            }
        });
    </script>



    <!-- JavaScript for Slideshow -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const banner = document.getElementById('banner');
            const slides = document.querySelector('.slides');
            let slideWidth = slides.offsetWidth; // Update slideWidth dynamically

            let currentIndex = 0;
            let slideInterval;

            // Set initial position
            slides.style.transform = `translateX(${-slideWidth * currentIndex}px)`;

            // Function to move to the next slide
            const nextSlide = () => {
                currentIndex = (currentIndex + 1) % slides.children.length;
                slides.style.transform = `translateX(${-slideWidth * currentIndex}px)`;
            };

            // Function to move to the previous slide
            const prevSlide = () => {
                currentIndex = (currentIndex - 1 + slides.children.length) % slides.children.length;
                slides.style.transform = `translateX(${-slideWidth * currentIndex}px)`;
            };

            // Function to start auto slide
            const startAutoSlide = () => {
                slideInterval = setInterval(nextSlide, 5000); // Adjust slide transition time as needed
            };

            // Function to pause auto slide
            const pauseAutoSlide = () => {
                clearInterval(slideInterval);
            };

            // Event listener for mouse enter (pause auto slide)
            banner.addEventListener('mouseenter', pauseAutoSlide);

            // Event listener for mouse leave (resume auto slide)
            banner.addEventListener('mouseleave', startAutoSlide);

            // Event listener for next slide button
            document.querySelector('.next').addEventListener('click', nextSlide);

            // Event listener for previous slide button
            document.querySelector('.prev').addEventListener('click', prevSlide);

            // Start auto slide
            startAutoSlide();

            // Update slideWidth on window resize
            window.addEventListener('resize', () => {
                slideWidth = slides.offsetWidth;
                slides.style.transform = `translateX(${-slideWidth * currentIndex}px)`; // Re-align slides
            });
        });
    </script>





</body>

</html>