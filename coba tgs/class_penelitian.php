<?php
// Menggunakan require_once untuk memastikan bahwa file 'surat_tugas.php' hanya dimuat satu kali.
// File ini kemungkinan berisi definisi kelas suratTugas yang akan digunakan di kelas suratPenelitian.
require_once 'surat_tugas.php';
// Mendefinisikan kelas suratPenelitian yang mewarisi (extends) kelas suratTugas.
class suratPenelitian extends suratTugas {
   

    // Mengambil semua data permohonan
    // Fungsi untuk menampilkan data dari tabel surat_tugas berdasarkan kolom 'tujuan'.
    public function tampilData($tujuan=null) {
        // Membuat query SQL untuk mengambil semua data dari tabel 'surat_tugas' yang memiliki tujuan tertentu.
        // Query ini akan mencocokkan nilai dari kolom 'tujuan' dengan parameter yang diberikan.
        $sql = "SELECT * FROM surat_tugas where tujuan = '".$tujuan."'";
        // Menjalankan query SQL menggunakan koneksi database yang diwarisi dari kelas induk suratTugas.
        $data = $this->conn->query($sql);
       // Mendefinisikan array kosong untuk menampung hasil data yang diperoleh dari query.
      
       $hasil = [];
       // Memeriksa apakah query berhasil dan apakah terdapat baris hasil data yang lebih dari 0 
       if ($data && mysqli_num_rows($data) >0) {
            while ($row = mysqli_fetch_array($data)) { // Mengambil setiap baris hasil query dan memasukkannya ke dalam array $hasil.
                $hasil[] = $row; // Setiap baris ditambahkan ke dalam array $hasil.
            }
        }
return $hasil; // Mengembalikan array $hasil yang berisi data dari query.

    
    }

    // Metode ini akan dioverride oleh kelas turunan
   
}

?>