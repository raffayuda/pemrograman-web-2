<?php 

function hitung_nilai($nilai_uts, $nilai_uas, $nilai_tugas){
    define("NILAI_UTS", 0.25);
    define("NILAI_UAS", 0.30);
    define("NILAI_TUGAS", 0.45);
    $nilai_total = ($nilai_uts * NILAI_UTS) + ($nilai_uas * NILAI_UAS) + ($nilai_tugas * NILAI_TUGAS);
    return  $nilai_total;
}


function kelulusan($nilai){
    define("NILAI_MINIMAL", 60);
    if ($nilai >= NILAI_MINIMAL) {
        return "Lulus";
    } else {
        return "Tidak Lulus";
    }
}

function grade($nilai){
    if ($nilai >= 85) {
        return "A";
    } else if ($nilai >= 70) {
        return "B";
    } else if ($nilai >= 56) {
        return "C";
    } else if ($nilai >= 36) {
        return "D";
    } else {
        return "E";
    }
}

?>
