<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Siswa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

@include('layouts.navbar') <!-- jika navbar di file terpisah -->

<div class="container mt-4">
    <div class="card-custom p-4">

        <h3 class="mb-3"><b>Data Siswa</b></h3>

        <a href="{{ route('siswa.create') }}" class="btn btn-primary mb-3">
            Tambah Siswa
        </a>

        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-primary text-center">
                    <tr>
                        <th width="50">No</th>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Jenis Kelamin</th>
                        <th>No. Telepon</th>
                        <th>Alamat</th>
                        <th width="150">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @forelse($data as $dt)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $dt->nis }}</td>
                        <td>{{ $dt->nama }}</td>

                        {{-- INI YANG DIPERBAIKI --}}
                        <td>
                            {{ $dt->kelas->nama_kelas ?? '-' }}
                        </td>

                        <td>{{ $dt->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
                        <td>{{ $dt->no_telp }}</td>
                        <td>{{ $dt->alamat }}</td>

                        <td class="td-aksi">
<a href="{{ route('siswa.edit', $dt->id) }}" class="btn btn-primary btn-sm">
                        Edit
                    </a>

                    <form action="{{ route('siswa.destroy', $dt->id) }}" 
                          method="POST" 
                          class="d-inline"
                          onsubmit="return confirm('Yakin mau hapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">
                            Hapus
                        </button>
                    </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="text-center text-muted">
                            Data siswa belum ada
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
