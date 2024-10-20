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
        <a class="navbar-brand" href="tampil.php">Sistem Persuratan Dosen</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                
                <li class="nav-item">
                    <a class="nav-link active" href="tampil_permohonan_izin.php">Surat Permohonan Izin</a>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="surat_tgs.php" id="suratTugasDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Surat Tugas
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="suratTugasDropdown">
                        <li><a class="dropdown-item" href="surat_penelitian.php">Surat Tugas Penelitian</a></li>
                        <li><a class="dropdown-item" href="surat_seminar.php">Surat Tugas Seminar</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <h4 class="text-center">Data Surat Permohonan Izin</h4>

    <table class="table table-bordered table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">ID Permohonan Izin</th>
                <th scope="col">Dosen</th>
                <th scope="col">NIP</th>
                <th scope="col">Pangkat Jabatan</th>
                <th scope="col">Jabatan</th>
                <th scope="col">Unit Kerja</th>
            </tr>
        </thead>
        <tbody>
    <?php
    // Koneksi ke database dan query untuk mengambil data permohonan izin
    require_once('Database.php');
    require_once('permohonan_izin.php');
    // Cek apakah ada data yang tersedia
    if (!empty($dataIzin)) {
        // Loop untuk menampilkan setiap baris data
        foreach ($dataIzin as $row) {
            echo "<tr>
                <td>{$row['id_izin']}</td>
                <td>{$row['dosen']}</td>
                <td>{$row['nip']}</td>
                <td>{$row['pangkat_jabatan']}</td>
                <td>{$row['jabatan']}</td>
                <td>{$row['unit_kerja']}</td>
            </tr>";
        }
    } else {
        echo "<tr><td colspan='6' class='text-center'>Tidak ada data permohonan izin yang tersedia.</td></tr>";
    }
    ?>
        </tbody>
    </table>
</div>
</body>
</html>