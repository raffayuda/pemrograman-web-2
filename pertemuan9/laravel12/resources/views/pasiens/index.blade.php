<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasien List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">List of Pasiens</h1>
        <a href="{{ route('pasiens.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Add New Pasien</a>
        <div class="overflow-x-auto mt-4">
            <table class="min-w-full bg-white border border-gray-200 rounded-lg">
                <thead>
                    <tr class="bg-gray-200 text-gray-700">
                        <th class="px-4 py-2 border">Kode</th>
                        <th class="px-4 py-2 border">Nama</th>
                        <th class="px-4 py-2 border">Tanggal Lahir</th>
                        <th class="px-4 py-2 border">Gender</th>
                        <th class="px-4 py-2 border">Alamat</th>
                        <th class="px-4 py-2 border">Email</th>
                        <th class="px-4 py-2 border">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pasiens as $pasien)
                        <tr class="text-gray-700">
                            <td class="px-4 py-2 border">{{ $pasien->kode }}</td>
                            <td class="px-4 py-2 border">{{ $pasien->nama }}</td>
                            <td class="px-4 py-2 border">{{ $pasien->tgl_lahir }}</td>
                            <td class="px-4 py-2 border">{{ $pasien->gender }}</td>
                            <td class="px-4 py-2 border">{{ $pasien->alamat }}</td>
                            <td class="px-4 py-2 border">{{ $pasien->email }}</td>
                            <td class="px-4 py-2 border">
                                <a href="{{ route('pasiens.show', $pasien->id) }}" class="bg-blue-500 text-white px-2 py-1 rounded hover:bg-blue-600">View</a>
                                <a href="{{ route('pasiens.edit', $pasien->id) }}" class="bg-yellow-500 text-white px-2 py-1 rounded hover:bg-yellow-600">Edit</a>
                                <form action="{{ route('pasiens.destroy', $pasien->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>