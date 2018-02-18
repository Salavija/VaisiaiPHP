<?php

require_once $dir . '/models/orders.php';

$id = $_REQUEST['id'];
echo "AHA - nori kazkas istrinti  irasa: $id";

$a = Orders::get($id);

include $dir . '/views/orders/ask_delete.php';
