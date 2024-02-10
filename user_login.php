<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <style>
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

        .user-container {
            border: 2px solid black;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: fit-content;
            padding: 1rem;
            text-align: left;
            margin: auto;
            background-color: #fff;
            /* Add background color */
        }

        .user-header {
            text-align: center;
            margin-bottom: 1rem;
        }

        .user-form {
            margin: 1rem;
        }

        .pad {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            /* Bold labels */
        }

        .form-control {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btn {
            text-align: center;
            margin-top: 1rem;
        }

        button {
            padding: 10px;
            background-color: #3498db;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            width: 100%;
            /* Make the button full-width */
        }

        button:hover {
            background-color: #2980b9;
        }

        .register-link {
            text-align: center;
            margin-top: 10px;
        }

        .register-link a {
            text-decoration: none;
            color: #3498db;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="user-container">
        <div class="user-header">
            <h2>User Login</h2>
        </div>
        <form action="login1.php" method="POST" class="user-form">
            <div class="pad">
                <label for="username">Username:</label>
                <input type="text" name="name" id="username" class="form-control" placeholder="Enter username">
            </div>
            <div class="pad">
                <label for="password">User Password:</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Enter password">
            </div>
            <div class="btn">
                <button name="submit">Login</button>
            </div>
            <div class="register-link">
                <span>Don't have an account? </span><a href="register.php">Register</a>
            </div>
        </form>
    </div>
</body>

</html>