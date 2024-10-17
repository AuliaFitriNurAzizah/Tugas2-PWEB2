<?php
require_once 'Database.php';

class suratTugas extends Database {
   

    // Mengambil semua data permohonan
    public function tampilData() {
        $sql = "SELECT * FROM surat_tugas";
        $data = $this->conn->query($sql);
       
        $hasil = [];
        if ($data && mysqli_num_rows($data) >0) {
            while ($row = mysqli_fetch_array($data)) {
                $hasil[] = $row;
            }
        }
return $hasil;

    
    }

    // Metode ini akan dioverride oleh kelas turunan
   
}
$tugas = new suratTugas();
$dataTugas = $tugas->tampilData()
?>

