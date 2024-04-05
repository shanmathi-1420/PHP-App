<?php
// Database configuration
$hostname = 'database-2.cvaiukma8r88.ap-south-1.rds.amazonaws.com';
$username = 'admin';
$password = 'admin1234';
$database = 'mydatabase';

// Connect to the database
$mysqli = new mysqli($hostname, $username, $password, $database);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Insert data into the database
    $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    // If form is not submitted via POST method, redirect back to the form page
    header("Location: index.php");
    exit();
}

// Example query
$query = "SELECT * FROM users";
$result = $mysqli->query($query);
if ($result->num_rows > 0) {
    // Output data
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Name: " . $row["name"] . "<br>";
    }
} else {
    echo "0 results";
}

// Close connection
$mysqli->close();
?>
