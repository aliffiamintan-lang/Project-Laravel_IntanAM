<nav class="navbar navbar-expand-lg">
    <div class="container">
        <!-- Brand -->
        <a class="navbar-brand" href="{{ route('dashboard') }}">
            MySchool
        </a>

        <!-- Toggle Mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon" style="filter: invert(100%)"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">

                <!-- DASHBOARD -->
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}"
                       href="{{ route('dashboard') }}">
                        Dashboard
                    </a>
                </li>

                <!-- DATA KELAS -->
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('kelas*') ? 'active' : '' }}"
                       href="{{ route('kelas.index') }}">
                        Data Kelas
                    </a>
                </li>

                <!-- DATA SISWA -->
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
