<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>
<style>
    body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            min-height: 100vh;
        }
        .utable {
            display: flex;
            justify-content: space-around;
            background-color: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }

        table th,
        table td {
            border: 2px solid black;
            padding: 8px;
            text-align: left;
        }

        table th {
            background-color: #f2f2f2;
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
        button a:hover{
            color: black;
        }

        .total-container {
            text-align: center;
        }

        .total {
            font-size: 2rem;
            font-weight: bold;
        }

</style>

<body>
    <?php
    include 'mystore.php';
    $con = mysqli_connect('localhost', 'root', '', 'ecommerce');
    $Record = mysqli_query($con, "SELECT * FROM `tbluser`");
    $row_count = mysqli_num_rows($Record);
    ?>
    <div class="utable">

        <div>
            <table>
                <thead>
                    <th>SN</th>
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
                <td><button><a href='delete.php? ID=$row[Id]'>Delete</a></button></td>
                </tr>
                ";
                                        }
                                            ?>
                </tbody>
            </table>
        </div>
        <div class="total-container">
            <h3>Total</h3>
            <h1 class="total"><?php echo $row_count; ?></h1>
        </div>
    </div>
</body>

</html>