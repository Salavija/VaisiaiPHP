<!DOCTYPE HTML>
<html>
	<head>
		<title>Vaisiai</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body class="landing">
			<div id="page-wrapper">

<?php

$backgroundImg = 'Http:localhost/vaisiai/views/image/vaisiai.jpg';
$template = 'home.php';
$dir = __DIR__;
$base = $_SERVER['SCRIPT_NAME'];
$index = strpos($_SERVER['SCRIPT_NAME'], 'index.php');
if ($index !== false) {
    $base = substr($_SERVER['SCRIPT_NAME'], 0, $index);
}
// var_dump($base);

if ($_SERVER['REQUEST_URI'] == $base) {
    $ctrl = 'orders/list';
} else {
    $ctrl = substr($_SERVER['REQUEST_URI'], strlen($base));
    $index = strpos($ctrl, '?');
    if ($index !== false) {
        $ctrl = substr($ctrl, 0, $index);
    }
}

if (!file_exists('controllers/'.$ctrl.'.php')) {
    $ctrl = 'orders/list';
}

// // var_dump("base = $base");
// // var_dump("ctrl = $ctrl");
// // var_dump("dir = $dir");

include 'views/header.php';
include 'views/navbar.php';
include 'views/menu.php';
include 'views/pasirinkimai.php';
include 'controllers/'.$ctrl.'.php';
include 'views/footer.php';

?>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>