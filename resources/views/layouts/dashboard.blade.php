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
                          <h5 class="text-muted primary position-absolute p-1">Jumlah Warga</h5>
                          <div class="row d-flex justify-content-center my-4">
                            <div class="col text-center align-items-center">
                              <i class="la la-users text-primary" style="font-size:6em;"></i>
                            </div>
                            <div class="col text-center py-1">
                              <a href="{{ route('pengguna.index') }}" class="text-primary align-self-center" style="font-size:3em;">{{ $users }}</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <div class="card pull-up ecom-card-1 bg-white">
                          <div class="card-content ecom-card2 height-180">
                          <h5 class="text-muted success position-absolute p-1">Laki-Laki</h5>
                            <div class="row d-flex justify-content-center my-4">
                              <div class="col text-center align-items-center">
                                <i class="la la-male text-success" style="font-size:6em;"></i>
                              </div>
                            <div class="col text-center py-1">
                              <a href="{{ route('pengguna.index') }}" class="text-success align-self-center" style="font-size:3em;">{{ $male }}</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <div class="card pull-up ecom-card-1 bg-white">
                          <div class="card-content ecom-card2 height-180">
                                <h5 class="text-muted danger position-absolute p-1">Perempuan</h5>
                                <div class="row d-flex justify-content-center my-4">
                                    <div class="col text-center align-items-center">
                                        <i class="la la-female text-danger" style="font-size:6em;"></i>
                                    </div>
                                    <div class="col text-center py-1">
                                        <a href="{{ route('pengguna.index') }}" class="text-danger align-self-center" style="font-size:3em;">{{ $female }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Age -->
                    <div class="col-md-6 col-sm-6">
                      <div class="card">
                        <div class="card-header">
                          <h4 class="card-title">Umur</h4>
                          <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                          <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                <li><a data-action="close"><i class="ft-x"></i></a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="card-content collapse show">
                          <div class="card-body">
                            <div class="height-400">
                              <canvas id="simple-pie-chart-1"></canvas>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Religion -->
                    <div class="col-md-6 col-sm-6">
                      <div class="card">
                        <div class="card-header">
                          <h4 class="card-title">Agama</h4>
                          <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                          <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                <li><a data-action="close"><i class="ft-x"></i></a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="card-content collapse show">
                          <div class="card-body">
                            <div class="height-400">
                              <canvas id="simple-pie-chart"></canvas>
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
    <script src="/template/theme-assets/vendors/js/charts/chart.min.js" type="text/javascript"></script>
    <script>

        // Pie chart
        // ------------------------------
        $(window).on("load", function(){

        //Get the context of the Chart canvas element we want to select
        var ctx = $("#simple-pie-chart");

        // Chart Options
        var chartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            responsiveAnimationDuration:500,
        };

        // Chart Data
        var chartData = {
            labels: ["BUDDHA", "KHONGHUCU", "ISLAM", "PROTESTAN", "KATOLIK", 'HINDU'],
            datasets: [{
                label: "My First dataset",
                data: [
                        {{ App\Models\individual::whereHas('religion', function($query) {
                            $query->where('name', '=', 'BUDDHA');
                        })->count() }},
                        {{ App\Models\individual::whereHas('religion', function($query) {
                            $query->where('name', '=', 'KHONGHUCU');
                        })->count() }},
                        {{ App\Models\individual::whereHas('religion', function($query) {
                            $query->where('name', '=', 'ISLAM');
                        })->count() }},
                        {{ App\Models\individual::whereHas('religion', function($query) {
                            $query->where('name', '=', 'PROTESTAN');
                        })->count() }},
                        {{ App\Models\individual::whereHas('religion', function($query) {
                            $query->where('name', '=', 'KATOLIK');
                        })->count() }},
                        {{ App\Models\individual::whereHas('religion', function($query) {
                            $query->where('name', '=', 'HINDU');
                        })->count() }},
                    ],
                backgroundColor: ['#666EE8', '#28D094', '#FF4961','#1E9FF2', '#FF9149', '#AA9149'],
            }]
        };

        var config = {
            type: 'pie',

            // Chart Options
            options : chartOptions,

            data : chartData
        };

        // Create the chart
        var pieSimpleChart = new Chart(ctx, config);
        });






        // Pie chart
        // ------------------------------
        $(window).on("load", function(){

        //Get the context of the Chart canvas element we want to select
        var ctx = $("#simple-pie-chart-1");

        // Chart Options
        var chartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            responsiveAnimationDuration:500,
        };

        // Chart Data
        var chartData = {
            labels: ["BALITA: 0 - 5", "ANAK-ANAK: 6 - 11", "REMAJA: 12 - 25", "DEWASA: 26 - 45", "LANSIA: 46 - 65", "MANULA: 65 - seterusnya"],
            datasets: [{
                label: "My First dataset",
                data: [
                        {{ $individuals->whereBetween('age', [0, 5])->count() }},
                        {{ $individuals->whereBetween('age', [6,11])->count() }},
                        {{ $individuals->whereBetween('age', [12, 25])->count() }},
                        {{ $individuals->whereBetween('age', [26, 45])->count() }},
                        {{ $individuals->whereBetween('age', [46, 65])->count() }},
                        {{ $individuals->whereBetween('age', [65, 200])->count() }},
                    ],
                backgroundColor: ['#666EE8', '#28D094', '#FF4961','#1E9FF2', '#FF9149', '#AA9149'],
            }]
        };

        var config = {
            type: 'pie',

            // Chart Options
            options : chartOptions,

            data : chartData
        };

        // Create the chart
        var pieSimpleChart = new Chart(ctx, config);
        });
    </script>
  </body>
</html>
