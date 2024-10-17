<?php
require_once 'surat_tugas.php';

class suratSeminar extends suratTugas {
   

    // Mengambil semua data permohonan
    public function tampilData($tujuan=null) {
        $sql = "SELECT * FROM surat_tugas where tujuan = '".$tujuan."'";
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

?>