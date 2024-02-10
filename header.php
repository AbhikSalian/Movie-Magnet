<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        html {
            font-size: 62.5%;
        }

        nav {
            display: flex;
            font-size: 1.6rem;
            align-items: center;
            justify-content: space-between;
            background-color: #474F7A ;
            height: 6rem;
            padding: 0 2rem; /* Added padding for better spacing */
        }

        nav a {
            text-decoration: none;
            color: white; /* Changed link color to white */
        }

        .span {
            width:fit-content;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .home,
        .cart,
        .hello,
        .login,
        .admin {
            margin-left: 3rem; /* Add margin between items */
        }

     
    </style>
</head>

<body>
    <?php 
    session_start();
    $count=0;
    if(isset($_SESSION['cart'])){
        $count=count($_SESSION['cart']);
    }
    ?>
    <nav>
        <div>
            <a href="" style="color: white; font-weight: bold ; font-size:larger;">MovieMagnet</a>
        </div>
        <div class="span">
            <div class="home">
                <a href="hindex.php" style="font-weight: bold;">Home</a>
            </div>
            <div class="cart">
                <a href="about.php" style="font-weight: bold;">About</a>
            </div>
            <div class="hello">
                <p style="color: white; font-weight: bold; margin-right: 1rem;">Hello,</p>
            </div>
            <div class="login">
                <a href='user_login.php' style='color: white; font-weight: bold;'>Login</a>
            </div>
            <div class="admin">
                <a href="movie.php" style="color: white; font-weight: bold;">Admin</a>
            </div>
        </div>
    </nav>
    
</body>
</html>