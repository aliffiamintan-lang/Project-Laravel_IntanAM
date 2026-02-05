<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Siswa</title>

    <!-- BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="container mt-4">
    <h3>Edit Siswa</h3>

    <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- NIS -->
        <div class="mb-3">
            <label class="form-label">NIS</label>
            <input type="number"
                   class="form-control"
                   name="nis"
                   value="{{ $siswa->nis }}"
                   required>
        </div>

        <!-- NAMA -->
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text"
                   class="form-control"
                   name="nama"
                   value="{{ $siswa->nama }}"
                   required>
        </div>

        <!-- JENIS KELAMIN (RADIO) -->
        <div class="mb-3">
            <label class="form-label d-block">Jenis Kelamin</label>

            <div class="form-check form-check-inline">
                <input class="form-check-input"
                       type="radio"
                       name="jenis_kelamin"
                       id="jk_l"
                       value="L"
                       {{ $siswa->jenis_kelamin == 'L' ? 'checked' : '' }}
                       required>
                <label class="form-check-label" for="jk_l">
                    Laki-laki
                </label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input"
                       type="radio"
                       name="jenis_kelamin"
                       id="jk_p"
                       value="P"
                       {{ $siswa->jenis_kelamin == 'P' ? 'checked' : '' }}>
                <label class="form-check-label" for="jk_p">
                    Perempuan
                </label>
            </div>
        </div>

        <!-- KELAS -->
        <div class="mb-3">
            <label class="form-label">Kelas</label>
            <select name="id_kelas" class="form-control" required>
                <option value="">-- Pilih Kelas --</option>
                @foreach($kelas as $k)
                    <option value="{{ $k->id }}"
                        {{ $siswa->id_kelas == $k->id ? 'selected' : '' }}>
                        {{ $k->nama_kelas }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- NO TELP -->
        <div class="mb-3">
            <label class="form-label">No Telepon</label>
            <input type="text"
                   class="form-control"
                   name="no_telp"
                   value="{{ $siswa->no_telp }}"
                   required>
        </div>

        <!-- ALAMAT -->
        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <textarea name="alamat"
                      class="form-control"
                      rows="3"
                      required>{{ $siswa->alamat }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('siswa.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<!-- BOOTSTRAP JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
