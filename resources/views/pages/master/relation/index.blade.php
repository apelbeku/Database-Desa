<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
      @include('layouts.link')
  </head>
  <body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-chartbg" data-col="2-columns">

    <!-- fixed-top-->
    @include('layouts.navbar')
    @include('layouts.sidebar')

    <div class="app-content content">
        <div class="content-wrapper">
          <div class="content-wrapper-before"></div>
          <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2">
            </div>
          </div>
          <div class="content-body">
              <!-- Basic Tables start -->
              <div class="row">
                  <div class="col-12">
                      <div class="card">
                          <div class="card-header d-flex justify-content-between">
                              <div class="">
                                  <h4 class="card-title">Hubungan Dalam Keluarga</h4>
                              </div>
                              <div class="w-25 pl-5">
                                  <a href="{{ route('hubungan.trashed') }}" class="btn btn-teal btn-sm">Trashed</a>
                                  <a href="{{ route('hubungan.create') }}" class="btn btn-primary btn-sm float-right">Tambah</a>
                              </div>
                          </div>
                          <div class="card-content collapse show">
                              <div class="card-body">
                                  <div class="table-responsive">
                                      <table class="table">
                                          <thead>
                                              <tr>
                                                  <th>No</th>
                                                  <th>Hubungan</th>
                                                  <th>Action</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                            @php $no = 1; @endphp
                                            @foreach ($relations as $relation)
                                              <tr>
                                                    <th scope="row">{{ $no++ }}</th>
                                                    <td>{{ $relation->name }}</td>
                                                    <td>
                                                        <a class="btn btn-warning btn-sm" href="{{ route('hubungan.edit', $relation->id) }}">Edit</a>
                                                        <form class="d-inline" action="{{ route('hubungan.destroy', $relation->id) }}" method="POST">
                                                            @csrf @method('DELETE')
                                                            <button class="btn btn-danger btn-sm">Delete</button>
                                                        </form>
                                                    </td>
                                              </tr>
                                            @endforeach
                                          </tbody>
                                      </table>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- Basic Tables end -->
            </div>
        </div>
    </div>
{{-- </div>
</div>
</div> --}}
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    @include('layouts.footer')
    @include('layouts.script')
  </body>
</html>