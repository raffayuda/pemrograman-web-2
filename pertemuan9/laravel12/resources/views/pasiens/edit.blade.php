<script src="https://cdn.tailwindcss.com"></script>

<div class="min-h-screen bg-gray-100 flex items-center justify-center">
    <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-lg">
        <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">Edit Data Pasien</h1>
        <form action="{{ route('pasiens.update', $pasien->id) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <div class="flex flex-col">
                <label for="kode" class="mb-2 text-sm font-medium text-gray-700">Kode</label>
                <input type="text" name="kode" id="kode" class="border border-gray-300 rounded-lg p-3 focus:ring focus:ring-blue-300 focus:outline-none" value="{{ old('kode', $pasien->kode) }}" required>
            </div>

            <div class="flex flex-col">
                <label for="nama" class="mb-2 text-sm font-medium text-gray-700">Nama</label>
                <input type="text" name="nama" id="nama" class="border border-gray-300 rounded-lg p-3 focus:ring focus:ring-blue-300 focus:outline-none" value="{{ old('nama', $pasien->nama) }}" required>
            </div>

            <div class="flex flex-col">
                <label for="tgl_lahir" class="mb-2 text-sm font-medium text-gray-700">Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" id="tgl_lahir" class="border border-gray-300 rounded-lg p-3 focus:ring focus:ring-blue-300 focus:outline-none" value="{{ old('tgl_lahir', $pasien->tgl_lahir) }}" required>
            </div>

            <div class="flex flex-col">
                <label for="gender" class="mb-2 text-sm font-medium text-gray-700">Gender</label>
                <select name="gender" id="gender" class="border border-gray-300 rounded-lg p-3 focus:ring focus:ring-blue-300 focus:outline-none" required>
                    <option value="L" {{ old('gender', $pasien->gender) == 'L' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="P" {{ old('gender', $pasien->gender) == 'P' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </div>

            <div class="flex flex-col">
                <label for="alamat" class="mb-2 text-sm font-medium text-gray-700">Alamat</label>
                <input type="text" name="alamat" id="alamat" class="border border-gray-300 rounded-lg p-3 focus:ring focus:ring-blue-300 focus:outline-none" value="{{ old('alamat', $pasien->alamat) }}" required>
            </div>

            <div class="flex flex-col">
                <label for="email" class="mb-2 text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" class="border border-gray-300 rounded-lg p-3 focus:ring focus:ring-blue-300 focus:outline-none" value="{{ old('email', $pasien->email) }}" required>
            </div>

            <div class="flex flex-col">
                <label for="kelurahan_id" class="mb-2 text-sm font-medium text-gray-700">Kelurahan</label>
                <select name="kelurahan_id" id="kelurahan_id" class="border border-gray-300 rounded-lg p-3 focus:ring focus:ring-blue-300 focus:outline-none" required>
                    @foreach($kelurahans as $kelurahan)
                        <option value="{{ $kelurahan->id }}" {{ old('kelurahan_id', $pasien->kelurahan_id) == $kelurahan->id ? 'selected' : '' }}>
                            {{ $kelurahan->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="w-full bg-blue-500 text-white py-3 px-4 rounded-lg hover:bg-blue-600 focus:ring focus:ring-blue-300 focus:outline-none">Update Pasien</button>
        </form>
    </div>
</div>
