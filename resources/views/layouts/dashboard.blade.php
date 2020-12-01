<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
      @include('layouts.link')
      <style>
      </style>
  </head>
  <body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-chartbg" data-col="2-columns">

    <!-- fixed-top-->
    @include('layouts.navbar')

    <!-- ////////////////////////////////////////////////////////////////////////////-->
    @include('layouts.sidebar')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-header row"></div>
            <div class="content-body">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <div class="card pull-up ecom-card-1 bg-white">
                            <div class="card-content ecom-card2 height-180">
                                <h5 class="text-muted danger position-absolute p-1">Pengguna</h5>
                                <div class="row pt-3">
                                    <div class="col text-center">
                                        <i class="la la-user-secret text-danger" style="font-size:9em;"></i>
                                    </div>
                                    <div class="col align-items-center text-center">
                                        <a href="{{ route('pengguna.index') }}" class="text-danger align-self-center" style="font-size:7em;">{{ $users }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <div class="card pull-up ecom-card-1 bg-white">
                            <div class="card-content ecom-card2 height-180">
                                <h5 class="text-muted dark  position-absolute p-1">Perkerjaan</h5>
                                <div class="row pt-3">
                                    <div class="col text-center">
                                        <i class="la la-question text-dark" style="font-size:9em;"></i>
                                    </div>
                                    <div class="col align-items-center text-center">
                                        <a href="{{ route('pekerjaan.index') }}" class="text-dark align-self-center" style="font-size:7em;">{{ $professions->individual_count }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <div class="card pull-up ecom-card-1 bg-white">
                            <div class="card-content ecom-card2 height-180">
                                <h5 class="text-muted warning  position-absolute p-1">Pendidikan</h5>
                                <div class="row pt-3">
                                    <div class="col text-center">
                                        <i class="la la-home text-warning" style="font-size:9em;"></i>
                                    </div>
                                    <div class="col align-items-center text-center">
                                        <a href="{{ route('pendidikan.index') }}" class="text-warning align-self-center" style="font-size:7em;">{{ $educations->individual_count }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <div class="card pull-up ecom-card-1 bg-white">
                            <div class="card-content ecom-card2 height-180">
                                <h5 class="text-muted success  position-absolute p-1">Kartu Keluarga</h5>
                                <div class="row pt-3">
                                    <div class="col text-center">
                                        <i class="la la-users text-success" style="font-size:9em;"></i>
                                    </div>
                                    <div class="col align-items-center text-center">
                                        <a href="{{ route('kartukeluarga.index') }}" class="text-success align-self-center" style="font-size:7em;">{{ $family_cards }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- </div> --}}
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
      <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">2018  &copy; Copyright <a class="text-bold-800 grey darken-2" href="https://themeselection.com" target="_blank">ThemeSelection</a></span>
        <ul class="list-inline float-md-right d-block d-md-inline-blockd-none d-lg-block mb-0">
          <li class="list-inline-item"><a class="my-1" href="https://themeselection.com/" target="_blank"> More themes</a></li>
          <li class="list-inline-item"><a class="my-1" href="https://themeselection.com/support" target="_blank"> Support</a></li>
          <li class="list-inline-item"><a class="my-1" href="https://themeselection.com/products/chameleon-admin-modern-bootstrap-webapp-dashboard-html-template-ui-kit/" target="_blank"> Purchase</a></li>
        </ul>
      </div>
    </footer>
    @include('layouts.script')
  </body>
</html>