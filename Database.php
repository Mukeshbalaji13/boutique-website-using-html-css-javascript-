<?php
// Establish connection to the database (replace placeholders with your actual database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "boutique";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$style_code = $_POST['style_code'];
$message = $_POST['message'];

// SQL to insert data into the database
$sql = "INSERT INTO customerdetails (name, contact, email, style_code, message)
        VALUES ('$name', '$contact', '$email', '$style_code', '$message')";

if ($conn->query($sql) === TRUE) {
    echo '<script language="javascript">';
    echo 'alert("Thanks for Submitting your request. We will reach out you soon!");';
    echo 'window.location.href = "Products.html";'; // Redirect to home.html after clicking OK
    echo '</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>