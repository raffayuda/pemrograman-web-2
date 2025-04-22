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
                                <p class="text-2xl font-semibold text-gray-800">250</p>
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
                                <p class="text-2xl font-semibold text-gray-800">45</p>
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
                                <p class="text-2xl font-semibold text-gray-800">120</p>
                            </div>
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
                        <p class="text-gray-600">Manage district data</p>
                    </a>
                    
                    <a href="unit_kerja/index.php" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                        <div class="flex items-center mb-3">
                            <div class="p-2 rounded-md bg-green-100">
                                <i class="fas fa-building text-green-600"></i>
                            </div>
                            <h2 class="text-xl font-semibold ml-3">Unit Kerja</h2>
                        </div>
                        <p class="text-gray-600">Manage work units data</p>
                    </a>
                    
                    <a href="pasien/index.php" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                        <div class="flex items-center mb-3">
                            <div class="p-2 rounded-md bg-red-100">
                                <i class="fas fa-user-injured text-red-600"></i>
                            </div>
                            <h2 class="text-xl font-semibold ml-3">Pasien</h2>
                        </div>
                        <p class="text-gray-600">Manage patient records</p>
                    </a>
                    
                    <a href="paramedik/index.php" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                        <div class="flex items-center mb-3">
                            <div class="p-2 rounded-md bg-yellow-100">
                                <i class="fas fa-user-md text-yellow-600"></i>
                            </div>
                            <h2 class="text-xl font-semibold ml-3">Paramedik</h2>
                        </div>
                        <p class="text-gray-600">Manage medical staff data</p>
                    </a>
                    
                    <a href="periksa/index.php" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                        <div class="flex items-center mb-3">
                            <div class="p-2 rounded-md bg-purple-100">
                                <i class="fas fa-stethoscope text-purple-600"></i>
                            </div>
                            <h2 class="text-xl font-semibold ml-3">Periksa</h2>
                        </div>
                        <p class="text-gray-600">Manage examination records</p>
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