<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Kelas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

@include('layouts.navbar')

<div class="container mt-4">
    <h3 class="mb-3">Data Kelas</h3>

    {{-- ALERT SUCCESS --}}
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    {{-- ALERT ERROR --}}
    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <a href="{{ route('kelas.create') }}" class="btn btn-primary mb-3">
        + Tambah Kelas
    </a>

    <table class="table table-bordered align-middle">
        <thead class="table-primary text-center">
            <tr>
                <th width="50">No</th>
                <th>Nama Kelas</th>
                <th>Jurusan</th>
                <th width="180">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($data as $index => $dt)
                <tr>
                    <td class="text-center">{{ $index + 1 }}</td>
                    <td>{{ $dt->nama_kelas }}</td>
                    <td>{{ $dt->jurusan }}</td>
                    <td class="text-center">
                        <div class="d-flex justify-content-center gap-2">
                            <a href="{{ route('kelas.edit', $dt->id) }}" class="btn btn-info btn-sm">
                                Edit
                            </a>

                            <form action="{{ route('kelas.destroy', $dt->id) }}"
                                  method="POST"
                                  onsubmit="return confirm('Yakin mau hapus kelas ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center text-muted">
                        Data kelas belum tersedia
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
