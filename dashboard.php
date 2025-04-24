<?php
session_start();
echo "<p>hi in dashboard</p>";
echo "username is : " . $_SESSION["username"];
echo "<br>";
echo "pass is : " . $_SESSION["password"];
echo "<br>";
echo "remember state is : " . (is_null($_SESSION["remember_me"]) ? "false" : "true");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logout</title>
</head>

<body>
    <form action="logout.php" method="post">
        <button type="submit" name="logoutBtn">logout</button>
    </form>
</body>

</html>