<?php

class Database {
    private $host = "localhost";
    private $db_name = "persuratan_dosen";
    private $username = "root";  // Tidak ada spasi tambahan
    private $password = "";      // Tidak ada spasi tambahan
    protected $conn;

    public function __construct() {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db_name);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
    public function getConnection(){
        return $this->conn;
    }
    public function tampilData(){

    }
}
?>


