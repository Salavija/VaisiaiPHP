<?php
$servername = "localhost";
$username = "admin";
$password = "labaislaptas123";
$dbname = "vaisiainaujas";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO orders (date, name, surname, productId)
VALUES ('2018-01-30', 'Meskutis', 'Pupis, 'Vidutinis' );";

if ($conn->multi_query($sql) === TRUE) {
    echo "Va";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO orders (date, name, surname, productId)
VALUES ('2018-01-31', 'Akinijus', 'Raupas', 'Mazas' );";

if ($conn->multi_query($sql) === TRUE) {
    echo "Opa";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO orders (date, name, surname, productId)
VALUES ('2018-02-12', 'Sotas', 'Skutas', 'Didelis' );";

if ($conn->multi_query($sql) === TRUE) {
    echo "Opa";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>