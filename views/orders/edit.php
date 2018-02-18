<?php 

    require_once 'models/db.php';
    $conn = connectDB();

    $row = [];
    if (isset($_GET['edit'])) {
        $sql = "SELECT * FROM orders WHERE id = ?" . intval($_GET['edit']);
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();   
        }
    }

    if (isset($_POST['save'])) {
        if (intval($_POST['id']) > 0) {
            echo "update";
        } else {
            echo "insert";
        }
    }
     $sql = $conn->prepare("UPDATE orders SET date = ?, name = ?, surname = ?, productId = ? WHERE id = ?");
      $sql->bind_param("ssddi", $_REQUEST['date'], $_REQUEST['name'], $_REQUEST['surname'], $_REQUEST['productId'], $_REQUEST['id']);
      $sql->execute()
?>