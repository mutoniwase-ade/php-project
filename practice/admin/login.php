<?php
include "../config.php";
?>
<?php
if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
     $query = mysqli_query($conn,"SELECT * FROM admin WHERE username='$user' AND password='$pass'" );
     if (mysqli_num_rows($query) == 1) {
        $_SESSION['admin'] = $user;
        header("location:dashboard.php");
     }
     else{
        echo"invalid login";
     }
}
?>
<form method="POST">
    <h2>Admin login</h2>
    username:<input type="text"name="username"required><br>
     password:<input type="password"name="password"required><br>
     <button name="login">login</button>
</form>