<div class="navbar-dark navbar-expand-sm bg-dark">
    <div class="container">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="/mahasiswa" class="nav-link {{ request()->is('mahasiswa*') ? 'active' : ''}}">Data Mahasiswa</a>
            </li>
            <li class="navbar-item">
                <a href="/dosen" class="nav-link {{ request()->is('dosen*') ? 'active' : ''}}">Data Dosen</a>
            </li>
            <li class="nav-item">
                <a href="/gallery" class="nav-link {{ request()->is('gallery*') ? 'active' : ''}}">Gallery</a>
            </li>
        </ul>
    </div>
</div>