<?php

require_once $dir . '/models/orders.php';

$id = $_REQUEST['id'];
$a = Orders::get($id);

echo 'Cia reikia prideti htnl formos rodyma, kad koreguoti '.$id.' irasa';
var_dump($a);
