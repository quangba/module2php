<?php
class Producct
{
    public $id;
    public $name;
    public $price;
    public $description;
    public $producer;       //nhà sản xuất
    public function __construct($name, $price, $description, $producer)
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->producer = $producer;
    }
}
class ProductDB
{
    private $hostname = 'localhost';
    private $username = 'root';
    private $pass = '';
    private $dbname = 'qualy_sanpham';

    private $conn = NULL;
    private $result = NULL;
    public function connect()
    {
        $this->conn = new PDO("mysql:host=$this->hostname;dbname=$this->dbname", $this->username, $this->pass);
        if ($this->conn) {
            echo 'ok';
        } else {
            echo 'no ok';
        }
        return $this->conn;
    }
    public function insertData($name, $price, $description, $producer)
    {
        $sql = "INSERT INTO products(id, name_sp, price_sp, decription, producer) 
        VALUES (null,'$name','$price','$description','$producer')";
        $this->result = $this->conn->prepare($sql);
        return $this->result->execute();
    }
    public function getData($id)
    {
        $sql = "SELECT * FROM products WHERE id='$id'";
        $statement = $this->conn->prepare($sql);
        $statement->execute();

        $row = $statement->fetch();
        $product = new Producct($row['name_sp'], $row['price_sp'], $row['decription'], $row['producer']);
        $product->id = $row['id'];
        return $product;
    }

    public function getAllData()
    {
        $sql = "SELECT * FROM `products`";
        $statement = $this->conn->prepare($sql);

        $statement->execute();

        $this->result = $statement->fetchAll();

        $san_pham = [];
        foreach ($this->result as $row) {
            $product = new Producct($row['name_sp'], $row['price_sp'], $row['decription'], $row['producer']);
            $product->id = $row['id'];

            $san_pham[] = $product;
        }
        return $san_pham;
    }
    public function updateData($id, $name, $price, $description, $producer)
    {
        $sql = "UPDATE products SET name_sp='$name',price_sp='$price',decription='$description',producer='$producer'
         WHERE id = '$id";
        $this->result = $this->conn->prepare($sql);
        $this->result->execute();
        return $this->result;
    }
    public function deleteData($id)
    {
        $sql = "DELETE FROM `products` WHERE id = '$id'";
        $this->result = $this->conn->prepare($sql);
        $this->result->execute();
        return $this->result;
    }
}
