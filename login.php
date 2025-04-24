<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["remember_me"])) {
        setcookie("username", $_POST['username'], time() + 86400 * 7);
    }
    if ($_POST['username'] === "admin" && $_POST["password"] === "1234") {
        $_SESSION["username"] = $_POST['username'];
        $_SESSION["password"] = $_POST["password"];
        $_SESSION["remember_me"] = $_POST["remember_me"];
        header("location: dashboard.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
</head>

<body>
    <form method="post">
        <label for="username">Username: </label>
        <br />
        <input type="text" name="username" id="username" />
        <br />
        <br />
        <label for="password">Password: </label>
        <br />
        <input type="text" name="password" id="password" />
        <br />
        <br />
        <input type="checkbox" name="remember_me" value="remember_me" /> remember me
        <br />
        <br />
        <button type="submit" name="send">Send</button>
    </form>
</body>

</html>