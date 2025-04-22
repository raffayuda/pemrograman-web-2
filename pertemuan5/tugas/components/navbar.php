<!-- Top Navbar Component -->
<header class="bg-white shadow">
    <div class="flex items-center justify-between px-6 py-4">
        <div class="flex items-center">
            <button class="text-gray-500 focus:outline-none md:hidden" id="sidebarToggle">
                <i class="fas fa-bars"></i>
            </button>
            <h1 class="text-2xl font-bold text-gray-800 ml-4"><?php echo $page_title ?? 'Dashboard'; ?></h1>
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