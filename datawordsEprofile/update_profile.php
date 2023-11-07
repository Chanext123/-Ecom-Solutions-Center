<?php
// Replace these credentials with your actual database connection information
$servername = "127.0.0.1";
$username = "your_username";
$password = "your_password";
$dbname = "try_db";

// Create a connection to the MySQL database
$conn = new mysqli($servername, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $profileName = $_POST["profile_name"];
    $position = $_POST["position"];
    $address = $_POST["address"];

    // Prepare and execute an SQL statement to update the user's profile
    $sql = "UPDATE your_table_name SET profile_name = ?, position = ?, address = ? WHERE id = 1"; // Change 'your_table_name' and 'id' as needed

    // Use prepared statements to prevent SQL injection
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("sss", $profileName, $position, $address);
        if ($stmt->execute()) {
            echo "Profile updated successfully.";
        } else {
            echo "Error updating profile: " . $stmt->error;
        }
        $stmt->close();
    }
}

// Close the database connection
$conn->close();
?>
