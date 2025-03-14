<?php
require_once "nilai_mahasiswa.php";

// Inisialisasi array data mahasiswa
$data_mhs = [];

// Data Awal
$data_mhs[] = new NilaiMahasiswa("saha", "matkom", 89, 35, 36);
$data_mhs[] = new NilaiMahasiswa("siapa", "jarkom", 89, 85, 86);

// Proses form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $nama_siswa = htmlspecialchars($_POST["nama"]);
    $matakuliah = htmlspecialchars($_POST["matakuliah"]);
    $nilai_uts = floatval($_POST["nilai_uts"]);
    $nilai_uas = floatval($_POST["nilai_uas"]);
    $nilai_tugas = floatval($_POST["nilai_tugas"]);

    // Tambahkan data baru ke array
    $data_mhs[] = new NilaiMahasiswa($nama_siswa, $matakuliah, $nilai_uts, $nilai_uas, $nilai_tugas);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Nilai Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h3>Daftar Nilai Mahasiswa</h3>
        
        <div class="card mb-4">
            <div class="card-header">
                Input Nilai Mahasiswa
            </div>
            <div class="card-body">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="matakuliah" class="form-label">Pilih Mata Kuliah <span class="text-danger">*</span></label>
                        <select class="form-select" id="matakuliah" name="matakuliah" required>
                            <option value="Basis Data">Basis Data</option>
                            <option value="Pemrograman Web">Pemrograman Web</option>
                            <option value="Jaringan Komputer">Jaringan Komputer</option>
                        </select>
                    </div>
                    
                    <div class="mb-3">
                        <label for="nilai_uts" class="form-label">Nilai UTS <span class="text-danger">*</span></label>
                        <input type="number" class="form-control" id="nilai_uts" name="nilai_uts" min="0" max="100" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="nilai_uas" class="form-label">Nilai UAS <span class="text-danger">*</span></label>
                        <input type="number" class="form-control" id="nilai_uas" name="nilai_uas" min="0" max="100" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="nilai_tugas" class="form-label">Nilai Tugas/Praktikum <span class="text-danger">*</span></label>
                        <input type="number" class="form-control" id="nilai_tugas" name="nilai_tugas" min="0" max="100" required>
                    </div>
                    
                    <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                </form>
            </div>
        </div>
        
        <div class="card">
            <div class="card-header">
                Data Nilai Mahasiswa
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Mata Kuliah</th>
                                <th>Nilai UTS</th>
                                <th>Nilai UAS</th>
                                <th>Nilai Tugas</th>
                                <th>Nilai Akhir</th>
                                <th>Nilai Kelulusan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $nomor = 1;
                            foreach($data_mhs as $mhs) {
                                echo "<tr>";
                                echo "<td>" . $nomor . "</td>";
                                echo "<td>" . htmlspecialchars($mhs->nama) . "</td>";
                                echo "<td>" . htmlspecialchars($mhs->matakuliah) . "</td>";
                                echo "<td>" . $mhs->nilai_uts . "</td>";
                                echo "<td>" . $mhs->nilai_uas . "</td>";
                                echo "<td>" . $mhs->nilai_tugas . "</td>";
                                echo "<td>" . number_format($mhs->getNA(), 2) . "</td>";
                                echo "<td>" . $mhs->kelulusan() . "</td>";
                                echo "</tr>";
                                $nomor++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>