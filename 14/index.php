<body>

    <form action="index.php" method="POST">
        <label for="address">Enter Address:</label>
        <input type="text" id="address" name="address" required>
        <input type="submit" value="Ping">
    </form>
    <div id="result"></div>
</body>

<?php
  if(isset($_POST["address"])) {
    $address = $_POST["address"];
    $output = shell_exec("ping -n 3 $address");
    echo "<pre>$output</pre>";
  } else {
    echo "Please enter an address.";
  }
?>
