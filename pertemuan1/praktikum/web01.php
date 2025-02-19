<?php 

    $datas = [
        [
            "nama" => "Raffa Yuda",
            "usia" => 19,
            "prodi" => "Teknik Informatika",
            "ipk" => 3.5
        ],
        [
            "nama" => "Boday",
            "usia" => 29,
            "prodi" => "Sistem Informasi",
            "ipk" => 3.4
        ],
        [
            "nama" => "Ayu",
            "usia" => 20,
            "prodi" => "Teknik Informatika",
            "ipk" => 3.9
        ],
    ]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Selamat Belajar PHP</h1>
    
    <?php 
        $nama = 'Raffa Yuda Pratama';
        $umur = 19;
        $prodi = "Teknik Informatika";
        $_ipk = 3.5;
    ?>
    <p>Nama : <?= $nama?></p>
    <p>Umur : <?= $umur?></p>
    <p>Prodi : <?= $prodi?></p>
    <p>IPK : <?= $_ipk?></p>


    <?php 
        foreach($datas as $data){
            $status = "";
            if($data["ipk"] >= 3.5) {
                $status = "lulus";
            }else{
                $status = "Tidak Lulus";
            }
            echo "
            <ul>
                <li>Nama : $data[nama] | Usia : $data[usia] | Prodi : $data[prodi] | Status: $status</li>
            </ul>
            ";
        }
    ?>
</body>
</html>