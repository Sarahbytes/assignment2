<?php
// Database connection
$servername = "localhost";
$username = "hfxadmin";
$password = "hereW3go!";
$dbname = "halifaxcanoe";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert data into the database
$heading = $_POST['heading'];
$tripDate = $_POST['tripDate'];
$duration = $_POST['duration'];
$summary = $_POST['summary'];

$sql = "INSERT INTO adventures (heading, tripDate, duration, summary) VALUES ('$heading', '$tripDate', '$duration', '$summary')";

if ($conn->query($sql) === TRUE) {
    echo "Adventure added successfully. <a href='all-adventures.php'>View All Adventures</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
