<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Siswa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="container mt-4">
    <h3>Tambah Siswa</h3>

    <form action="{{ route('siswa.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">NIS</label>
            <input type="text" name="nis" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>

        {{-- JENIS KELAMIN (RADIO) --}}
        <div class="mb-3">
            <label class="form-label d-block">Jenis Kelamin</label>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="jk_l" value="L" required>
                <label class="form-check-label" for="jk_l">
                    Laki-laki
                </label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="jk_p" value="P">
                <label class="form-check-label" for="jk_p">
                    Perempuan
                </label>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <textarea name="alamat" class="form-control" rows="3" required></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">No Telp</label>
            <input type="text" name="no_telp" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Kelas</label>
            <select name="id_kelas" class="form-select" required>
                <option value="">-- Pilih Kelas --</option>
                @foreach ($kelas as $k)
                    <option value="{{ $k->id }}">
                        {{ $k->nama_kelas }} - {{ $k->jurusan }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('siswa.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
