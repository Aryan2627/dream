<?php
// Establish a connection to the database
$servername = "localhost"
$username = "root";
$password = "";
$dbname = "come";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $accountType = $_POST["account"];
    $email = $_POST["email"];
    $name = $_POST["name"];
    $password = $_POST["password"];
    $gender = $_POST["gender"];

    // Insert data into the database
    $sql = "INSERT INTO enjoy (account_type, email, name, password, gender) VALUES ('$accountType', '$email', '$name', '$password', '$gender')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>


