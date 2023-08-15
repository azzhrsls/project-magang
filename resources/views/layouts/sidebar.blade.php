    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
        <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">
            <img src="./assets/img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold">SIGUD</span>
        </a>
        </div>
        <hr class="horizontal dark mt-0">
        <div>
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" href="{{ url('')}}">
                <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Dashboard</span>
            </a>
            </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ url('')}}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Profile</span>
                    </a>
                </li>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link collapsed" data-bs-target="#inventory-nav" data-bs-toggle="collapse" href="{{ url('')}}">
                            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="ni ni-cart text-warning text-sm opacity-10"></i>
                            </div>
                            <span class="nav-link-text ms-1">Inventory</span><i class="bi bi-chevron-down ms-auto"></i>
                        </a>
                        <ul id="inventory-nav" class="nav-item nav-content collapse" data-bs-parent="#sidebar-nav">
                            <li class="nav-item">
                                <a href="{{ url('') }}" class="nav-link ">
                                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                        <i class="ni ni-box-2 text-warning text-sm opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-1">Data Barang</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('') }}" class="nav-link ">
                                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                        <i class="ni ni-box-2 text-warning text-sm opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-1">Jenis Barang</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link collapsed" data-bs-target="#transaksi-nav" data-bs-toggle="collapse" href="{{ url('')}}">
                            <div class="icon icon-trolley icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
                            </div>
                            <span class="nav-link-text ms-1">Info Barang</span><i class="bi bi-chevron-down ms-auto"></i>
                        </a>
                        <ul id="transaksi-nav" class="nav-item nav-content collapse" data-bs-parent="#sidebar-nav">
                            <li class="nav-item">
                                <a href="{{ url('/brgmasuk') }}" class="nav-link ">
                                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                        <i class="ni ni-box-2 text-success text-sm opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-1">Barang Masuk</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('') }}" class="nav-link ">
                                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                        <i class="ni ni-box-2 text-success text-sm opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-1">Barang Keluar</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#pengguna" data-bs-toggle="collapse" href="{{ url('')}}">
                        <div class="icon icon-trolley icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-circle-08 text-success text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Pengguna</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="pengguna" class="navbar-nav nav-content collapse" data-bs-parent="#sidebar-nav">
                        <li class="nav-item">
                            <a href="{{ url('') }}" class="nav-link">
                                <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                    <i class="ni ni-circle-08 text-success text-sm opacity-10"></i>
                                </div>
                                <span class="nav-link-text ms-1">Admin</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('') }}" class="nav-link">
                                <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                    <i class="ni ni-circle-08 text-success text-sm opacity-10"></i>
                                </div>
                                <span class="nav-link-text ms-1">Petugas</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

                <li class="nav-item">
                <a class="nav-link " href="{{ url('')}}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-single-copy-04 text-danger text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Laporan</span>
                </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/lihatgudang')}}">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-cart text-primary text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Lihat Gudang</span>
                    </a>
                    </li>
        </div>
    </aside>
