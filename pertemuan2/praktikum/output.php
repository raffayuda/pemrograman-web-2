<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container bg-info rounded text-white p-2 mt-5">
        <h1>Data yang dikirim</h1>
        
        <?php 
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                // Ambil data dari post
                $name = isset($_POST['name']) ? $_POST['name'] : '';
                $email = isset($_POST['email']) ? $_POST['email'] : '';
                $message = isset($_POST['message']) ? $_POST['message'] : '';

                $datauser = array(
                    'name' => $name,
                    'email' => $email,
                    'message' => $message
                );
                echo "<h4>Data yang dikirim melalui POST : </h4>";
                echo "<ul>";
                $no = 0;
                foreach($datauser as $key => $value){
                    $no++;
                    echo "<li class='list-group-item'>$no. " . ucfirst($key) . " : " . htmlspecialchars($value) . "</li>";
                }
                echo "</ul>";
            }else{
                echo "<h1>Data Kosong</h1>";
            }
        ?>
    

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>