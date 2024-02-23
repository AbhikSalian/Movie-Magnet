<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MovieMagnet - Admin</title>
    <link rel="icon" type="image/x-icon" href="../../Favicon.png">

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
        background-color: #B6BBC4;
    }

    .prdt {
        display: flex;
        justify-content: center;
        align-items: center;
        height: max-content;
        position: relative;
        width: 100%;
        margin-top: 40px;

    }

    .product {
        /* border: 2px solid black; */
        padding: 1.6rem;
        width: 100%;
        background-color: white;
        /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); */
        /* border-radius: 8px; */
        display: flex;
        flex-direction: row;

        background-color: #f2f2f2;

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
        border: none;
        border-bottom: 1px solid #161A30;
        border-radius: 0;
        background: transparent;

    }


    .table {
        max-width: 90%;
    }

    .table,
    th,
    td {
        /* border: 2px solid black; */
        border-collapse: collapse;
        padding: 2px;
        padding-left: 4px;
        padding-right: 4px;
        width: max-content;
    }

    .table thead th:nth-child(5){
        width: 100px;
        /* text-align: center; */
        /* background-color: red; */
    }

    table td a {
        text-decoration: none;

    }

    .pdt {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 2rem;
        font-size: 14px;
    }

    .div1,
    .div2 {
        width: 50%;
        padding: 20px;
        font-size: 16px;
    }

    .form-control::placeholder {
        font-size: 14px;
    }

    .form-control {
        background: transparent;

    }

    form {
        width: 90%;
        
    }

    .upload {
        position: absolute;
        bottom: 40px;
        right: 120px;
        padding: 5px 20px;
        border: none;
        background-color: #B6BBC4;
        color: #161A30;

        border: 1px solid #161A30;
    }

    .upload:hover {
        background-color: #161A30;
        color: #B6BBC4;

        border: 1px solid #161A30;
    }

    .delete {
        padding: 5px 20px;
        border: none;
        color: #820300;
        background-color: #FCF5ED;
        
        border: 1px solid #820300;
    }
    .delete:hover {
        color: #F0ECE5;
        background-color: #820300;
        border: 1px solid #820300;
    }
    .update {
        padding: 5px 20px;
        border: none;
        color: #161A30;
        background-color: #B6BBC4;
        border: 1px solid #161A30;
    }
    .update:hover {
        color: #B6BBC4;
        background-color: #161A30;
       
        border: 1px solid #161A30;
    }
</style>

<body>
    <?php include 'header.php'; ?>
    <div class="prdt">
        <form action="insert.php" method="POST" enctype="multipart/form-data">
            <div class="product">
                <div class="div1">

                    <div>
                        <label>Movie Name:</label>
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
                </div>
                <div class="div2">

                    <div>
                        <label>Duration:</label>
                        <input type="time" name="duration" class="form-control" placeholder="Enter Duration">
                    </div>
                    <div>
                        <label>Trailer Link:</label>
                        <input type="text" name="trailer_link" class="form-control" placeholder="Enter Trailer Link">
                    </div>
                    <div>
                        <label>Movie Link:</label>
                        <input type="text" name="movie_link" class="form-control" placeholder="Enter Movie Link">
                    </div>
                    <div>
                        <label>Genre</label>
                        <select name="genre">
                            <option value="Action">Action</option>
                            <option value="Sci-fi">Sci-fi</option>
                            <option value="Horror">Horror</option>
                            <option value="Crime">Crime</option>
                            <option value="Comedy">Comedy</option>
                        </select>
                    </div>
                    <div>
                        <label>Movie Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <button class="upload" name="submit">Upload</button>
                </div>
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
                <th>Release Date</th>
                <th>Language</th>
                <th>Duration</th>
                <th>Image</th><a href=""></a>
                <th>Genre</th>
                <th>Delete</th>
                <th>Update</th>
            </thead>

            <?php
            include '../../config.php';
            $record = mysqli_query($con, "SELECT * FROM `cinematable` ORDER BY `id` DESC");
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
                        <td><img src='$row[image]'width=40px></td>
                        <td>$row[genre]</td>
                        <td><a class='delete' href='delete.php? ID=$row[id]'>Delete</a></td>
                        <td><a class='update' href='update.php? ID=$row[id]'>Update</a></td> 
                    </tr>
                    <br>";
            ?>
        </table>
    </div>
</body>

</html>