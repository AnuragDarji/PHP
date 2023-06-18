<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "city_master";

// Create a new connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the form
$enrollment_no = $_POST['enrollment_no'];
$name = $_POST['name'];
$semester = $_POST['semester'];
$gender = $_POST['gender'];
$qualification = $_POST['qualification'];

// Prepare the SQL statement
$sql = "INSERT INTO students (enrollment_no, name, semester, gender, qualification)
        VALUES ('$enrollment_no', '$name', '$semester', '$gender', '$qualification')";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "Student added successfully";
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>
