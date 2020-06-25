<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
        </form>

      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Sistem Pejualan</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">SIP</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Penjualan</li>

              <li><a class="nav-link" href="<?php echo site_url('c_admin/home')?>"><i class="far fa-square"></i> <span>Home</span></a></li>
              <li><a class="nav-link" href="<?php echo site_url('c_admin/tampil_barang')?>"><i class="far fa-square"></i> <span>Barang</span></a></li>
                <li><a class="nav-link" href="<?php echo site_url('c_admin/tampil_beli')?>"><i class="far fa-square"></i> <span>Pembelian</span></a></li>

            </ul>

            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
              <a href="<?php echo site_url('c_login/logout')?>" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Logout
              </a>
            </div>
        </aside>
      </div>
    </div>
  </div>