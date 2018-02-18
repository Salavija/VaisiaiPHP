<?php $servername = "localhost";
$username = "admin";
$password = "labaislaptas123";
$dbname = "vaisiainaujas";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

    $sql = 'SELECT id, date, name, surname, productId FROM orders ORDER BY id DESC LIMIT ? OFFSET ?';
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ii', $num_items, $offset);
    $stmt->execute();

    $stmt->bind_result($id, $date, $name, $surname, $productId);
?>

<table>
    <tr>
        <th>Nr</th>
        <th>Data</th>
        <th>Vardas</th>
        <th>Pavardė</th>
        <th>Prekė</th>
    </tr>

 <?php $nr = 1 + $offset; ?>
    <?php  while($stmt->fetch()): ?> 
        <tr>
            <td><?= $nr++ ?></td>
            <td><?= $id ?></td>
            <td><?= $date ?></td>
            <td><?= $name ?></td>
            <td><?= $surname ?></td>
            <td><?= $productId ?></td>
            <td><a href="delete.php?id=<?php echo $id;  ?>">trinti</a></td>
            <td><a href="edit.php?id=<?php echo $id;  ?>">taisyti</a></td>
    </tr>
<?php endwhile; ?>
</table>


