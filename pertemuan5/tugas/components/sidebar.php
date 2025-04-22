<!-- Sidebar Component -->
<div class="hidden md:flex md:flex-shrink-0">
    <div class="flex flex-col w-64 bg-gray-800">
        <div class="flex items-center justify-center h-16 bg-gray-900">
            <span class="text-white font-bold text-lg">Healthcare System</span>
        </div>
        <div class="flex flex-col flex-grow overflow-y-auto">
            <nav class="flex-1 px-2 py-4 space-y-2">
                <a href="<?php echo $base_url; ?>index.php" class="flex items-center px-4 py-3 <?php echo $active_menu == 'dashboard' ? 'text-white bg-gray-700' : 'text-gray-300 hover:bg-gray-700 hover:text-white'; ?> rounded-md transition-colors">
                    <i class="fas fa-home mr-3"></i>
                    <span>Dashboard</span>
                </a>
                <a href="<?php echo $base_url; ?>kelurahan/index.php" class="flex items-center px-4 py-3 <?php echo $active_menu == 'kelurahan' ? 'text-white bg-gray-700' : 'text-gray-300 hover:bg-gray-700 hover:text-white'; ?> rounded-md transition-colors">
                    <i class="fas fa-map-marker-alt mr-3"></i>
                    <span>Kelurahan</span>
                </a>
                <a href="<?php echo $base_url; ?>unit_kerja/index.php" class="flex items-center px-4 py-3 <?php echo $active_menu == 'unit_kerja' ? 'text-white bg-gray-700' : 'text-gray-300 hover:bg-gray-700 hover:text-white'; ?> rounded-md transition-colors">
                    <i class="fas fa-building mr-3"></i>
                    <span>Unit Kerja</span>
                </a>
                <a href="<?php echo $base_url; ?>pasien/index.php" class="flex items-center px-4 py-3 <?php echo $active_menu == 'pasien' ? 'text-white bg-gray-700' : 'text-gray-300 hover:bg-gray-700 hover:text-white'; ?> rounded-md transition-colors">
                    <i class="fas fa-user-injured mr-3"></i>
                    <span>Pasien</span>
                </a>
                <a href="<?php echo $base_url; ?>paramedik/index.php" class="flex items-center px-4 py-3 <?php echo $active_menu == 'paramedik' ? 'text-white bg-gray-700' : 'text-gray-300 hover:bg-gray-700 hover:text-white'; ?> rounded-md transition-colors">
                    <i class="fas fa-user-md mr-3"></i>
                    <span>Paramedik</span>
                </a>
                <a href="<?php echo $base_url; ?>periksa/index.php" class="flex items-center px-4 py-3 <?php echo $active_menu == 'periksa' ? 'text-white bg-gray-700' : 'text-gray-300 hover:bg-gray-700 hover:text-white'; ?> rounded-md transition-colors">
                    <i class="fas fa-stethoscope mr-3"></i>
                    <span>Periksa</span>
                </a>
            </nav>
        </div>
    </div>
</div>