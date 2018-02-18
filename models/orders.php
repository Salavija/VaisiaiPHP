<?php

require_once $dir . '/models/db.php';

class Radar 
{
    public $id;
    public $date;
    public $name;
    public $surname;
    public $price;
    public $productId;

    function assignFromDB($row) 
    {
        $this->id = $row['id'];
        $this->date = $row['date'];
        $this->name = $row['name'];
        $this->surname = $row['surname'];
        $this->price = $row['price'];
        $this->productId = $row['productId'];
    }

    static function all($limit, $offset) 
    {
        $conn = connectDB();
        $sql = 'SELECT * FROM orders ORDER BY `id`, `date` DESC';

        $result = $conn->query($sql);

        $orders = [];
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $a = new Order();
                $a->assignFromDB($row);
                $orders[] = $a;
            }
        }
        return $orders;
    }


    static function get($id) 
    {
        if (!is_numeric($id)) return null;
        
        $conn = connectDB();
        $sql = 'SELECT * FROM orders WHERE id = '.$id;
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            $a = new Order();
            $a->assignFromDB($row);
            return $a;
        }
        return null;
    }
}