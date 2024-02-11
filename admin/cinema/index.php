<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product page</title>
</head>
<style>
    html {
        font-size: 62.5%;
    }

    body {
        font-size: 1.6rem;
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
    }

    .prdt {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 50vh;
    }

    .product {
        border: 2px solid black;
        padding: 1.6rem;
        width: fit-content;
        background-color: white;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }

    .product label {
        margin-bottom: 0.4rem;
    }

    .product input,
    .product select {
        width: 100%;
        padding: 0.8rem;
        margin-bottom: 1rem;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .product button {
        background: #3498db;
    }

    .table {
        max-width: 75%;
    }

    .table,
    th,
    td {
        border: 2px solid black;
        border-collapse: collapse;
        padding: 2px;
        padding-left: 4px;
        padding-right: 4px;
    }

    table td a {
        text-decoration: none;
        color: #000;

    }

    .pdt {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 2rem;
    }
</style>

<body>
    <?php include '../adminPanel.php'; ?>
    <div class="prdt">
        <div class="product">
            <form action="insert.php" method="POST" enctype="multipart/form-data">
                <div>
                    <p style="text-align: center;">MOVIE DETAILS</p>
                </div>
                <div>
                    <label>Movie name:</label>
                    <input type="text" name="mname" class="form-control" placeholder="Enter movie name">
                </div>
                <div>
                    <label>Movie description:</label>
                    <input type="text" name="desc" class="form-control" placeholder="Enter description">
                </div>
                <div>
                    <label>Director:</label>
                    <input type="text" name="dir" class="form-control" placeholder="Enter Director's name">
                </div>
                <div>
                    <label>Cast:</label>
                    <input type="text" name="cast" class="form-control" placeholder="Enter Cast">
                </div>
                <div>
                    <label>Release date:</label>
                    <input type="date" name="date" class="form-control" placeholder="Enter Release date">
                </div>
                <div>
                    <label>Language:</label>
                    <input type="text" name="lang" class="form-control" placeholder="Enter language">
                </div>
                <div>
                    <label>Duration:</label>
                    <input type="time" name="duration" class="form-control" placeholder="Enter Duration">
                </div>
                <div>
                    <label>Genre</label>
                    <select name="genre">
                        <option value="action">Action</option>
                        <option value="scifi">Sci-fi</option>
                        <option value="horror">Horror</option>
                        <option value="crime">Crime</option>
                        <option value="comedy">Comedy</option>
                    </select>
                </div>
                <div>
                    <label>Movie Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <button name="submit">Upload</button>
            </form>
        </div>
    </div>
    <div class="pdt">
        <table class=table>
            <thead>
                <th>Id</th>
                <th>Name</th>
                <th>Director</th>
                <th>Cast</th>
                <th>Relese date</th>
                <th>language</th>
                <th>Duration</th>
                <th>image</th><a href=""></a>
                <th>genre</th>
                <th>Delete</th>
                <th>Update</th>
            </thead>

            <?php
            include '../../config.php';
            $record = mysqli_query($con, "SELECT * FROM `cinematable`");
            while ($row = mysqli_fetch_array($record))
                echo "
                    <tr>
                        <td>$row[id]</td>
                        <td>$row[mname]</td>
                        <td>$row[dir]</td>
                        <td>$row[cast]</td>
                        <td>$row[date]</td>
                        <td>$row[lang]</td>
                        <td>$row[duration]</td>
                        <td><img src='$row[image]'height=90px></td>
                        <td>$row[genre]</td>
                        <td><button><a href='delete.php? ID=$row[id]'>Delete</a></button></td>
                        <td><button><a href='update.php? ID=$row[id]'>Update</a></button></td> 
                    </tr>
                    <br>";
            ?>
        </table>
    </div>
</body>

</html>
