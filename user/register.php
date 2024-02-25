<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MagnetMagnet - User Register</title>
    <link rel="icon" type="image/x-icon" href="../Favicon.png">

    <style>
        @font-face {
            font-family: 'hii';
            src: url('../fonts/TT-Norms-sv/TT Norms sv/TTNorms-Regular.otf');
        }
        *{
            font-family: 'hii';

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

        .register-container {
            border: 2px solid #161A30;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: fit-content;
            padding: 1rem;
            text-align: left;
            margin: auto;
            background-color: #31304D; /* Add background color */
        }

        .register-header {
            text-align: center;
            margin-bottom: 1rem;
            color: #B6BBC4;
        }

        .register-form {
            margin: 1rem;
        }

        .pad {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            /* font-weight: bold; Bold labels */
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

        .login-link {
            text-align: center;
            margin-top: 12px;
            color: #B6BBC4;
        }

        .login-link a {
            text-decoration: none;
            color: #F0ECE5;
            font-weight: bold;
        }
        ::placeholder {
  color: #161A30;
}
    </style>
</head>

<body>
    <div class="register-container">
        <div class="register-header">
            <h2>Registration</h2>
        </div>
        <form action="insert.php" method="POST" class="register-form">
            <div class="pad">
                <label for="name">Username:</label>
                <input type="text" name="name" id="name" placeholder="Enter Username" class="form-control">
            </div>
            <div class="pad">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" placeholder="Enter Email" class="form-control">
            </div>
            <div class="pad">
                <label for="number">Number:</label>
                <input type="number" name="number" id="number"  placeholder="Enter Phone Number" class="form-control">
            </div>
            <div class="pad">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" placeholder="Enter Password" class="form-control">
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
