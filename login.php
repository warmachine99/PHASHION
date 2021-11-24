<?php
    $conn= mysqli_connect('localhost', 'root', '', 'webtf');

    if (!$conn) {
        echo "<script>alert('Connection failed.');</script>";
    }
?>