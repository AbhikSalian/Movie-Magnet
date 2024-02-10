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
        height: 70vh;
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
    <?php include 'movie.php'; ?>
    <div class="prdt">
        <div class="product">
            <form action="insert.php" method="POST" enctype="multipart/form-data">
                <div>
                    <p style="text-align: center;">MOVIE DETAILS</p>
                </div>
                <div>
                    <label>Movie name:</label>
                    <input type="text" name="Pname" class="form-control" placeholder="Enter movie name">
                </div>
                <div>
                    <label>Movie price:</label>
                    <input type="text" name="Pprice" class="form-control" placeholder="Enter movie price">
                </div>
                <div>
                    <label>Movie Image</label>
                    <input type="file" name="Pimage" class="form-control">
                </div>
                <div>
                    <label>Select film genre</label>
                    <select name="Pcategory">
                        <option value="Action">Action</option>
                        <option value="Comedy">Comedy</option>
                        <option value="Horror">Horror</option>
                    </select>
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
                <th>Price</th>
                <th>Image</th><a href=""></a>
                <th>Genre</th>
                <th>Delete</th>
                <th>Update</th>
            </thead>
        </table>
    </div>
</body>

</html>