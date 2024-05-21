
<?php
// In a real-world scenario, you should use a database to store user credentials.
$valid_username = "admin";
$valid_password = "password123";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == $valid_username && $password == $valid_password) {
        // Authentication successful; redirect to the dashboard or homepage
        header("Location: dashboard.php");
        exit();
    } else {
        // Authentication failed; display an error message
        echo "Invalid username or password. Please try again.";
    }

}
?>