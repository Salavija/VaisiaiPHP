<h3> Duomenys </h3>
<form action="search.php" method='GET'>
    <input name='filter' type='text' placeholder="Filtruoti">
    <input type='submit' value='Ieškoti'>
</form>
 <br>
<?php 
require_once $dir . '/models/db.php';
$conn = connectDB();

require_once 'views/orders/list.php';

$num_items = 10;

if(isset($_GET['offset'])) {
    $offset = $_GET['offset'];
} else {
    $offset = 0;
}

lentele($conn, $num_items, $offset);

echo '<hr>';

$conn->close();

include 'views/header.php';
include 'views/navbar.php';
include 'views/menu.php';
include 'views/orders/forma.php';
include 'controllers/'.$ctrl.'.php';
include 'views/footer.php';

?>
        <?php if ($offset > 0): ?>
            <a href="band11.php?offset=<?php echo $offset - $num_items; ?>" class="previous">&laquo; Ankstesnis</a>
        <?php endif; ?>
        <?php if ($offset + $num_items < 60): ?>
            <a href="band11.php?offset=<?php echo $offset + $num_items; ?>" class="next">Sekantis &raquo;</a>
        <?php endif; ?>