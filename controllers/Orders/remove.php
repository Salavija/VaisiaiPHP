<?php

require_once $dir . '/models/orders.php';

$id = $_REQUEST['id'];

Orders::remove($id);

include $dir . '/views/orders/list.php';
