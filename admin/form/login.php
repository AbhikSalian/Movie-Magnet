<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<style>

.admin {
        border: 2px solid black;
        border-radius: 10px; /* Add border-radius for rounded corners */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add shadow effect */
        width: fit-content;
        padding: .4rem;
        text-align: left; /* Center text in the div */
        margin: auto; /* Center the div horizontally */
    }

    .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
    }

    .adm p {
        margin: .4rem;
        font-size: 1.6rem;
        text-align: center;
    }
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }

    .pad {
        margin: .4rem;
        padding: .2rem;
        margin-bottom: 15px;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    .form-control {
        width: 100%;
        padding: 8px;
        box-sizing: border-box;
    }

    .btn {
        text-align: center;
    }

    button {
        padding: 10px;
        background-color: #4caf50;
        color: white;
        border: none;
        cursor: pointer;
        border-radius: 5px;
    }

    button:hover {
        background-color: #45a049;
    }
  
</style>

<body>
    <div class="admin">
        <form action="login1.php" method="POST">
            <div class="adm">
                <p>Admin login</p>
                <img src="admin.jpg" class="center">
            </div>
            <div class="pad">
                <label>Name:</label>
                <input type="text" name="username" class="form-control" placeholder="Enter username">
            </div>
            <div class="pad">
                <label>Password:</label>
                <input type="text" name="userpassword" class="form-control" placeholder="Enter password">
            </div>
            <div class="btn">
                <button name="submit">Login</button>
            </div>
        </form>
    </div>
</body>

</html>