<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @php
        $username = "Rizky";
        $role = "Admin";
    @endphp

    @if ($role == "Admin")
        <h1>Selamat {{ $username }} datang {{ $role }}</h1>
    @else
        <h1>Selamat datang Kali ini role anda {{ $role }}</h1>
    @endif
    
</body>
</html>