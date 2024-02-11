<?php
$con = mysqli_connect('localhost', 'root', '', 'moviemagnet');
$record = mysqli_query($con, "select * from cinematable");
while ($row = mysqli_fetch_array($record)) {
    if ($row['genre'] == 'action')
        echo "
                    <li>
                    <div class='slide'>
                        <img src='admin/cinema/$row[image]' class='slideimg' />                       
                    </div>
                </li>         
                           ";
}
