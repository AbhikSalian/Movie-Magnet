<?php
session_start();
include 'admin_login_check.php';
if (!$_SESSION['admin']) {
    header("location:../form/login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MovieMagnet - Admin Header</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/x-icon" href="../../Favicon.png">


</head>
<style>
      @font-face {
            font-family: 'hii';
            src: url('../../fonts/TT-Norms-sv/TT Norms sv/TTNorms-Regular.otf');
        }

    * {
        margin: 0;
        padding: 0;
        text-decoration: none;
        box-sizing: border-box;
        list-style: none;
        font-family: 'hii';
    }

    .nav-div {
        width: 100%;
        height: 70px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #31304D;
        /* border-bottom: 8px solid #2b300d; */
    }

    .nav-logo {
        display: flex;
        justify-content: center;
        width: 26%;
        transition: 0.3s;
    }

    .nav-logo a {
        display: flex;
        align-items: center;
    }

    .nav-list {
        width: 30%;
    }

    .list-ul {
        display: flex;
        justify-content: space-evenly;
        align-items: center;
        margin-bottom: 0px;
    }

    .list-ul li a:not(.noselect) {
        /* transition: 0.2s; */
        font-size: 14px;
        font-weight: bolder;
        text-transform: uppercase;
        color: #B6BBC4;
        padding: 4px 0px 4px 0px;
        text-decoration: none;
    }

    .signout {
        padding: 2px 8px;
        /* border-radius: 10px; */
        border: none;
        background-color: #161A30;
        color: #e0e3ce;
        font-size: 15px;
        cursor: pointer;
        border: 1px solid #161A30;
    }

    .signout:hover {
        background-color: #161A30;
        color: #161A30;
        border: 1px solid #B6BBC4;

    }

    .list-ul li a:hover:not(.noselect) {
        /* color: #2b300d; */
        /* background-color: #e0e3ce; */
        /* border-radius: 4px; */
        /* opacity: 0.5; */
        border-bottom: 1.5px solid #B6BBC4;

    }

    .nav-logo a:hover {
        opacity: 0.5;
    }

    .nav-menuicon {
        display: none;
    }

    a.active {
        border-bottom: 1.5px solid #B6BBC4;

    }

    .search {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;

    }

    .search input {
        height: 30px;
        width: 200px;
        border: none;
        border: 1.5px solid #B6BBC4;

    }


    .search input[type=text] {
        padding: 5px 10px;
    }

    .search button {
        border: 1.5px solid #B6BBC4;
        cursor: pointer;
        background-color: #B6BBC4;
        color: #161A30;
    }

    .fas {
        transition: transform 0.2s ease-in-out;
        padding: 7px;

    }

    .fas:hover {
        transform: scale(1.3);
        font-weight: bold;
    }

    #searchResults {
        display: none;
        position: absolute;
        background-color: #B6BBC4;
        width: 400px;
        height: min-content;
        display: flex;
        z-index: 1;
        top: 55px;
        left: 400px;
        /* justify-content: center; */
        align-items: center;
        margin-left: auto;
        margin-right: auto;
        padding: 8px;
    }

    #searchResults .img {
        width: 50px;
        height: 100%;
        /* margin: 10px; */
        display: flex;
        justify-content: center;
        align-items: center;

    }

    #searchResults .res {
        margin: 0px 10px;
    }

    .secondline {
        display: flex;
        justify-content: space-evenly;
    }

    .res {
        background-color: #161A30;
        color: #B6BBC4;
        font-size: 14px;
        padding: 2px 10px;
    }

    .head {

        color: #161A30;
        margin: 5px;
        font-weight: bold;
        font-size: 18px;

    }

    .det {
        display: flex;
        flex-direction: column;
        margin: 10px 10px;
        height: 60px;
    }

    .head:hover {
        text-decoration: underline;
    }

    #closeButton {
        position: absolute;
        top: 10px;
        right: 10px;
        border: none;
        background: transparent;
        cursor: pointer;
        padding: 1px 4px;
        border-radius: 100%;
        text-decoration: none;

    }

    #closeButton:hover {
        background-color: #161A30;
        color: #e0e3ce;

    }

    #linke {
        color: #161A30;
    }

    #linke:hover {
        color: #e0e3ce;
    }
</style>

<body>
    <header>
        <div class="nav-div">
            <div class="nav-logo">
                <a href="index.php">
                    <img src="../../MovieMagnet Logo.png" alt="SmartStitch" width="140px ">
                </a>
            </div>


            <div class="nav-list" id="display">

                <ul class="list-ul">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="userDetails.php">Users</a></li>
                    <li><a href="../../index.php">Userpanel</a></li>
                    <li><a class='noselect' href='../form/logout.php'><button class='signout'><i class='fa-solid fa-right-from-bracket' style='color: #B6BBC4;'></i></button></a></li>

                </ul>
            </div>
        </div>
    </header>

    <!-- <div>
        <h2>Dashboard</h2>
    </div>
    <div class="chadmi">
        <a href="cinema/index.php">Add Post</a>
        <a href="../../movieMagnet/admin/userDetails.php">Users</a>
    </div> -->



</body>

</html>