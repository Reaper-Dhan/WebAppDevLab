<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Address Lookup</title>
</head>
<body>
    <h1>Bank Address Lookup</h1>

    <form method="post">
        <label for="ifsc_code">Enter IFSC Code:</label>
        <input type="text" id="ifsc_code" name="ifsc_code" required><br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ifsc_code = $_POST["ifsc_code"];
        $conn = new mysqli("localhost", "root", "", "webapplab");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT address FROM bank_details WHERE ifsc_code = '$ifsc_code'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $address = $result->fetch_assoc()["address"];
            echo "<h2>Bank Address</h2><p>$address</p>";
        } else {
            echo "<h2>Bank not found</h2>";
        }

        $conn->close();
    }
    ?>
</body>
</html>
