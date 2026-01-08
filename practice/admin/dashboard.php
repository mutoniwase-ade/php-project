<?php
session_start();
include "../config.php";
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}
?>
<h1>Admin Dashboard</h1>
<a href="add_post.php">Add Post</a> |
<a href="logout.php">Logout</a>
<hr>
<?php
$result = mysqli_query($conn, "SELECT * FROM costs");
while ($row = mysqli_fetch_assoc($result)) {
    echo "<h3>" . $row['title'] . "</h3>";
    echo "<a href='edit.php?id=". $row['id'] . "'>Edit</a> | ";
    echo "<a href='delete.php?id=". $row['id'] . "'>delete</a><hr>";
}
?>