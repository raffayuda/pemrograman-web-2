<?php 
$ar_buah = ["Semangka", "Mangga", "Pisang"];

foreach($ar_buah as $data){
    echo "<ul> <li>$data</li> </ul>";
}

// Memanggil Array
echo "buah yang ke 2 adalah $ar_buah[1]";

// mencetak jumlah array
echo "<br> Jumlah Array : " . count($ar_buah);

// Menambahkan Buah
array_push($ar_buah, 'Naga');

// Hapus buah index ke 1
unset($ar_buah[1]);

// ubah index ke 4 menjadi melon
$ar_buah[4] = "Melon";

foreach($ar_buah as $index => $data){
    echo "<ul> <li>index : $index, Nama Buah : $data</li> </ul>";
}

?>