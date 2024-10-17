<?php
require_once 'Database.php'; //menautkan file database.php yang berisi class database

class permohonanIzin extends Database { // class PermohonanIzin yang mewarisi sifat atau properti dari class database sebagai induk
   

    // mengambil semua data permohonan izin
    public function tampilData() {
        // query SQL untuk mengambil semua data dari tabel permohonan_izin
        $sql = "SELECT * FROM permohonan_izin";
        // Menjalankan query dan menyimpan hasilnya dalam variabel $data
        $data = $this->conn->query($sql);
        // Membuat array kosong untuk menyimpan hasil data
        $hasil = [];
        
        // Memeriksa apakah query menghasilkan data (baris lebih dari 0)
        if ($data && mysqli_num_rows($data) >0) {
            while ($row = mysqli_fetch_array($data)) {
                $hasil[] = $row;
            }
        }
return $hasil;

    
    }

    // Metode ini akan dioverride oleh kelas turunan
   
}
$permohonanIzin = new permohonanIzin();
$dataIzin = $permohonanIzin->tampilData()
?>

