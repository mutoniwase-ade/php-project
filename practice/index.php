<?php
include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>School News</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>School News: ETP NYARUREMA CMS</h1>

<?php
$result = mysqli_query($conn, "SELECT * FROM posts ORDER BY id DESC");

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<h2>" . $row['title'] . "</h2>";
        echo "<p>" . nl2br($row['content']) . "</p>";
        echo "<hr>";
    }
} else {
    echo "<p>Error loading posts.</p>";
}
?>

<a href="admin/login.php">Admin Login</a>

</body>
</html>
