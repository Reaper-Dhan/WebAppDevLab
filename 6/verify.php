<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Sign In</title>
</head>
<body>
    <h1>Verify Sign In</h1>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST["uname"];
            $password = $_POST["pass"];
            $accountType = $_POST["accountType"];

            echo "<h2>Verify Your Information</h2>";
            echo "<p>Username: $username</p>";
            echo "<p>Password: $password</p>";
            echo "<p>Account Type: $accountType</p>";
        }
    ?>
</body>
</html>
