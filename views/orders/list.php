<?php require_once $dir . 'http://localhost/VaisiaiPHP/models/db.php'
$conn = connectDB(); ?>

<table>
    <tr>
        <th>Nr</th>
        <th>Data</th>
        <th>Vardas</th>
        <th>Pavardė</th>
        <th>Prekė</th>
    </tr>

 $nr = 1 + $offset; ?>
    <?php  while($stmt->fetch()): ?> 
        <tr>
            <td><?= $nr++ ?></td>
            <td><?= $id ?></td>
            <td><?= $date ?></td>
            <td><?= $name ?></td>
            <td><?= $surname ?></td>
            <td><?= $productId ?></td>
        <td>
        <a href="<?= $base ?>orders/edit?id=<?= $orders->id ?>">Redaguoti</a> 
        <a href="<?= $base ?>orders/delete?id=<?= $orders->id ?>">Trinti</a> 
        </td>
    </tr>
<?php endwhile; ?>
</table>


