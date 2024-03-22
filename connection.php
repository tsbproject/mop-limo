<?php
$servername = "localhost";
$username = "dannyzb7_dannyzb7";
$password = "Dnxcto024%$*@";
$database = "dannyzb7_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

// Perform database operations
$sql = "SELECT * FROM contact_form";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
        echo "id: " . $row["id"]. " - Phone: " . $row["phone"]. "<br>";
        echo "id: " . $row["id"]. " - Email: " . $row["email"]. "<br>";
        echo "id: " . $row["id"]. " - Message: " . $row["message"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>