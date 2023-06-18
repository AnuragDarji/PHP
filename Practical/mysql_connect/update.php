<?php
$servername = "localhost"; // Replace with your MySQL server name
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$database = "city_master"; // Replace with your MySQL database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to update data in the table
$sql = "UPDATE engineers SET name = 'Anurag' WHERE enrolment_no = 123456";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "Data updated successfully.";
} else {
    echo "Error updating data: " . $conn->error;
}

// Close the connection
$conn->close();
?>
