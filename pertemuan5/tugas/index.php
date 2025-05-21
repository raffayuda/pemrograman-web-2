<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Healthcare Management System</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-100">
    <?php
    // Koneksi database
    $host = 'localhost';
    $dbname = 'dbpuskesmas';
    $username = 'root';
    $password = '';
    
    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // Query untuk mendapatkan jumlah data
        $totalPasien = $conn->query("SELECT COUNT(*) FROM pasien")->fetchColumn();
        $totalParamedik = $conn->query("SELECT COUNT(*) FROM paramedik")->fetchColumn();
        $totalPeriksa = $conn->query("SELECT COUNT(*) FROM periksa")->fetchColumn();
        $totalUnitKerja = $conn->query("SELECT COUNT(*) FROM unit_kerja")->fetchColumn();
        $totalKelurahan = $conn->query("SELECT COUNT(*) FROM kelurahan")->fetchColumn();
        
        // Query untuk mendapatkan data terbaru
        $latestPasien = $conn->query("SELECT * FROM pasien ORDER BY id DESC LIMIT 5")->fetchAll(PDO::FETCH_ASSOC);
        $latestParamedik = $conn->query("SELECT p.*, u.nama as unit_nama FROM paramedik p
                                        LEFT JOIN unit_kerja u ON p.unit_kerja_id = u.id 
                                        ORDER BY p.id DESC LIMIT 5")->fetchAll(PDO::FETCH_ASSOC);
        
    } catch(PDOException $e) {
        echo "Koneksi database gagal: " . $e->getMessage();
        // Set nilai default jika koneksi gagal
        $totalPasien = 0;
        $totalParamedik = 0;
        $totalPeriksa = 0;
        $totalUnitKerja = 0;
        $totalKelurahan = 0;
        $latestPasien = [];
        $latestParamedik = [];
    }
    ?>

    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <div class="hidden md:flex md:flex-shrink-0">
            <div class="flex flex-col w-64 bg-gray-800">
                <div class="flex items-center justify-center h-16 bg-gray-900">
                    <span class="text-white font-bold text-lg">Healthcare System</span>
                </div>
                <div class="flex flex-col flex-grow overflow-y-auto">
                    <nav class="flex-1 px-2 py-4 space-y-2">
                        <a href="#" class="flex items-center px-4 py-3 text-white bg-gray-700 rounded-md">
                            <i class="fas fa-home mr-3"></i>
                            <span>Dashboard</span>
                        </a>
                        <a href="kelurahan/index.php" class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md transition-colors">
                            <i class="fas fa-map-marker-alt mr-3"></i>
                            <span>Kelurahan</span>
                        </a>
                        <a href="unit_kerja/index.php" class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md transition-colors">
                            <i class="fas fa-building mr-3"></i>
                            <span>Unit Kerja</span>
                        </a>
                        <a href="pasien/index.php" class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md transition-colors">
                            <i class="fas fa-user-injured mr-3"></i>
                            <span>Pasien</span>
                        </a>
                        <a href="paramedik/index.php" class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md transition-colors">
                            <i class="fas fa-user-md mr-3"></i>
                            <span>Paramedik</span>
                        </a>
                        <a href="periksa/index.php" class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md transition-colors">
                            <i class="fas fa-stethoscope mr-3"></i>
                            <span>Periksa</span>
                        </a>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex flex-col flex-1 overflow-hidden">
            <!-- Top Navbar -->
            <header class="bg-white shadow">
                <div class="flex items-center justify-between px-6 py-4">
                    <div class="flex items-center">
                        <button class="text-gray-500 focus:outline-none md:hidden">
                            <i class="fas fa-bars"></i>
                        </button>
                        <h1 class="text-2xl font-bold text-gray-800 ml-4">Dashboard</h1>
                    </div>
                    <div class="flex items-center">
                        <div class="relative">
                            <button class="flex items-center text-gray-500 focus:outline-none">
                                <i class="fas fa-user-circle text-2xl"></i>
                                <span class="ml-2">Admin</span>
                            </button>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Main Content -->
            <main class="flex-1 overflow-y-auto p-6 bg-gray-100">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-blue-500 bg-opacity-10">
                                <i class="fas fa-user-injured text-blue-500 text-2xl"></i>
                            </div>
                            <div class="ml-4">
                                <h2 class="text-gray-600 text-sm">Total Pasien</h2>
                                <p class="text-2xl font-semibold text-gray-800"><?php echo $totalPasien; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-green-500 bg-opacity-10">
                                <i class="fas fa-user-md text-green-500 text-2xl"></i>
                            </div>
                            <div class="ml-4">
                                <h2 class="text-gray-600 text-sm">Total Paramedik</h2>
                                <p class="text-2xl font-semibold text-gray-800"><?php echo $totalParamedik; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-purple-500 bg-opacity-10">
                                <i class="fas fa-stethoscope text-purple-500 text-2xl"></i>
                            </div>
                            <div class="ml-4">
                                <h2 class="text-gray-600 text-sm">Total Pemeriksaan</h2>
                                <p class="text-2xl font-semibold text-gray-800"><?php echo $totalPeriksa; ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                    <!-- Statistik Tambahan -->
                    <div class="bg-white rounded-lg shadow p-6">
                        <h2 class="text-lg font-semibold text-gray-800 mb-4">Statistik Lainnya</h2>
                        <div class="space-y-4">
                            <div class="flex justify-between items-center">
                                <span class="text-gray-600">Unit Kerja</span>
                                <span class="font-semibold"><?php echo $totalUnitKerja; ?></span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-teal-500 h-2 rounded-full" style="width: <?php echo min(100, ($totalUnitKerja/10)*100); ?>%"></div>
                            </div>
                            
                            <div class="flex justify-between items-center">
                                <span class="text-gray-600">Kelurahan</span>
                                <span class="font-semibold"><?php echo $totalKelurahan; ?></span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-orange-500 h-2 rounded-full" style="width: <?php echo min(100, ($totalKelurahan/10)*100); ?>%"></div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Grafik Kategori Paramedik -->
                    <div class="bg-white rounded-lg shadow p-6">
                        <h2 class="text-lg font-semibold text-gray-800 mb-4">Kategori Paramedik</h2>
                        <?php
                        try {
                            $kategoriStats = $conn->query("SELECT kategori, COUNT(*) as jumlah FROM paramedik GROUP BY kategori")->fetchAll(PDO::FETCH_ASSOC);
                            $kategoriData = [
                                'dokter' => 0,
                                'perawat' => 0,
                                'bidan' => 0,
                                'apoteker' => 0
                            ];
                            
                            foreach ($kategoriStats as $stat) {
                                if (isset($stat['kategori']) && isset($stat['jumlah'])) {
                                    $kategoriData[$stat['kategori']] = $stat['jumlah'];
                                }
                            }
                            
                            $totalKategori = array_sum($kategoriData);
                            
                            // Jika tidak ada data, tampilkan pesan
                            if ($totalKategori == 0) {
                                echo "<p class='text-gray-500 italic'>Belum ada data kategori paramedik.</p>";
                            }
                        } catch(PDOException $e) {
                            echo "<p class='text-red-500'>Error: " . $e->getMessage() . "</p>";
                            $kategoriData = [
                                'dokter' => 0,
                                'perawat' => 0,
                                'bidan' => 0,
                                'apoteker' => 0
                            ];
                            $totalKategori = 0;
                        }
                        ?>
                        
                        <?php if ($totalKategori > 0): ?>
                        <div class="space-y-4">
                            <div>
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-600">Dokter</span>
                                    <span class="font-semibold"><?php echo $kategoriData['dokter']; ?></span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-blue-500 h-2 rounded-full" style="width: <?php echo ($totalKategori > 0) ? ($kategoriData['dokter']/$totalKategori*100) : 0; ?>%"></div>
                                </div>
                            </div>
                            
                            <div>
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-600">Perawat</span>
                                    <span class="font-semibold"><?php echo $kategoriData['perawat']; ?></span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-green-500 h-2 rounded-full" style="width: <?php echo ($totalKategori > 0) ? ($kategoriData['perawat']/$totalKategori*100) : 0; ?>%"></div>
                                </div>
                            </div>
                            
                            <div>
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-600">Bidan</span>
                                    <span class="font-semibold"><?php echo $kategoriData['bidan']; ?></span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-pink-500 h-2 rounded-full" style="width: <?php echo ($totalKategori > 0) ? ($kategoriData['bidan']/$totalKategori*100) : 0; ?>%"></div>
                                </div>
                            </div>
                            
                            <div>
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-600">Apoteker</span>
                                    <span class="font-semibold"><?php echo $kategoriData['apoteker']; ?></span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-purple-500 h-2 rounded-full" style="width: <?php echo ($totalKategori > 0) ? ($kategoriData['apoteker']/$totalKategori*100) : 0; ?>%"></div>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Tabel Data Terbaru -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                    <!-- Pasien Terbaru -->
                    <div class="bg-white rounded-lg shadow overflow-hidden">
                        <div class="px-6 py-4 border-b border-gray-200">
                            <h2 class="text-lg font-semibold text-gray-800">Pasien Terbaru</h2>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kode</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Gender</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <?php if (empty($latestPasien)): ?>
                                    <tr>
                                        <td colspan="3" class="px-6 py-4 text-center text-gray-500 italic">Belum ada data pasien.</td>
                                    </tr>
                                    <?php else: ?>
                                        <?php foreach ($latestPasien as $pasien): ?>
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900"><?php echo htmlspecialchars($pasien['kode']); ?></td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900"><?php echo htmlspecialchars($pasien['nama']); ?></td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                <?php echo ($pasien['gender'] == 'L') ? 'Laki-laki' : 'Perempuan'; ?>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <!-- Paramedik Terbaru -->
                    <div class="bg-white rounded-lg shadow overflow-hidden">
                        <div class="px-6 py-4 border-b border-gray-200">
                            <h2 class="text-lg font-semibold text-gray-800">Paramedik Terbaru</h2>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kategori</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Unit Kerja</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <?php if (empty($latestParamedik)): ?>
                                    <tr>
                                        <td colspan="3" class="px-6 py-4 text-center text-gray-500 italic">Belum ada data paramedik.</td>
                                    </tr>
                                    <?php else: ?>
                                        <?php foreach ($latestParamedik as $paramedik): ?>
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900"><?php echo htmlspecialchars($paramedik['nama']); ?></td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                <?php 
                                                    $kategori = ucfirst($paramedik['kategori']);
                                                    $badge_color = '';
                                                    switch ($paramedik['kategori']) {
                                                        case 'dokter':
                                                            $badge_color = 'bg-blue-100 text-blue-800';
                                                            break;
                                                        case 'perawat':
                                                            $badge_color = 'bg-green-100 text-green-800';
                                                            break;
                                                        case 'bidan':
                                                            $badge_color = 'bg-pink-100 text-pink-800';
                                                            break;
                                                        case 'apoteker':
                                                            $badge_color = 'bg-purple-100 text-purple-800';
                                                            break;
                                                    }
                                                ?>
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full <?php echo $badge_color; ?>">
                                                    <?php echo $kategori; ?>
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900"><?php echo htmlspecialchars($paramedik['unit_nama'] ?? '-'); ?></td>
                                        </tr>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <h2 class="text-xl font-semibold text-gray-800 mb-4">Manajemen Data</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <a href="kelurahan/index.php" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                        <div class="flex items-center mb-3">
                            <div class="p-2 rounded-md bg-blue-100">
                                <i class="fas fa-map-marker-alt text-blue-600"></i>
                            </div>
                            <h2 class="text-xl font-semibold ml-3">Kelurahan</h2>
                        </div>
                        <p class="text-gray-600">Kelola data kelurahan</p>
                    </a>
                    
                    <a href="unit_kerja/index.php" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                        <div class="flex items-center mb-3">
                            <div class="p-2 rounded-md bg-green-100">
                                <i class="fas fa-building text-green-600"></i>
                            </div>
                            <h2 class="text-xl font-semibold ml-3">Unit Kerja</h2>
                        </div>
                        <p class="text-gray-600">Kelola data unit kerja</p>
                    </a>
                    
                    <a href="pasien/index.php" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                        <div class="flex items-center mb-3">
                            <div class="p-2 rounded-md bg-red-100">
                                <i class="fas fa-user-injured text-red-600"></i>
                            </div>
                            <h2 class="text-xl font-semibold ml-3">Pasien</h2>
                        </div>
                        <p class="text-gray-600">Kelola data pasien</p>
                    </a>
                    
                    <a href="paramedik/index.php" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                        <div class="flex items-center mb-3">
                            <div class="p-2 rounded-md bg-yellow-100">
                                <i class="fas fa-user-md text-yellow-600"></i>
                            </div>
                            <h2 class="text-xl font-semibold ml-3">Paramedik</h2>
                        </div>
                        <p class="text-gray-600">Kelola data paramedik</p>
                    </a>
                    
                    <a href="periksa/index.php" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                        <div class="flex items-center mb-3">
                            <div class="p-2 rounded-md bg-purple-100">
                                <i class="fas fa-stethoscope text-purple-600"></i>
                            </div>
                            <h2 class="text-xl font-semibold ml-3">Periksa</h2>
                        </div>
                        <p class="text-gray-600">Kelola data pemeriksaan</p>
                    </a>
                </div>
            </main>
        </div>
    </div>

    <script>
        // Simple toggle for mobile menu
        document.addEventListener('DOMContentLoaded', function() {
            const menuButton = document.querySelector('button.md\\:hidden');
            const sidebar = document.querySelector('.md\\:flex-shrink-0');
            
            menuButton.addEventListener('click', function() {
                sidebar.classList.toggle('hidden');
                sidebar.classList.toggle('md:flex');
            });
        });
    </script>
</body>
</html>