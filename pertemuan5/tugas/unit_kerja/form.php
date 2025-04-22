<?php
require_once '../dbkoneksi.php';
require_once '../components/config.php';

// Set active menu
setActiveMenu('unit_kerja');

// Initialize variables
$id = '';
$nama = '';
$form_action = 'create';

// Set page title
$page_title = ($form_action == 'create' ? 'Add New' : 'Edit') . ' Unit Kerja';

// Check if we're editing an existing record
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $form_action = 'update';
    
    // Fetch the record
    $sql = "SELECT * FROM unit_kerja WHERE id = ?";
    $stmt = $dbh->prepare($sql);
    $stmt->execute([$id]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($row) {
        $nama = $row['nama'];
        // Update page title for edit mode
        $page_title = 'Edit Unit Kerja';
    } else {
        echo "Record not found.";
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-100">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <?php include_once '../components/sidebar.php'; ?>
        
        <!-- Main Content -->
        <div class="flex flex-col flex-1 overflow-hidden">
            <!-- Top Navbar -->
            <?php include_once '../components/navbar.php'; ?>
            
            <!-- Main Content -->
            <main class="flex-1 overflow-y-auto p-6 bg-gray-100">
                <div class="container mx-auto p-4">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold"><?= $form_action == 'create' ? 'Add New' : 'Edit' ?> Unit Kerja</h1>
            <a href="index.php" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded">Back to List</a>
        </div>
        
        <div class="bg-white rounded-lg shadow p-6">
            <form action="process.php" method="POST">
                <input type="hidden" name="action" value="<?= $form_action ?>">
                <?php if ($form_action == 'update'): ?>
                <input type="hidden" name="id" value="<?= $id ?>">
                <?php endif; ?>
                
                <div class="mb-4">
                    <label for="nama" class="block text-sm font-medium text-gray-700">Nama Unit Kerja</label>
                    <input type="text" id="nama" name="nama" value="<?= $nama ?>" required
                           class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-2 border">
                </div>
                
                
                <div class="flex justify-end">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
                        <?= $form_action == 'create' ? 'Create' : 'Update' ?>
                    </button>
                </div>
            </form>
        </div>
                    </div>
            </main>
        </div>
    </div>
    
    <script>
        // Simple toggle for mobile menu
        document.addEventListener('DOMContentLoaded', function() {
            const menuButton = document.querySelector('#sidebarToggle');
            const sidebar = document.querySelector('.md\\:flex-shrink-0');

            menuButton.addEventListener('click', function() {
                sidebar.classList.toggle('hidden');
                sidebar.classList.toggle('md:flex');
            });
        });
    </script>
</body>
</html>