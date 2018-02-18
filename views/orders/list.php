<table>
    <tr>
        <th>Nr</th>
        <th>Data</th>
        <th>Vardas</th>
        <th>Pavardė</th>
        <th>Kaina</th>
    </tr>

<?php
 $nr = 1 + $offset; ?>
    <?php  while($stmt->fetch()): ?> 
        <tr>
            <td><?= $nr++ ?></td>
            <td><?= $id ?></td>
            <td><?= $date ?></td>
            <td><?= $name ?></td>
            <td><?= $surname ?></td>
            <td><?= $price ?></td>
        <a href="<?= $base ?>orders/edit?id=<?= $orders->id ?>">Redaguoti</a> 
        <a href="<?= $base ?>orders/delete?id=<?= $orders->id ?>">Trinti</a> 
        </td>
    </tr>
<?php endforeach; ?>
</table>


