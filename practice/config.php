<?php
$conn = mysqli_connect("localhost", "root", "", "company");
if(!$conn) {
    die("connection failled");
}
session_start();
?>