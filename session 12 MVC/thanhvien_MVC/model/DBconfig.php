<?php
class Database
{
    private $hostname = 'localhost';
    private $username = 'root';
    private $pass = '';
    private $dbname = 'quanlythanhvien_mvc';

    private $conn = null;
    private $result = null;
    public function connect()
    {
        $this->conn = new mysqli($this->hostname, $this->username, $this->pass, $this->dbname);
        if (!$this->conn) {
            echo 'ket noi that bai';
            exit();
        } else {
            mysqli_set_charset($this->conn, 'utf8');
        }
        return $this->conn;
    }
    // thực thi câu truy vấn
    public function execute($sql)
    {
        $this->result = $this->conn->query($sql);               // kết nối đến CSDL chưa
        return $this->result;
    }

    // phương thức lấy dữ liệu:
    public function getData()
    {

        if ($this->result) {                              //kiểm tra đã kết nối chưa
            $data = mysqli_fetch_array($this->result);
        } else {
            $data = 0;
        }
        return $data;
    }
    // phương thức lấy toàn bộ dữ liệu
    public function getAllData($table)
    {                   //kiểm tra đã kết nối chưa
        $sql = "SELECT * FROM $table";
        $this->execute($sql);
        if (!$this->num_rows() === 0) {
            $data = 0;
        } else {
            while ($datas = $this->getData()) {
                $data[] = $datas;
            }
        }
        return $data;
    }

    // phương thức lấy dữ liệu cần sửa
    public function getDataID($table, $id)
    {
        $sql = "SELECT * FROM $table WHERE id = '$id'";
        $this->execute($sql);
        if ($this->num_rows() != 0) {                              //kiểm tra đã kết nối chưa
            $data = mysqli_fetch_array($this->result);
        } else {
            $data = 0;
        }
        return $data;
    }
    // phương thức đếm số bản ghi:
    public function num_rows()
    {
        if ($this->result) {
            $num = mysqli_num_rows($this->result);
        } else {
            $num = 0;
        }
        return $num;
    }
    // phương thức thêm diwx liệu:
    public function insertData($hoten, $namsinh, $quequan)
    {
        $sql = "INSERT INTO thanhvien(`id`, `hoten`, `namsinh`, `quequan`) 
            VALUES (null,'$hoten','$namsinh','$quequan')";
        return $this->execute($sql);
    }
    // phương thức sửa dữ liệu
    public function updateData($id, $hoten, $namsinh, $quequan)
    {
        $sql = "UPDATE thanhvien SET `hoten`= '$hoten',`namsinh`=$namsinh,`quequan`='$quequan' 
            WHERE id = '$id' ";
            var_dump($sql);
        return $this->execute($sql);
    }
    // phương thức xóa
    public function deleteData($id,$table)
    {
        $sql = " DELETE FROM `$table` WHERE id = '$id' ";
        return $this->execute($sql);
    }
}
