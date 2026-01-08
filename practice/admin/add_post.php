<?php
include"../config.php";
if (!isset($_SESSION['admin'])){
    header("location:login.php");
    exit();
}
?>
<?php include"../config.php";?>
<?php
if (isset($_POST['save'])) {
    $title = $_POST['title'];
    $content =  $_POST['content'];
     mysqli_query($conn, "INSERT INTO costs(title,content) VALUES('$title','$content')");
     header("location:dashboard.php");
}
?>
<form method="post">
    <input type="text" name="title" placeholder="title" required><br><br/>
     <textarea name="content" placeholder="content"></textarea><br><br/>
     <button name="save">save</button>
</form>






































