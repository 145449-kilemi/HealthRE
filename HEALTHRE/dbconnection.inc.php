<?php
$host = "127.0.0.1";
$port = 3306; // Change port to 3306
$user = "root"; // edit if you have set a username for MySQL
$pass = ""; // edit if you have set a password
$name = "ems_database";

// Create connection syntax
$conn = new mysqli($host, $user, $pass, $name, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connection successful";
}
?>
<?php
$host = "127.0.0.1";
$port = 3306; // Change port to 3306
$user = "root"; // edit if you have set a username for MySQL
$pass = ""; // edit if you have set a password
$name = "ems_database";

// Create connection syntax
$conn = new mysqli($host, $user, $pass, $name, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connection successful";
}
?>
