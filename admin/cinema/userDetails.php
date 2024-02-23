<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MovieMagnet - Users</title>
    <link rel="icon" type="image/x-icon" href="../../Favicon.png">

</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        min-height: 100vh;
        background-color: #B6BBC4;
    }

    .utable {
        display: flex;
        justify-content: space-around;
        padding: 20px;
        /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); */
        border-radius: 8px;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    table th,
    table td {
        border-collapse: collapse;
        padding: 8px;
        padding-left: 10px;
        padding-right: 10px;
        width: max-content;

    }

    table th {
        border-bottom: 1px solid #161A30;
    }

    table td a {
        text-decoration: none;
        color: black;
    }

    button {
        padding: 6px 12px;
        background-color: #e74c3c;
        color: white;
        border: none;
        cursor: pointer;
        border-radius: 4px;
        transition: background-color 0.3s ease;
    }

    button:hover {
        background-color: #c0392b;
    }

    button a:hover {
        color: black;
    }

    .total-container {
        text-align: center;
    }

    .total {
        font-size: 20px;
        font-weight: bold;
        color: #161A30;
        background-color: #B6BBC4;
        padding: 5px 20px;
    }

    .delete {
        padding: 5px 20px;
        border: none;

        border: 1px solid #820300;
        color: #820300;
        background: #FCF5ED;
    }

    .delete:hover {
        color: #F0ECE5;
        background: #820300;
        border: 1px solid #820300;
    }
</style>

<body>
    <?php
    include 'header.php';
    $con = mysqli_connect('localhost', 'root', '', 'moviemagnet');
    $Record = mysqli_query($con, "SELECT * FROM `user`");
    $row_count = mysqli_num_rows($Record);
    ?>
    <div class="utable">

        <div>
            <table>
                <thead>
                    <th>Sl No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Number</th>
                    <th>Delete</th>
                </thead>
                <tbody>
                    <?php
                    $i = 0;
                    while ($row = mysqli_fetch_array($Record)) {
                        echo "
                <tr>
                <td>" ?><?php echo ++$i; ?><?php echo "</td>
                <td>$row[username]</td>
                <td>$row[email]</td>
                <td>$row[number]</td>
                <td><a class='delete' href='deleteuser.php? ID=$row[id]'>Delete</a></td>
                </tr>
                ";
                                        }
                                            ?>
                </tbody>
            </table>
        </div>
        <div class="total-container">
            <h3 class="total">Total Users - <?php echo $row_count; ?></h3>
        </div>
    </div>
</body>

</html>