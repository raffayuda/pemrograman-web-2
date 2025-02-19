<?php 
    $buah = ["a" => "Apel", "m" => "Mangga", "s" => "Semangka", "n" => "Nanas"];

    echo '<ol>';
    sort($buah);
    echo '<hr/>';
    echo '<ol/>';
    foreach($buah as $key => $item){
        echo "<li> index: $key,  $item </li>";
    }
    echo "<ol>";
?>