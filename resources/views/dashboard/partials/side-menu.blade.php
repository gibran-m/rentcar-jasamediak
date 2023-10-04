<header class="main-nav">
    <div class="sidebar-user text-center"><img class="img-90 rounded-circle" src="/assets/images/dashboard/1.png" alt="">
      <div class="badge-bottom"><span class="badge badge-primary">New</span></div><a href="#">
        <h6 class="mt-3 f-14 f-w-600">{{$name }} ({{ $role }})</h6></a>
      <p class="mb-0 font-roboto">{{ $email }}</p>

    </div>
    <nav>
      <div class="main-navbar">
        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
        <div id="mainnav">           
          <ul class="nav-menu custom-scrollbar">
            <li class="back-btn">
              <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
            </li>
            <li class="dropdown"><a class="nav-link menu-title link-nav" href="/dashboard"><i data-feather="home"></i><span>Dashboard</span></a></li>

            <li class="sidebar-main-title">
              <div>
                <h6>MENU</h6>
              </div>
            </li>
            @foreach ($menus as $menu)

              @if($menu->has_child === 1)
                <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="folder"></i><span>{{ $menu->namamenu }}</span></a>
                  <ul class="nav-submenu menu-content">
                  @foreach ($submenus as $submenu)
                      <li><a href="{{ $submenu->routes }}">{{ $submenu->namamenu }}</a></li>
                  @endforeach
                  </ul>
                </li>
              @else
                <li class="dropdown"><a class="nav-link menu-title link-nav" href="{{ $menu->routes }}"><i data-feather="{{ $menu->icon }}"></i><span>{{ $menu->namamenu }}</span></a></li>
              @endif
            @endforeach


            {{-- <li class="dropdown"><a class="nav-link menu-title link-nav" href="level-user"><i data-feather="eye"></i><span>Level User</span></a></li>
            <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="folder"></i><span>Produk</span></a>
              <ul class="nav-submenu menu-content">
                <li><a href="/produk/kategori">Kategori</a></li>
                <li><a href="/produk/produk">Produk</a></li>
              </ul>
            </li>
            <li class="dropdown"><a class="nav-link menu-title link-nav" href="user-plus"><i data-feather="user-check"></i><span>User Monitoring</span></a></li>
            <li class="dropdown"><a class="nav-link menu-title link-nav" href="user-plus"><i data-feather="users"></i><span>Pengguna</span></a></li>
            <li class="dropdown"><a class="nav-link menu-title link-nav" href="user-plus"><i data-feather="activity"></i><span>Federasi</span></a></li>
            <li class="dropdown"><a class="nav-link menu-title link-nav" href="user-plus"><i data-feather="info"></i><span>Berita & Informasi</span></a></li>
            <li class="dropdown"><a class="nav-link menu-title link-nav" href="user-plus"><i data-feather="list"></i><span>Laporan Transaksi</span></a></li>
            <li class="dropdown"><a class="nav-link menu-title link-nav" href="user-plus"><i data-feather="book-open"></i><span>Mutasi Rekening</span></a></li>
            <li class="dropdown"><a class="nav-link menu-title link-nav" href="user-plus"><i data-feather="archive"></i><span>Rekap Saldo</span></a></li> --}}

 
          </ul>
        </div>
        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
      </div>
    </nav>
  </header>