<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <style>
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

        .user-container {
            border: 2px solid #161A30;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: fit-content;
            padding: 1rem;
            text-align: left;
            margin: auto;
            background-color: #31304D; /* Add background color */
        }

        .user-header {
            text-align: center;
            margin-bottom: 1rem;
            color: #B6BBC4;
        }

        .user-form {
            margin: 1rem;
        }

        .pad {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #B6BBC4;
        }

        .form-control {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border : none;
            border-bottom:  1px solid #B6BBC4; 
        background: transparent;

        }

        .btn {
            text-align: center;
            margin-top: 1rem;
        }

        button {
            padding: 10px;
            background-color: #161A30;
            color: #F0ECE5;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            width: 100%; /* Make the button full-width */
        }

        button:hover {
            opacity: 0.7;
        }

        .register-link {
            text-align: center;
            margin-top: 10px;
            color: #B6BBC4;
            font-size: 14px;
        }

        .register-link a {
            text-decoration: none;
            color: #F0ECE5;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="user-container">
        <div class="user-header">
            <h2>Login</h2>
        </div>
        <form action="login1.php" method="POST" class="user-form">
            <div class="pad">
                <label for="username">Username:</label>
                <input type="text" name="name" id="username" class="form-control" placeholder="Enter Username">
            </div>
            <div class="pad">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password">
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
