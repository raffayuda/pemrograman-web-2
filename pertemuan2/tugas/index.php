<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Nilai</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-md mx-auto bg-white p-8 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold mb-6 text-center">Form Input Nilai</h1>
        <form method="POST" action="">
            <div class="mb-4">
                <label for="nama" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                <input type="text" id="nama" name="nama" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" required>
            </div>

            <div class="mb-4">
                <label for="mata_kuliah" class="block text-sm font-medium text-gray-700">Mata Kuliah</label>
                <select id="mata_kuliah" name="mata_kuliah" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" required>
                    <option value="Pemrograman Web">Pemrograman Web</option>
                    <option value="Basis Data">Basis Data</option>
                    <option value="Jaringan Komputer">Jaringan Komputer</option>
                    <option value="UI/UX">UI/UX</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="nilai_uts" class="block text-sm font-medium text-gray-700">Nilai UTS</label>
                <input type="number" id="nilai_uts" name="nilai_uts" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" required>
            </div>

            <div class="mb-4">
                <label for="nilai_uas" class="block text-sm font-medium text-gray-700">Nilai UAS</label>
                <input type="number" id="nilai_uas" name="nilai_uas" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" required>
            </div>

            <div class="mb-4">
                <label for="nilai_tugas" class="block text-sm font-medium text-gray-700">Nilai Praktikum</label>
                <input type="number" id="nilai_tugas" name="nilai_tugas" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" required>
            </div>

            <div class="flex justify-center">
                <button type="submit" name="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700">Submit</button>
            </div>
        </form>
    </div>

    <?php
    if (isset($_POST['submit'])) {
        $nama = htmlspecialchars($_POST['nama']);
        $mata_kuliah = htmlspecialchars($_POST['mata_kuliah']);
        $nilai_uts = (int)$_POST['nilai_uts'];
        $nilai_uas = (int)$_POST['nilai_uas'];
        $nilai_tugas = (int)$_POST['nilai_tugas'];

        $nilai_total = ($nilai_uts * 0.3) + ($nilai_uas * 0.35) + ($nilai_tugas * 0.35);

        $status = ($nilai_total >= 60) ? "Lulus" : "Tidak Lulus";
        $grade;
        echo "<div class='max-w-md mx-auto bg-white p-8 rounded-lg shadow-lg mt-8'>";
        echo "<h2 class='text-xl font-bold mb-4'>Hasil Perhitungan Nilai</h2>";
        echo "<p><strong>Nama Lengkap:</strong> $nama</p>";
        echo "<p><strong>Mata Kuliah:</strong> $mata_kuliah</p>";
        echo "<p><strong>Nilai UTS:</strong> $nilai_uts</p>";
        echo "<p><strong>Nilai UAS:</strong> $nilai_uas</p>";
        echo "<p><strong>Nilai Tugas:</strong> $nilai_tugas</p>";
        echo "<p><strong>Nilai Total:</strong> " . number_format($nilai_total, 2) . "</p>";
        echo "<p><strong>Status:</strong> $status</p>";
        if ($nilai_total > 100 || $nilai_total < 0) {
          $grade = "I"; // Grade "I" jika nilai total > 100 atau < 0
      } else if ($nilai_total >= 85) {
          $grade = "A";
      } else if ($nilai_total >= 70) {
          $grade = "B";
      } else if ($nilai_total >= 56) {
          $grade = "C";
      } else if ($nilai_total >= 36) {
          $grade = "D";
      } else {
          $grade = "E"; // Grade "E" jika nilai total antara 0 dan 35
      }
      echo "<p><strong>Grade:</strong> $grade</p>";

        switch ($grade) {
          case $grade == "A":
            echo "<p><strong>Keterangan</strong> : Sangat Memuaskan</p>";
            break;
          case $grade == "B":
            echo "<p><strong>Keterangan</strong> : Memuaskan</p>";
            break;
          case $grade == "C":
            echo "<p><strong>Keterangan</strong> : Cukup</p>";
            break;
          case $grade == "D":
            echo "<p><strong>Keterangan</strong> : Kurang</p>";
            break;
          case $grade == "E":
            echo "<p><strong>Keterangan</strong> : Sangat Kurang</p>";
            break;
          case $grade == "I":
            echo "<p><strong>Keterangan</strong> : Tidak Ada</p>";
            break;
          
          default:
            echo "Grade tidak valid";
            break;
        }
        echo "</div>";
    }
    ?>
</body>
</html>
