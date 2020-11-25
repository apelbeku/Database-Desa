<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="theme-assets/images/backgrounds/02.jpg">
    <div class="navbar-header">
      <ul class="nav navbar-nav flex-row">       
        <li class="nav-item mr-auto">
            <a class="navbar-brand" href="/">
                <h3 class="brand-text">Database Warga</h3>
            </a>
        </li>
        <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
      </ul>
    </div>
    <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class="nav-item">
            <a href="/"><i class="ft-home">
                </i>
                <span class="menu-title" data-i18n="">Dashboard</span>
            </a>
        </li>
        <li class="nav-item has-sub">
            <a href="charts.html">
                <i class="la la-server"></i>
                <span class="menu-title" data-i18n="">Master</span>
            </a>
            <ul class="menu-content">
                <li>
                    <a href="{{ route('agama.index') }}">Agama</a>
                </li>
                <li>
                    <a href="{{ route('pekerjaan.index') }}">Pekerjaan</a>
                </li>
                <li>
                    <a href="{{ route('pendidikan.index') }}">Pendidikan</a>
                </li>
                <li>
                    <a href="{{ route('pernikahan.index') }}">Status Pernikahan</a>
                </li>
                <li>
                    <a href="{{ route('hubungan.index') }}">Hubungan Dalam keluarga</a>
                </li>
            </ul>
        </li>
        <li class="nav-item has-sub">
            <a href="charts.html">
                <i class="la la-users"></i>
                <span class="menu-title" data-i18n="">Data Warga</span>
            </a>
            <ul class="menu-content">
                <li>
                    <a href="{{ route('perseorangan.index') }}">Perseorangan</a>
                </li>
                <li>
                    <a href="{{ route('kartukeluarga.index') }}">Kartu Keluarga</a>
                </li>
            </ul>
        </li>
        <li class=" nav-item">
            <a href="icons.html">
                <i class="la la-user"></i>
                <span class="menu-title" data-i18n="">Pengguna</span>
            </a>
        </li>   
      </ul>
    </div>
    <div class="navigation-background">
    </div>
  </div>