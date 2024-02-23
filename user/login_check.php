<?php
session_start();
include('config.php');

if (!isset($_SESSION['user'])) {
?>
    <html>
    <script type='text/javascript'>
        alert('Please sign in to access the page');
        window.location.href = 'index.php';
    </script>

    </html>
<?php
    exit();
}
?>