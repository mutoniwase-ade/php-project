<?php
include "../config.php";
$id =$_GET['id'];
mysqli_query($conn,"DELETE * FROM costs WHERE id=$id");
header("location:dashboard.php");
exit();
?>