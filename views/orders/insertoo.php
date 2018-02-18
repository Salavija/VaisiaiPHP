<?php
$servername = "localhost";
$username = "admin";
$password = "labaislaptas123";
$dbname = "vaisiainaujas";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO orders (date, name, surname, productId)
VALUES ('2018-01-11', 'Kakinijus', 'Toaupas', 'Mazas' );";

if ($conn->multi_query($sql) === TRUE) {
    echo "Opa";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO orders (date, name, surname, productId)
VALUES ('2018-02-07', 'Vitas', 'Murkutas', 'Didelis' );";

if ($conn->multi_query($sql) === TRUE) {
    echo "Opa";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO orders (date, name, surname, productId)
VALUES ('2018-01-17', 'Sukinijus', 'Saupas', 'Mazas' );";

if ($conn->multi_query($sql) === TRUE) {
    echo "Opa";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO orders (date, name, surname, productId)
VALUES ('2018-02-19', 'Citas', 'Lkutas', 'Didelis' );";

if ($conn->multi_query($sql) === TRUE) {
    echo "Opa";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO orders (date, name, surname, productId)
VALUES ('2018-01-15', 'Nekinijus', 'Muaupas', 'Mazas' );";

if ($conn->multi_query($sql) === TRUE) {
    echo "Opa";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO orders (date, name, surname, productId)
VALUES ('2018-02-15', 'Aittas', 'Vurkutas', 'Vidutinis' );";

if ($conn->multi_query($sql) === TRUE) {
    echo "Opa";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO orders (date, name, surname, productId)
VALUES ('2018-01-01', 'Neukinijus', 'Lopaupas', 'Mazas' );";

if ($conn->multi_query($sql) === TRUE) {
    echo "Opa";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO orders (date, name, surname, productId)
VALUES ('2018-02-12', 'Cutas', 'Sikutas', 'Didelis' );";

if ($conn->multi_query($sql) === TRUE) {
    echo "Opa";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO orders (date, name, surname, productId)
VALUES ('2018-01-11', 'Zakinijus', 'Titoaupas', 'Mazas' );";

if ($conn->multi_query($sql) === TRUE) {
    echo "Opa";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO orders (date, name, surname, productId)
VALUES ('2018-02-07', 'Mitas', 'Barurkutas', 'Didelis' );";

if ($conn->multi_query($sql) === TRUE) {
    echo "Opa";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO orders (date, name, surname, productId)
VALUES ('2018-01-17', 'Kirukinijus', 'Baupas', 'Mazas' );";

if ($conn->multi_query($sql) === TRUE) {
    echo "Opa";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO orders (date, name, surname, productId)
VALUES ('2018-02-19', 'Patitas', 'Daskutas', 'Didelis' );";

if ($conn->multi_query($sql) === TRUE) {
    echo "Opa";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO orders (date, name, surname, productId)
VALUES ('2018-01-15', 'Murekinijus', 'Araupas', 'Mazas' );";

if ($conn->multi_query($sql) === TRUE) {
    echo "Opa";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO orders (date, name, surname, productId)
VALUES ('2018-02-15', 'Bulvatas', 'Murkutas', 'Vidutinis' );";

if ($conn->multi_query($sql) === TRUE) {
    echo "Opa";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO orders (date, name, surname, productId)
VALUES ('2018-01-01', 'Eniukinijus', 'Puepaupas', 'Mazas' );";

if ($conn->multi_query($sql) === TRUE) {
    echo "Opa";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO orders (date, name, surname, productId)
VALUES ('2018-02-12', 'Vurutas', 'Mikutas', 'Didelis' );";

if ($conn->multi_query($sql) === TRUE) {
    echo "Opa";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();

?>