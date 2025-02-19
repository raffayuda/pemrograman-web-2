<?php
$laptop = ["Lenovo", "Asus", "Dell"];

// Menambahkan element di awal
array_unshift($laptop, "HP");

// Hasil
echo "Hasil";
foreach($laptop as $p){
    echo "<br>".$p;
}
?>