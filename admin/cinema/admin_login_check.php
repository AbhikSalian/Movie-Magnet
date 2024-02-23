<?php
// session_start();
include('../../config.php');

if (!isset($_SESSION['admin'])) {
?>
    <html>
    <script type='text/javascript'>
        alert('Are you admin? If no, then you are in the wrong place');
        window.location.href = '../../index.php';
    </script>

    </html>
<?php
    exit();
}
?>