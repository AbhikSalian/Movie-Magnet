<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
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

        .register-container {
            border: 2px solid black;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: fit-content;
            padding: 1rem;
            text-align: left;
            margin: auto;
            background-color: #fff; /* Add background color */
        }

        .register-header {
            text-align: center;
            margin-bottom: 1rem;
        }

        .register-form {
            margin: 1rem;
        }

        .pad {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold; /* Bold labels */
        }

        .form-control {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc; /* Add border to input fields */
            border-radius: 5px; /* Add border-radius to input fields */
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
            width: 100%; /* Make the button full-width */
        }

        button:hover {
            background-color: #2980b9;
        }

        .login-link {
            text-align: center;
            margin-top: 10px;
        }

        .login-link a {
            text-decoration: none;
            color: #3498db;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="register-container">
        <div class="register-header">
            <h2>User Registration</h2>
        </div>
        <form action="insert.php" method="POST" class="register-form">
            <div class="pad">
                <label for="name">Username:</label>
                <input type="text" name="name" id="name" placeholder="Enter username" class="form-control">
            </div>
            <div class="pad">
                <label for="email">User Email:</label>
                <input type="email" name="email" id="email" placeholder="Enter user email" class="form-control">
            </div>
            <div class="pad">
                <label for="number">User Number:</label>
                <input type="number" name="number" id="number" placeholder="Enter user number" class="form-control">
            </div>
            <div class="pad">
                <label for="password">User Password:</label>
                <input type="password" name="password" id="password" placeholder="Enter password" class="form-control">
            </div>
            <div class="btn">
                <button name="submit">Register</button>
            </div>
            <div class="login-link">
                <span>Already have an account? </span><a href="login.php">Login</a>
            </div>
        </form>
    </div>
</body>

</html>
