<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MovieMagnet - Admin Login</title>
    <link rel="icon" type="image/x-icon" href="../../Favicon.png">

</head>
<style>
    .admin {
        border: 2px solid black;
        border-radius: 10px;
        /* Add border-radius for rounded corners */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        /* Add shadow effect */
        width: fit-content;
        padding: .4rem;
        text-align: left;
        /* Center text in the div */
        margin: auto;
        /* Center the div horizontally */
        background-color: #31304D;
        color: #B6BBC4 ;
    }

    .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 40%;
    }

    .adm p {
        margin: .4rem;
        font-size: 1.6rem;
        text-align: center;
    }

    body {
        font-family: Arial, sans-serif;
        background-color: #B6BBC4;
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
            border : none;
            border-bottom:  1px solid #B6BBC4; 
        background: transparent;

        }
        ::placeholder {
  color: #161A30;
}

    .btn {
        text-align: center;
    }

    button {
        padding: 5px 15px;
        background-color: #161A30;
        color: white;
        border: none;
        cursor: pointer;
        margin-bottom: 10px;
        border: 1px solid #161A30;
    }

    button:hover {
        background-color: #B6BBC4;
        color:#161A30
    }
</style>

<body>
    <div class="admin">
        <form action="login1.php" method="POST">
            <div class="adm">
                <p>Admin</p>
                <img src="admin.jpg" class="center">
            </div>
            <div class="pad">
                <label>Name:</label>
                <input type="text" name="username" class="form-control" placeholder="Enter username" required>
            </div>
            <div class="pad">
                <label>Password:</label>
                <input type="text" name="userpassword" class="form-control" placeholder="Enter password" required>
            </div>
            <div class="btn">
                <button name="submit">Login</button>
            </div>
        </form>
    </div>
</body>

</html>