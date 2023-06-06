<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-5">
    <div class="container">
        <a class="bi bi-truck text-white"></a>
        <a class="navbar-brand" href="/"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link btn {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a>
                <a class="nav-link btn {{ request()->is('barang') ? 'active' : '' }}" href="{{ route('barang.index') }}">Barang</a>
                <a class="nav-link btn {{ request()->is('profile') ? 'active' : '' }}" href="{{ url('profile') }}">Profil</a>
            </div>
        </div>
    </div>
</nav>
