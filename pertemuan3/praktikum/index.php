<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Belajar Function</h1>
    <?php 
    
        $nama= "Rizky";
        $umur = 19;
        $alamat = "Jl. Raya No. 1";
        $array = [
            "nama" => $nama,
            "umur" => $umur,
            "alamat" => $alamat
        ];
        
        echo "<pre>";
        print_r($array);
        echo "</pre>";
        foreach($array as $key => $value){
            echo "<p> $key : $value </p>";
        }

        /*
    Fungsi salam dengan parameter $nama
    */

        function salam($nama="Boday"){
            echo "Hello, selamat datang $nama";
        }
        
        salam("Rizky");
        echo "<br>";
        echo "<br>";
        salam();
    ?>
</body>
</html>