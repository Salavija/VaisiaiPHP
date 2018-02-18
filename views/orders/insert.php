<?php
require_once $dir . '/models/db.php';
$conn = connectDB();

$sql = $conn->prepare("INSERT INTO orders (date, name, surname, productId) VALUES(?, ?, ?, ?)");

$sql->bind_param("ssdd", $_REQUEST['date'], $_REQUEST['name'], $_REQUEST['surname'], $_REQUEST['productId']);
 $sql->execute();
 echo "<h2>Užsakymas priimtas</h2>" . include 'orders/list.php';

?>