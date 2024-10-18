<?php

class Database {
    //Mendefinisikan prtoperti untuk menyimpan detail koneksi database
    private $host = "localhost"; //alamat host untuk koneksi database
    private $db_name = "persuratan_dosen"; //nama database yang digunakan
    private $username = "root";  // username untuk koneksi ke database
    private $password = "";      // tidak ada spasi tambahan
    protected $conn;    // properti untuk menyimpan objek koneksi database yang dapat diakses oleh kelas turunan (karena protected)


    //Constructor untuk menginisialisasi koneksi database saat objek dibuat
    public function __construct() {
        //membuat koneksi ke database menggunakan mysqli
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db_name);
        //memeriksa apakah koneksi berhasil, jika tidak maka sistem akan menampilkan pesan error dan menghentikan eksekusi
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
    //Metode untuk mengembalikan objek koneksi, sehingga bisa digunakan di luar kelas ini
    public function getConnection(){
        return $this->conn;
    }

    //Metode untuk menampilkan data
    public function tampilData(){

    }
}
?>


