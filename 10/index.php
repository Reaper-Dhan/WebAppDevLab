<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Management</title>
</head>
<body>

<h1>Cookie Management</h1>
<form action="" method="post">
    <button type="submit" name="action" value="set">Set Cookie</button>
</form><br>
<form action="" method="post">
    <button type="submit" name="action" value="access">Access Cookie</button>
</form><br>
<form action="" method="post">
    <button type="submit" name="action" value="modify">Modify Cookie</button>
</form><br>
<form action="" method="post">
    <button type="submit" name="action" value="delete">Delete Cookie</button>
</form><br><br>

<?php

if(isset($_POST['action'])) {
    $action = $_POST['action'];

    switch($action) {
        case 'set':
            setcookie("user", "John Doe", time() + 3600, "/");
            break;
        case 'access':
            if(isset($_COOKIE['user'])) {
                $user = $_COOKIE['user'];
                echo "Welcome back, $user!";
            } else {
                echo "Welcome, Guest!";
            }
            break;
        case 'modify':
            setcookie("user", "Jane Doe", time() + 3600, "/");
            break;
        case 'delete':
            setcookie("user", "", time() - 3600, "/");
            break;
        default:
            echo "Invalid action!";
    }
} else {
    echo "No action specified!";
}

?>
</body>
</html>
