<?php
require_once 'Database.php';    // menautkan class Database untuk digunakan sebagai induk class
// Class suratTugas yang merupakan turunan dari class Database
class suratTugas extends Database {
   

    // Mengambil semua data permohonan
    public function tampilData() {
         // SQL query untuk memilih semua data dari tabel surat_tugas
        $sql = "SELECT * FROM surat_tugas";
         // Melakukan query ke database dengan menggunakan objek koneksi yang diwarisi dari class Database
        $data = $this->conn->query($sql);
         // Array untuk menampung hasil query
        $hasil = [];
          // Memeriksa apakah query mengembalikan baris data (ada data di tabel)
        if ($data && mysqli_num_rows($data) >0) {
            // Mengambil data baris demi baris dan menyimpannya dalam array $hasil
            while ($row = mysqli_fetch_array($data)) {
                $hasil[] = $row;
            }
        }
         // Mengembalikan array yang berisi data dari tabel surat_tugas
return $hasil;

    
    }

    // Metode ini akan dioverride oleh kelas turunan
   
}
 // Metode ini bisa dioverride oleh class turunan jika diperlukan
$tugas = new suratTugas();
// Memanggil metode tampilData() untuk mengambil data dari tabel surat_tugas
$dataTugas = $tugas->tampilData()
?>

