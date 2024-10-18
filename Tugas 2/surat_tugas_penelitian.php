<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="tampil.php">Sistem Persuratan</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="tampil_permohonan_izin.php">Surat Permohonan Izin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="surat_tgs.php">Surat Tugas</a>
                </li>
            </ul>
        </div>
    </div>
</nav>  


<?php

// // Class SuratTugas untuk menampilkan data dari tabel surat_tugas
// class SuratTugas {
//     protected $conn;

//     // Constructor untuk menginisialisasi koneksi database
//     public function __construct($conn) {
//         $this->conn = $conn;
//     }

//     // Method untuk menampilkan semua data surat tugas
//     public function tampilkanSemuaSuratTugas() {
//         $sql = "SELECT * FROM surat_tugas";
//         $result = $this->conn->query($sql);

//         if ($result->num_rows > 0) {
//             echo "
//             <table border='1' style='border-collapse: collapse; width: 80%; margin: 20px auto; font-family: Arial, sans-serif;'>
//                 <thead>
//                     <tr style='background-color: #f2f2f2;'>
//                         <th>ID Surat Tugas</th>
//                         <th>Nomor</th>
//                         <th>Tanggal Surat Tugas</th>
//                         <th>Tujuan</th>
//                         <th>Transportasi</th>
//                         <th>Keperluan</th>
//                         <th>Dosen</th>
//                     </tr>
//                 </thead>
//                 <tbody>";
            
//             // Loop untuk menampilkan setiap baris data
//             while ($row = $result->fetch_assoc()) {
//                 echo "
//                 <tr>
//                     <td>{$row['id_surat_tugas']}</td>
//                     <td>{$row['nomor']}</td>
//                     <td>{$row['tgl_surat_tugas']}</td>
//                     <td>{$row['tujuan']}</td>
//                     <td>{$row['transportasi']}</td>
//                     <td>{$row['keperluan']}</td>
//                     <td>{$row['dosen']}</td>
//                 </tr>";
//             }

//             echo "
//                 </tbody>
//             </table>";
//         } else {
//             echo "<p style='text-align: center;'>Tidak ada data surat tugas yang tersedia.</p>";
//         }
//     }
// }

// Class SuratPenelitian extends SuratTugas

require_once('surat_tugas.php');
class SuratPenelitian extends SuratTugas {
    // Constructor untuk menginisialisasi data dan memanggil parent constructor
    public function __construct() {
        parent::__construct();
    }

    // Method untuk menampilkan semua data surat penelitian
    public function tampilData() {
        $sql = "SELECT * FROM surat_tugas "; // Asumsi ada kolom 'topik_penelitian'
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            echo "
            <table border='1' style='border-collapse: collapse; width: 80%; margin: 20px auto; font-family: Arial, sans-serif;'>
                <thead>
                    <tr style='background-color: #f2f2f2;'>
                        <th>ID Surat Tugas</th>
                        <th>Nomor</th>
                        <th>Tanggal Surat Tugas</th>
                        <th>Tujuan</th>
                        <th>Transportasi</th>
                        <th>Keperluan</th>
                        <th>Dosen</th>
                      
                    </tr>
                </thead>
                <tbody>";
            
            // Loop untuk menampilkan setiap baris data
            while ($row = $result->fetch_assoc()) {
                echo "
                <tr>
                    <td>{$row['id_surat_tugas']}</td>
                    <td>{$row['nomor']}</td>
                    <td>{$row['tgl_surat_tugas']}</td>
                    <td>{$row['tujuan']}</td>
                    <td>{$row['transportasi']}</td>
                    <td>{$row['keperluan']}</td>
                    <td>{$row['dosen']}</td>
                   
                </tr>";
            }

            echo "
                </tbody>
            </table>";
        } else {
            echo "<p style='text-align: center;'>Tidak ada data surat penelitian yang tersedia.</p>";
        }
    }
}



// Membuat objek SuratPenelitian
$suratPenelitian = new SuratPenelitian();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Surat Tugas</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>

<h2 style="text-align: center;">Daftar Surat Penelitian</h2>

<?php
// Menampilkan data surat penelitian
$suratPenelitian->tampilData();
?>

</tbody>
    </table>
</div>
</body>
</html> 