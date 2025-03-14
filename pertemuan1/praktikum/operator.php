<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">Angka 1:</label>
        <input type="number" name="angka1">
        <br>
        <label for="">Angka 2:</label>
        <input type="number" name="angka2">
        <br>
        <label for="">Operasi</label>
        <select name="operasi" id="">
            <option value="tambah">+</option>
            <option value="kurang">-</option>
            <option value="kali">x</option>
            <option value="bagi">/</option>
        </select>
        <button type="submit" name="hitung">Hitung</button>
    </form>
    <?php 
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $operasi = $_POST['operasi'];
    $hasil;
    switch ($operasi) {
        case 'tambah':
            $hasil = intval($angka1) + intval($angka2); 
            break;
        case 'kurang':
            $hasil = intval($angka1) - intval($angka2); 
            break;
        case 'bagi':
            $hasil = intval($angka1) / intval($angka2); 
            break;
        
        case 'kali':
            $hasil = intval($angka1) * intval($angka2); 
            break;
        
        default:
            # code...
            break;
    }
    echo "<h1>hasil : $hasil </h1>";

    define('PHI', 3.14);

    function hitungLuasLingkaran($r){
        $luas = PHI * $r * $r;
        $kll = 2 * PHI * $r;
        echo "Luas : $luas, Keliling: $kll";
    }

    hitungLuasLingkaran(20);

    ?>
</body>
</html>