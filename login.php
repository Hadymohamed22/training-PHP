<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["remember_me"])) {
        setcookie("username", $_POST['username'], time() + 86400 * 7);
    }
    $_SESSION["username"] = $_POST['username'];
    $_SESSION["password"] = $_POST["password"];
    $_SESSION["remember_me"] = $_POST["remember_me"] ?? null;
    if ($_POST['username'] === "admin" && $_POST["password"] === "1234") {
        header("location: dashboard.php");
        exit;
    } else {
        header("location: index.php");
        exit;
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
    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <label for="username">Username: </label>
        <br />
        <input type="text" name="username" id="username" />
        <br />
        <br />
        <label for="password">Password: </label>
        <br />
        <input type="password" name="password" id="password" />
        <br />
        <br />
        <input type="checkbox" name="remember_me" value="remember_me" /> remember me
        <br />
        <br />
        <button type="submit" name="send">Send</button>
    </form>
</body>

</html>