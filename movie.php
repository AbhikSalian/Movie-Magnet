<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<style>
    html{
        font-size:62.5% ;
    }
    body {
        font-size: 1.6rem;
        margin: 0;
        padding: 0;
        font-family: 'Arial', sans-serif;
        background-color: #f8f9fa;
        color: #343a40;
    }

    .nav {
        background-color: white;
        color: #343a40;
        padding: 1rem 0;
        margin-bottom: 2rem;
        text-align: center;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        height: 5rem;
    }

    .ndiv {
        width: 90%;
        margin: 0 auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .head h1 {
        margin: 0;
        font-size: 2rem;
        font-weight: bold;
        color: #343a40;
    }

    .bar {
        display: flex;
        align-items: center;
    }

    .bar div,
    .bar a {
        margin: 0 1rem;
        color: #343a40;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .bar a:hover {
        color: #3498db;
    }

    h2 {
        text-align: center;
        margin-bottom: 2rem;
        font-size: 2.5rem;
        color: #343a40;
    }

    .chadmi {
        display: flex;
        justify-content: space-around;
        margin-bottom: 40px;
    }

    .chadmi a {
        text-decoration: none;
        color: white;
        background-color: #3498db;
        padding: 1.5rem 3rem;
        border-radius: 5px;
        transition: background-color 0.3s ease, transform .2s ease;
    }

    .chadmi a:hover {
        background-color: #2980b9;
        transform: scale(1.1);
    }

</style>
<body>
    <nav class="nav">
        <div class="ndiv">
            <div class="head"><a><h1>MovieMagnet</h1></a></div>
            <div class="bar">
                <div>
            <i class="fa fa-solid fa-lock"></i>Hello, Admin</div>
            <a href="">Logout</a>
            <a href="hindex.php">Userpanel</a>
            </div>
        </div>
    </nav>
    <div>
        <h2>Dashboard</h2>
    </div>
    <div class="chadmi">
        <a href="index.php">Add Post</a>
        <a href="user.php">Users</a>
    </div>
</body>
</html>