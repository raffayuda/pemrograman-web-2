<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelurahan</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script defer>
        function openModal(id) {
            document.getElementById(id).classList.remove('hidden');
        }
        function closeModal(id) {
            document.getElementById(id).classList.add('hidden');
        }
    </script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Data Kelurahan</h1>

        <!-- Tombol Tambah Data -->
        <div class="flex justify-end mb-4">
            <button onclick="openModal('addModal')" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                Tambah Data
            </button>
        </div>

        <!-- Tabel Data -->
        <table class="table-auto w-full bg-white shadow-md rounded-lg">
            <thead>
                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <th class="py-3 px-6 text-left">No</th>
                    <th class="py-3 px-6 text-left">Nama Kelurahan</th>
                    <th class="py-3 px-6 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
                @foreach ($kelurahan as $item)
                <tr class="border-b border-gray-200 hover:bg-gray-100">
                    <td class="py-3 px-6">{{ $loop->iteration }}</td>
                    <td class="py-3 px-6">{{ $item->nama }}</td>
                    <td class="py-3 px-6">
                        <!-- Tombol Edit -->
                        <button onclick="openModal('editModal-{{ $item->id }}')" class="text-yellow-500 hover:text-yellow-700 mr-2">Edit</button>

                        <!-- Form Hapus -->
                        <form action="{{ route('kelurahan.destroy', $item->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Yakin ingin hapus?')" class="text-red-500 hover:text-red-700">Hapus</button>
                        </form>
                    </td>
                </tr>

                <!-- Modal Edit -->
                <div id="editModal-{{ $item->id }}" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center z-50">
                    <div class="bg-white p-6 rounded shadow-md w-96">
                        <h2 class="text-xl font-bold mb-4">Edit Kelurahan</h2>
                        <form action="{{ route('kelurahan.update', $item->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="text" name="nama" value="{{ $item->nama }}" class="w-full px-4 py-2 mb-4 border rounded" required>
                            <div class="flex justify-end">
                                <button type="button" onclick="closeModal('editModal-{{ $item->id }}')" class="mr-2 px-4 py-2 bg-gray-500 text-white rounded">Batal</button>
                                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Modal Tambah -->
    <div id="addModal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center z-50">
        <div class="bg-white p-6 rounded shadow-md w-96">
            <h2 class="text-xl font-bold mb-4">Tambah Kelurahan</h2>
            <form action="{{ route('kelurahan.store') }}" method="POST">
                @csrf
                <input type="text" name="nama" placeholder="Nama Kelurahan" class="w-full px-4 py-2 mb-4 border rounded" required>
                <div class="flex justify-end">
                    <button type="button" onclick="closeModal('addModal')" class="mr-2 px-4 py-2 bg-gray-500 text-white rounded">Batal</button>
                    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
