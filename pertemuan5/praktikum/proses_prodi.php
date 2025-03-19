<?php 
require_once 'dbkoneksi.php';

// Get form data
$proses = $_POST['proses'];

// Determine which process to run
if($proses == "Simpan") {
    // Create operation
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $kaprodi = $_POST['kaprodi'];
    
    $sql = "INSERT INTO prodi (kode, nama, kaprodi) VALUES (?, ?, ?)";
    $stmt = $dbh->prepare($sql);
    $stmt->execute([$kode, $nama, $kaprodi]);
    
} else if($proses == "Update") {
    // Update operation
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $kaprodi = $_POST['kaprodi'];
    $id_edit = $_POST['id_edit'];
    
    $sql = "UPDATE prodi SET kode=?, nama=?, kaprodi=? WHERE id=?";
    $stmt = $dbh->prepare($sql);
    $stmt->execute([$kode, $nama, $kaprodi, $id_edit]);
    
} else if($proses == "Hapus") {
    // Delete operation
    $id_hapus = $_POST['id_edit'];
    
    $sql = "DELETE FROM prodi WHERE id=?";
    $stmt = $dbh->prepare($sql);
    $stmt->execute([$id_hapus]);
}

// Redirect back to the main page
header('location:form_prodi.php');
?>