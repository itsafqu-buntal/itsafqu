<aside id="sidebar-left" class="sidebar-left">

    <div class="sidebar-header">
        <div class="sidebar-title">
            Menu
        </div>
        <div class="sidebar-toggle d-none d-md-block" data-toggle-class="sidebar-left-collapsed"
            data-target="html" data-fire-event="sidebar-left-toggle">
            <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>

    <div class="nano">
        <div class="nano-content">
            <nav id="menu" class="nav-main" role="navigation">

                <ul class="nav nav-main">
                    <li class="">
                            @if (Auth::user()->roles == 'ADMIN')
                            <a class="nav-link" href="{{ route('dashboard') }}">
                            @elseif (Auth::user()->roles == 'USER')
                            <a class="nav-link" href="{{ route('dashboard-user') }}">
                            @endif
                            <i class="bx bx-home-alt" aria-hidden="true"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    {{-- ini punya admin --}}
                    @if (Auth::user()->roles == 'ADMIN')
                    <li class="nav-parent {{ Request::is('admin/produk-web') || Request::is('admin/produk-web/create') || Request::is('admin/produk-video') || Request::is('admin/produk-video/create') || Request::is('admin/produk-gambar') || Request::is('admin/produk-gambar/create') ? 'nav-expanded nav-active' : '' }}">
                        <a class="nav-link" href="#">
                            <i class="fas fa-laptop-house"></i>
                            <span>Produk</span>
                        </a>
                        <ul class="nav nav-children">
                            <li class="{{ Request::is('admin/produk-web') || Request::is('admin/produk-web/create') ? 'nav-active' : '' }}">
                                <a class="nav-link" href="{{ route('produk-web.index') }}">
                                    Produk-Web
                                </a>
                            </li>
                            <li class="{{ Request::is('admin/produk-gambar') || Request::is('admin/produk-gambar/create') ? 'nav-active' : '' }}">
                                <a class="nav-link" href="{{ route('produk-gambar.index') }}">
                                    Produk-Gambar
                                </a>
                            </li>
                            <li class="{{ Request::is('admin/produk-video') || Request::is('admin/produk-video/create') ? 'nav-active' : '' }}">
                                <a class="nav-link" href="{{ route('produk-video.index') }}">
                                    Produk-Video
                                </a>
                            </li>
                        </ul>
                    </li>
                    @endif
                    {{-- ini punya pelanggan --}}
                    @if (Auth::user()->roles == 'USER')
                    <li class="{{ Request::is('PesananUser') ? 'nav-active' : '' }}">
                        <a class="nav-link" href="/PesananUser">
                            <i class="bx bx-cart-alt" aria-hidden="true"></i>
                            <span>Pesanan Saya</span>
                        </a>
                    </li>
                    <li class="nav-parent {{ Request::is('ProdukPaket') || Request::is('ProdukSingle')? 'nav-expanded nav-active' : '' }}">
                        <a class="nav-link" href="#">
                            <i class="fas fa-laptop-house"></i>
                            <span>Our Product</span>
                        </a>
                        <ul class="nav nav-children">
                            <li class="{{ Request::is('ProdukPaket') ? 'nav-active' : '' }}">
                                <a class="nav-link" href="/ProdukPaket">
                                    Paket Undangan
                                </a>
                            </li>
                            <li class="{{ Request::is('ProdukSingle')? 'nav-active' : '' }}">
                                <a class="nav-link" href="/ProdukSingle">
                                    Single Item
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="{{ Request::is('Team')? 'nav-active' : '' }}">
                        <a class="nav-link" href="/Team">
                            <i class="bx bx-cart-alt" aria-hidden="true"></i>
                            <span>Our Team</span>
                        </a>
                    </li>
                    @endif
                </ul>
            </nav>
        </div>

        <script>
            // Maintain Scroll Position
            if (typeof localStorage !== 'undefined') {
                if (localStorage.getItem('sidebar-left-position') !== null) {
                    var initialPosition = localStorage.getItem('sidebar-left-position'),
                        sidebarLeft = document.querySelector('#sidebar-left .nano-content');

                    sidebarLeft.scrollTop = initialPosition;
                }
            }
        </script>

    </div>

</aside>