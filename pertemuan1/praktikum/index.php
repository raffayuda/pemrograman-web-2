<?php 
$nama = 'Raffa Yuda Pratama';
$usia = 19;

function validAge($age) {
    if($age > 18) {
        echo "Anda Boleh Masuk Wahana";
}else{
    echo "Anda tidak boleh masuk wahana";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?= "Halo nama saya $nama usia saya $usia" ?>
    <br>
    <?php validAge(12) ?>
</body>
</html>