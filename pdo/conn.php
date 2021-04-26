<?php

class Conn
{
    private $username = 'root'; //thuộc tính
    private $password = 'koodinh';
    private $conn = null;
    /**
     * Conn constructor.
     * @param  string  $username
     * @param  string  $password
     */
    //hàm khởi tạo
    public function __construct ()
    {
    }

    //mở kết nối đến csdl
    public function getConnect ()
    {
        try {
            $this->conn = new PDO('mysql:host=localhost;dbname=cp17',
                $this->username,
                $this->password);
            $this->conn->exec('SET NAMES utf8');
            return $this->conn;
        } catch (PDOException $e) {

        }
    }

    public function closeConnection ()
    {
        $this->conn = null;
    }
}

?>