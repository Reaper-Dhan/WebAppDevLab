<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banking Sign In</title>
</head>
<body>
    <h1>Banking Sign In</h1>

    <form method="post" action="verify.php">
        <label for="uname">Username:</label>
        <input type="text" id="uname" name="uname" autocomplete="no" required><br><br>
        
        <label for="pass">password:</label>
        <input type="password" id="pass" name="pass" autocomplete="no" required><br><br>
        
        <label for="accountType">Account Type:</label>
        <select id="accountType" name="accountType" required>
            <option value="Savings">Savings</option>
            <option value="Checking">Checking</option>
            <option value="Business">Business</option>
        </select><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
