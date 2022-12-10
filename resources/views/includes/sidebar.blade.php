<!-- Sidebar -->
<div class="sidebar sidebar-style-2">			
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            <span class="user-level">{{Auth::user()->name}}</span>
                        </span>
                    </a>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item">
                    <a href="{{route('kategori.index')}}">
                        <i class="fas fa-desktop"></i>
                        <p>Kategori</p>
                        <span class="badge badge-success"></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('artikel.index')}}">
                        <i class="fas fa-home"></i>
                        <p>Artikel</p>
                        <span class="badge badge-success"></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('galeri.index')}}">
                        <i class="fas fa-desktop"></i>
                        <p>Galeri</p>
                        <span class="badge badge-success"></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/aspirasi-data">
                        <i class="fas fa-desktop"></i>
                        <p>Aspirasi</p>
                        <span class="badge badge-success"></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->