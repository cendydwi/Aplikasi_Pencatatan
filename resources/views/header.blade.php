<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>
      @if(Request::segment(1) == NULL)
        Dashboard
      @else
        {{ ucfirst(Request::segment(1)) }}
      @endif</title>

    <meta name="description" content="" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="/assets/css/demo.css" />
    <link rel="stylesheet" href="/assets/css/notification.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="/assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="/assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="/" class="app-brand-link">
              <span class="app-brand-text demo menu-text fw-bolder ms-2" style="text-transform: uppercase;">pencatatan</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            @if(Request::segment(1) == NULL)
            <li class="menu-item active">
              @else
              <li class="menu-item">
                @endif
              <a href="/" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>

            <!-- Barang -->
            @if(Request::segment(1) == 'barang')
            <li class="menu-item active">
              @else
              <li class="menu-item">
                @endif
              <a href="/barang" class="menu-link">
                <i class="menu-icon tf-icons bx bx-data"></i>
                <div data-i18n="Tables">Barang</div>
              </a>
            </li>

            <!-- Mutasi -->
            @if(Request::segment(1) == 'mutasi')
            <li class="menu-item active open">
              @else
              <li class="menu-item">
                @endif
              <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-table"></i>
                <div data-i18n="Tables">Mutasi</div>
              </a>
              <ul class="menu-sub">
                @if(Request::segment(2) == 'input_mutasi')
                <li class="menu-item active">
                  @else
                  <li class="menu-item">
                    @endif
                  <a href="/mutasi/input_mutasi" class="menu-link">
                    <div data-i18n="Input">Input Mutasi</div>
                  </a>
                </li>

                @if(Request::segment(2) == 'data')
                <li class="menu-item active">
                  @else
                  <li class="menu-item">
                    @endif
                  <a href="/mutasi/data" class="menu-link">
                    <div data-i18n="Data">Data Mutasi</div>
                  </a>
                </li>

                @if(Request::segment(2) == 'cari_mutasi')
                <li class="menu-item active">
                  @else
                  <li class="menu-item">
                    @endif
                  <a href="/mutasi/cari_mutasi" class="menu-link">
                    <div data-i18n="Cari">Cari Mutasi</div>
                  </a>
                </li>
              </ul>
            </li>

          </ul>
        </aside>
        <!-- / Menu -->
        <div class="message">

            @if(Session::has('message'))
              @if(session()->get('message') == '1')
                <div class='notification notification-success'>Berhasil</div>
              @else (session()->get('message') == '2')
                <div class='notification notification-danger'>Gagal</div>
              @endif
            @endif

		    </div>
