<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

{{-- NAVBAR --}}
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="{{ route('dashboard') }}">SMKN 1 KAWALI</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('dashboard') }}">
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('kelas*') ? 'active' : '' }}"
                       href="{{ route('kelas.index') }}">
                        Data Kelas
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('siswa*') ? 'active' : '' }}"
                       href="{{ route('siswa.index') }}">
                        Data Siswa
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

{{-- CONTENT --}}
<div class="container">

    <h3>Dashboard</h3>

    <p class="text-center text-muted mb-4">
        Selamat datang di sistem SMKN 1 KAWALI
    </p>

    <div class="row justify-content-center">

        <div class="col-md-5 mb-4">
            <div class="card border-0 shadow rounded-4 h-100">
                <div class="card-body text-center p-4">
                    <h5 class="fw-bold text-primary mb-3">Data Kelas</h5>
                    <p class="text-muted mb-4">
                        Kelola data kelas dan jurusan sekolah
                    </p>
                    <a href="{{ route('kelas.index') }}" class="btn btn-primary">
                        Lihat Data Kelas
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-5 mb-4">
            <div class="card border-0 shadow rounded-4 h-100">
                <div class="card-body text-center p-4">
                    <h5 class="fw-bold text-primary mb-3">Data Siswa</h5>
                    <p class="text-muted mb-4">
                        Kelola data siswa dengan mudah
                    </p>
                    <a href="{{ route('siswa.index') }}" class="btn btn-primary">
                        Lihat Data Siswa
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
