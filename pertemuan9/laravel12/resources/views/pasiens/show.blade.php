<script src="https://cdn.tailwindcss.com"></script>
<h1 class="text-2xl font-bold mb-4">Show Pasien</h1>

<div class="space-y-2">
    <p><strong class="font-semibold">Kode:</strong> {{ $pasien->kode }}</p>
    <p><strong class="font-semibold">Nama:</strong> {{ $pasien->nama }}</p>
    <p><strong class="font-semibold">Tanggal Lahir:</strong> {{ $pasien->tgl_lahir }}</p>
    <p><strong class="font-semibold">Gender:</strong> {{ $pasien->gender == 'L' ? 'Laki-laki' : 'Perempuan' }}</p>
    <p><strong class="font-semibold">Alamat:</strong> {{ $pasien->alamat }}</p>
    <p><strong class="font-semibold">Email:</strong> {{ $pasien->email }}</p>
    <p><strong class="font-semibold">Kelurahan:</strong> {{ $kelurahan->nama }}</p>
</div>

<a href="{{ route('pasiens.index') }}" class="inline-block mt-4 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
    Kembali ke daftar pasien
</a>