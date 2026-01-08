<?php
include "../config.php";
$id=$_GET['id'];
$post =mysqli_fetch_assoc(
    mysqli_query($conn, "SELECT * FROM costs WHERE id=$id ")
);
if(isset($_POST['update'])){
    $title = $_POST['title'];
    $content = $_POST['content'];
    mysqli_query($conn, "UPDATE costs SET title ='$title',content='$content' WHERE id=$id");
    header("location:dashboard.php");
}
?>
<form method="post">
    <input type="text"name="title"value=""><br><br>
    <textarea name="content"></textarea><br>
    <button name="update">update</button>
</form>

