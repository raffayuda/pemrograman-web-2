<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Luas dan Keliling Limas dan Prisma</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-4 p-4">
        <h1 class="text-2xl font-bold mb-4 text-center">Hitung Volume dan Luas Permukaan Limas dan Prisma</h1>
        
        <?php
        // Kelas untuk menghitung bangun ruang
        class BangunRuang {
            protected $alas;
            protected $tinggi;
            protected $sisi;
            
            public function __construct($alas, $tinggi, $sisi) {
                $this->alas = $alas;
                $this->tinggi = $tinggi;
                $this->sisi = $sisi;
            }
        }
        
        class Limas extends BangunRuang {
            public function hitungVolume() {
                // Volume limas = 1/3 * luas alas * tinggi
                return (1/3) * ($this->alas * $this->alas) * $this->tinggi;
            }
            
            public function hitungLuasPermukaan() {
                // Luas alas
                $luasAlas = $this->alas * $this->alas;
                
                // Luas selimut (4 segitiga)
                $tinggiSegitiga = sqrt(pow($this->tinggi, 2) + pow($this->alas/2, 2));
                $luasSelimut = 4 * (0.5 * $this->alas * $tinggiSegitiga);
                
                return $luasAlas + $luasSelimut;
            }
        }
        
        class Prisma extends BangunRuang {
            public function hitungVolume() {
                // Volume prisma = luas alas * tinggi
                // Asumsi alas berbentuk segitiga
                $luasAlas = 0.5 * $this->alas * $this->sisi;
                return $luasAlas * $this->tinggi;
            }
            
            public function hitungLuasPermukaan() {
                // Luas alas (2 kali luas segitiga)
                $luasAlas = 2 * (0.5 * $this->alas * $this->sisi);
                
                // Luas selimut (3 persegi panjang)
                $kelilingAlas = $this->alas + $this->sisi + sqrt(pow($this->alas, 2) + pow($this->sisi, 2));
                $luasSelimut = $kelilingAlas * $this->tinggi;
                
                return $luasAlas + $luasSelimut;
            }
        }
        
        // Inisialisasi variabel hasil
        $hasilLimas = null;
        $hasilPrisma = null;
        
        // Proses form limas
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["hitung_limas"])) {
            $alas = floatval($_POST["alas_limas"]);
            $tinggi = floatval($_POST["tinggi_limas"]);
            $sisi = floatval($_POST["sisi_limas"]);
            
            $limas = new Limas($alas, $tinggi, $sisi);
            
            $hasilLimas = [
                "volume" => $limas->hitungVolume(),
                "luas_permukaan" => $limas->hitungLuasPermukaan()
            ];
        }
        
        // Proses form prisma
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["hitung_prisma"])) {
            $alas = floatval($_POST["alas_prisma"]);
            $tinggi = floatval($_POST["tinggi_prisma"]);
            $sisi = floatval($_POST["sisi_prisma"]);
            
            $prisma = new Prisma($alas, $tinggi, $sisi);
            
            $hasilPrisma = [
                "volume" => $prisma->hitungVolume(),
                "luas_permukaan" => $prisma->hitungLuasPermukaan()
            ];
        }
        ?>
        
        <div class="grid md:grid-cols-2 gap-6">
            <!-- Form Limas -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-semibold mb-4 text-center">Limas Segiempat</h2>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="mb-4">
                        <label for="alas_limas" class="block text-sm font-medium text-gray-700 mb-1">Panjang Sisi Alas (m):</label>
                        <input type="number" step="0.01" name="alas_limas" id="alas_limas" class="mt-1 p-2 w-full border rounded-md focus:ring-blue-500 focus:border-blue-500" required>
                    </div>
                    <div class="mb-4">
                        <label for="tinggi_limas" class="block text-sm font-medium text-gray-700 mb-1">Tinggi Limas (m):</label>
                        <input type="number" step="0.01" name="tinggi_limas" id="tinggi_limas" class="mt-1 p-2 w-full border rounded-md focus:ring-blue-500 focus:border-blue-500" required>
                    </div>
                    <div class="mb-4">
                        <label for="sisi_limas" class="block text-sm font-medium text-gray-700 mb-1">Tinggi Sisi Tegak (m):</label>
                        <input type="number" step="0.01" name="sisi_limas" id="sisi_limas" class="mt-1 p-2 w-full border rounded-md focus:ring-blue-500 focus:border-blue-500" required>
                    </div>
                    <button type="submit" name="hitung_limas" class="w-full bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md transition duration-300">Hitung Limas</button>
                </form>
                
                <?php if ($hasilLimas): ?>
                <div class="mt-4 p-4 bg-blue-50 rounded-md border border-blue-200">
                    <h3 class="text-lg font-medium text-blue-800 mb-2">Hasil Perhitungan Limas:</h3>
                    <p class="mb-1"><span class="font-medium">Volume:</span> <?php echo number_format($hasilLimas["volume"], 2); ?> m³</p>
                    <p><span class="font-medium">Luas Permukaan:</span> <?php echo number_format($hasilLimas["luas_permukaan"], 2); ?> m²</p>
                </div>
                <?php endif; ?>
            </div>
            
            <!-- Form Prisma -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-semibold mb-4 text-center">Prisma Segitiga</h2>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="mb-4">
                        <label for="alas_prisma" class="block text-sm font-medium text-gray-700 mb-1">Alas Segitiga (m):</label>
                        <input type="number" step="0.01" name="alas_prisma" id="alas_prisma" class="mt-1 p-2 w-full border rounded-md focus:ring-blue-500 focus:border-blue-500" required>
                    </div>
                    <div class="mb-4">
                        <label for="tinggi_prisma" class="block text-sm font-medium text-gray-700 mb-1">Tinggi Prisma (m):</label>
                        <input type="number" step="0.01" name="tinggi_prisma" id="tinggi_prisma" class="mt-1 p-2 w-full border rounded-md focus:ring-blue-500 focus:border-blue-500" required>
                    </div>
                    <div class="mb-4">
                        <label for="sisi_prisma" class="block text-sm font-medium text-gray-700 mb-1">Tinggi Segitiga Alas (m):</label>
                        <input type="number" step="0.01" name="sisi_prisma" id="sisi_prisma" class="mt-1 p-2 w-full border rounded-md focus:ring-blue-500 focus:border-blue-500" required>
                    </div>
                    <button type="submit" name="hitung_prisma" class="w-full bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md transition duration-300">Hitung Prisma</button>
                </form>
                
                <?php if ($hasilPrisma): ?>
                <div class="mt-4 p-4 bg-blue-50 rounded-md border border-blue-200">
                    <h3 class="text-lg font-medium text-blue-800 mb-2">Hasil Perhitungan Prisma:</h3>
                    <p class="mb-1"><span class="font-medium">Volume:</span> <?php echo number_format($hasilPrisma["volume"], 2); ?> m³</p>
                    <p><span class="font-medium">Luas Permukaan:</span> <?php echo number_format($hasilPrisma["luas_permukaan"], 2); ?> m²</p>
                </div>
                <?php endif; ?>
            </div>
        </div>
        
        <div class="mt-6 bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold mb-4 text-center">Informasi Bangun Ruang</h2>
            <div class="grid md:grid-cols-2 gap-4">
                <div class="border p-4 rounded-md">
                    <h3 class="font-medium text-lg mb-2">Limas Segiempat</h3>
                    <p class="text-sm text-gray-600 mb-2">• Volume = 1/3 × luas alas × tinggi</p>
                    <p class="text-sm text-gray-600">• Luas Permukaan = luas alas + luas selimut</p>
                </div>
                <div class="border p-4 rounded-md">
                    <h3 class="font-medium text-lg mb-2">Prisma Segitiga</h3>
                    <p class="text-sm text-gray-600 mb-2">• Volume = luas alas × tinggi</p>
                    <p class="text-sm text-gray-600">• Luas Permukaan = (2 × luas alas) + luas selimut</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>