<?php
// setcookie("usr", "aaroe", time() + 60);
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="POST">
        <label for="username">username:</label>
        <input type="text" name="username" id="username">
        <label for="password">password:</label>
        <input type="text" name="password" id="password">
        <input type="submit" name="login" value="login">
    </form>
</body>

</html>
<?php
if(isset($_POST['login'])){
    if(!empty($_POST['username']) && !empty($_POST['password'])){
        $_SESSION["username"] = $_POST['username'];
        $_SESSION["password"] = $_POST['password'];

        // echo "Username: {$_SESSION["username"]} <br>Password: {$_SESSION["password"]}";
        header("Location: home.php");
    }
}
?>