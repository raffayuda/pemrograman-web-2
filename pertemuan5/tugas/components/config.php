<?php
// Configuration file for the Healthcare Management System

// Base URL configuration
// Detect if we're in a subdirectory and set the base URL accordingly
$script_name = dirname($_SERVER['SCRIPT_NAME']);
$base_path = ($script_name === '/' || $script_name === '\\') ? '' : $script_name;

// Remove '/pertemuan5/tugas' from the path if present and replace with relative path
$current_dir = dirname($_SERVER['SCRIPT_FILENAME']);
$project_root = str_replace('\\', '/', realpath(__DIR__ . '/..'));

// Calculate how many directories we need to go up to reach the project root
$relative_path = '';
if (strpos($current_dir, $project_root) !== false) {
    $rel_path = str_replace($project_root, '', $current_dir);
    $levels = substr_count($rel_path, '/') + substr_count($rel_path, '\\');
    $relative_path = str_repeat('../', $levels);
}

// Set the base URL with the correct relative path
$base_url = $relative_path;

// Default page title
$page_title = 'Healthcare Management System';

// Default active menu
$active_menu = '';

// Function to determine the active menu based on the current URL
function setActiveMenu($current_page) {
    global $active_menu;
    $active_menu = $current_page;
}
?>