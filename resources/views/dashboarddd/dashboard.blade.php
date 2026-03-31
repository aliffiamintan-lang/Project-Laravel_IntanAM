@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="mb-2 text-center">Dashboard</h3>

    <p class="text-muted text-center">
        Selamat datang di sistem informasi SMKN 1 KAWALI
    </p>

    <div class="row mt-4">

        {{-- CARD DATA KELAS --}}
        <div class="col-md-6 mb-3">
            <div class="card shadow border-0 rounded-4 h-100">
                <div class="card-body text-center">
                    <h5 class="fw-bold text-primary">Data Kelas</h5>

                    <h2 class="fw-bold mt-3">
                        {{ $jumlahKelas }}
                    </h2>

                    <p class="text-muted mb-3">
                        Total kelas terdaftar
                    </p>

                    <a href="{{ route('kelas.index') }}" class="btn btn-primary">
                        Lihat Data Kelas
                    </a>
                </div>
            </div>
        </div>

        {{-- CARD DATA SISWA --}}
        <div class="col-md-6 mb-3">
            <div class="card shadow border-0 rounded-4 h-100">
                <div class="card-body text-center">
                    <h5 class="fw-bold text-primary">Data Siswa</h5>

                    <h2 class="fw-bold mt-3">
                        {{ $jumlahSiswa }}
                    </h2>

                    <p class="text-muted mb-3">
                        Total siswa terdaftar
                    </p>

                    <a href="{{ route('siswa.index') }}" class="btn btn-primary">
                        Lihat Data Siswa
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
