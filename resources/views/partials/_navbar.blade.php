<div class="bg-light position-sticky">
    <nav class="navbar navbar-expand-lg navbar-light container">
        <!-- Logo di kiri -->
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/img/logo.svg') }}" alt="Logo">
        </a>

        <!-- Menu di tengah -->
        <div class="collapse navbar-collapse mx-auto" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#homepage">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#benefit">Benefit</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#package">Paket</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#class">Kelas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Kontak Kami</a>
                </li>
            </ul>
        </div>

        <!-- Tombol di kanan -->
        <div class="ml-auto d-none d-lg-block">
            <button class="btn btn-primary">Ajukan Demo</button>
            <button class="btn btn-secondary">Masuk</button>
        </div>

        <!-- Toggler untuk mobile -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
</div>
