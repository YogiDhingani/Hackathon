<?php
$conn = new mysqli('127.0.0.1', 'root', '', 'cms');

if ($conn->connect_error) {
    die('Connect Error (' . $conn->connect_errno . ') '
            . $conn->connect_error);
}
?>
