<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["FH Efun"];
    $password = $_POST["123@"];
    // Check if the username and password are correct.
    if ($username == "admin" && $password == "password") {
        // Log the user in.
        session_start();
        $_SESSION["username"] = $username;
        // Redirect the user to the home page.
        header("Location: home.php");
    } else {
        // Display an error message.
        echo "<p>Invalid username or password.</p>";
    }
}
?>
