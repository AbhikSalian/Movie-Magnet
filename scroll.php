<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="style.css">
    <?php 
    include 'header.php';
    ?>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    h1 {
        text-align: center;
        margin: 20px 0;
    }

    .cbody {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        align-items: stretch;
        margin: 10px;
        /* border: 2px solid black;
        box-sizing: border-box; */
    }
    form{
        box-sizing: border-box;
        border-radius: 10px;
        box-shadow: 10px 10px 10px lightblue;
        margin: 10px;
    }

    .card {
        width: 200px;
        margin: 10px;
        text-align: center;
    }


    .card-body {
        padding: 10px;
    }

    h5, p {
        font-size: 16px;
        margin: 4px 0;
    }

    input {
        margin: 4px 0;
        padding: 2px;
        width: 100%;
    }

    input[type="submit"] {
        background-color: #3498db;
        color: white;
        border: none;
        padding: 6px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #2980b9;
    }
    .card {
        overflow: hidden;
        position: relative;
        width: 200px; /* Adjust the width as needed */
    }

    .card img {
        width: 100%;
        height: auto;
        transition: transform 0.3s ease-in-out;
    }

    .card:hover img {
        transform: scale(1.1);
    }

    .card-body {
        padding: 8px;
        box-sizing: border-box;
        background: rgba(255, 255, 255, 0.8);
    }
    .card-body h5,
    .card-body p {
        margin: 0;
    }

    .card-body input {
        margin-top: 4px;
    }
</style>
<body>
    <div>
    <h1>Home</h1>
    <div class='cbody'> 
            <?php
            $con = mysqli_connect('localhost', 'root', '', 'moviemagnet');
            $record = mysqli_query($con, "select * from cinematable");
            while ($row = mysqli_fetch_array($record)) {
                if($row['genre']=='action'){
                
                    echo "
                            <div class='card'>admin/cinema/Uploadimage/WhatsApp Image 2024-02-10 at 11.38.35 AM.jpeg
                                <img src='admin/cinema/$row[image]' class='card-img-top' alt='...'> 
                                </div>
                            </div>
                        ";
                }
            }
            ?>
        </div>
    </div>
    <?php 
    include 'footer.php';
    ?>
</body>
</html>