<?php 
$siswa = ["Raffa", "Boday", "Idoy", "Aceng"];

// Menampilkan Array awal

echo "Array Aawal : \n";
print_r($siswa);

// menghapus elemen terakhir dari array
$orang_terakhir = array_pop($siswa);

// Menampilkan elemen yang dihapus
echo "Elemen yang akan dihapus $orang_terakhir";

// Menampilkan array setelah penghapusan
echo "<br>Array setelah penghapusan : <br>";
print_r($siswa);
?>