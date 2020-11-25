<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
      @include('layouts.link')
  </head>
  <body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-chartbg" data-col="2-columns">

    <!-- fixed-top-->
    @include('layouts.navbar')

    <!-- ////////////////////////////////////////////////////////////////////////////-->
    @include('layouts.sidebar')

    {{-- <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
        </div>
        <div class="content-body">
			<!-- Basic Tables start -->
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h4 class="card-title">Basic Tables</h4>
							<a class="heading-elements-toggle">
								<i class="la la-ellipsis-v font-medium-3"></i>
							</a>
							<div class="heading-elements">
								<ul class="list-inline mb-0">
									<li>
										<a data-action="collapse">
											<i class="ft-minus"></i>
										</a>
									</li>
									<li>
										<a data-action="reload">
											<i class="ft-rotate-cw"></i>
										</a>
									</li>
									<li>
										<a data-action="expand">
											<i class="ft-maximize"></i>
										</a>
									</li>
									<li>
										<a data-action="close">
											<i class="ft-x"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="card-content collapse show">
							<div class="card-body">
								<p class="card-text">Using the most basic table markup, here’s how <code>.table</code>-based tables look in Bootstrap. You can use any example of below table for your table and it can be use with any type of bootstrap tables. </p>
								<p><span class="text-bold-600">Example 1:</span> Table with outer spacing</p>
								<div class="table-responsive">
									<table class="table">
										<thead>
											<tr>
												<th>#</th>
												<th>First Name</th>
												<th>Last Name</th>
												<th>Username</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">1</th>
												<td>Mark</td>
												<td>Otto</td>
												<td>@mdo</td>
											</tr>
											<tr>
												<th scope="row">2</th>
												<td>Jacob</td>
												<td>Thornton</td>
												<td>@fat</td>
											</tr>
											<tr>
												<th scope="row">3</th>
												<td>Larry</td>
												<td>the Bird</td>
												<td>@twitter</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
    </div> --}}

    <div class="app-content content">
        <div class="content-wrapper">
          <div class="content-wrapper-before"></div>
          <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2">
              {{-- <h3 class="content-header-title">Agama</h3> --}}
            </div>
            {{-- <div class="content-header-right col-md-8 col-12">
              <div class="breadcrumbs-top float-md-right">
                <div class="breadcrumb-wrapper mr-1">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Tables</li>
                  </ol>
                </div>
              </div>
            </div> --}}
          </div>
          <div class="content-body">
              <!-- Basic Tables start -->
              <div class="row">
                  <div class="col-12">
                      <div class="card">
                          <div class="card-header">
                              <h4 class="card-title">Perseorangan</h4>
                              {{-- <a class="heading-elements-toggle">
                                  <i class="la la-ellipsis-v font-medium-3"></i>
                              </a> --}}
                              <a href="{{ route('perseorangan.create') }}" class="btn btn-primary btn-sm float-right">Tambah</a>
                              {{-- <div class="heading-elements">
                                  <ul class="list-inline mb-0">
                                      <li>
                                          <a data-action="collapse">
                                              <i class="ft-minus"></i>
                                          </a>
                                      </li>
                                      <li>
                                          <a data-action="reload">
                                              <i class="ft-rotate-cw"></i>
                                          </a>
                                      </li>
                                      <li>
                                          <a data-action="expand">
                                              <i class="ft-maximize"></i>
                                          </a>
                                      </li>
                                      <li>
                                          <a data-action="close">
                                              <i class="ft-x"></i>
                                          </a>
                                      </li>
                                  </ul>
                              </div> --}}
                          </div>
                          <div class="card-content collapse show">
                              <div class="card-body">
                                  <div class="table-responsive">
                                      <table class="table">
                                          <thead>
                                              <tr>
                                                  <th>No</th>
                                                  <th>Individual</th>
                                                  <th>Nik</th>
                                                  <th>Pekerjaan</th>
                                                  <th>Action</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                            @php $no = 1; @endphp
                                            @foreach ($individuals as $individual)
                                              <tr>
                                                    <th scope="row">{{ $no++ }}</th>
                                                    <td>{{ $individual->name }}</td>
                                                    <td>{{ $individual->nik }}</td>
                                                    <td>{{ $individual->profession->name }}</td>
                                                    <td>
                                                        <a class="btn btn-success btn-sm" href="{{ route('perseorangan.edit', $individual->id) }}">Details</a>
                                                        <form class="d-inline" action="{{ route('perseorangan.destroy', $individual->id) }}" method="POST">
                                                            @csrf @method('DELETE')
                                                            <button class="btn btn-warning btn-sm">Delete</button>
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