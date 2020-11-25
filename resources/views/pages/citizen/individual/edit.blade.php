<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
      @include('layouts.link')
	  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
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
            <div class="card">
                <form method="POST" action="{{ route('perseorangan.update', $individual->id) }}">
                    @csrf @method('PUT')
                    <div class="card-header">
                      <h4 class="card-title">Tambah</h4>
                    </div>
                    <div class="card-block">
                      <div class="card-body">
                        <fieldset class="form-group">
                          <div class="row">
                            <div class="col-6">
                            <label for="family_card">Nomor Kartu Kerluarga</label>
                            <select class="form-control font-medium-1 select2" name="family_card_id" id="family_card">
                              @foreach ($family_cards as $family)
                                <option value="{{ $family->id }}" {{ $family->id == $individual->family_card_id ? 'selected' : '' }}>{{ $family->number_kk }}</option>
                              @endforeach
                            </select>
                          </div>
                          <div class="col-6">
                            <label for="nik">Nomer Induk Keluarga</label>
                            <input type="number" name="nik" class="form-control" id="nik" value="{{ $individual->nik }}">
                          </div>
                        </div>
                                      
                        <label for="name">Nama</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{ $individual->name }}">

                        <label for="father" class="pt-1">Ayah</label>	
                        <input type="text" name="father" class="form-control" id="father" value="{{ $individual->father }}">
                        
                        <label for="mother" class="pt-1">Ibu</label>	
                        <input type="text" name="mother" class="form-control" id="mother" value="{{ $individual->mother }}">

                          <div class="row">
                            <div class="col-6">
                              <label for="religion" class="pt-1">Agama</label>
                              <select class="select2 form-control" name="Religion_id" id="religion">
                                  @foreach ($religions as $religion)
                                  <option value="{{ $religion->id }}" {{ $religion->id == $individual->religion_id ? 'selected' : '' }}>{{ $religion->name }}</option>
                                  @endforeach
                              </select>
                            </div>
                                          
                            <div class="col-6">
                              <label for="education"class="pt-1">Pendidikan</label>
                              <select class="select2 form-control" name="Education_id" id="education">
                                  @foreach ($educations as $education)
                                  <option value="{{ $education->id }}" {{ $education->id == $individual->education_id ? 'selected' : '' }}>{{ $education->name }}</option>
                                  @endforeach
                              </select>
                            </div>

                            <div class="col-6">
                              <label for="profession" class="pt-1">Pekerjaan</label>
                              <select class="select2 form-control" name="Profession_id" id="profession">
                                  @foreach ($professions as $profession)
                                  <option value="{{ $profession->id }}" {{ $profession->id == $individual->profession_id ? 'selected' : ''  }}>{{ $profession->name }}</option>
                                  @endforeach
                              </select>
                            </div>
              
                            <div class="col-6">
                              <label for="marital" class="pt-1">Status Pernikahan</label>
                              <select class="select2 form-control" name="Marital_id" id="marital">
                                  @foreach ($maritals as $marital)
                                  <option value="{{ $marital->id }}" {{ $marital->id == $individual->marital_id ? 'selected' : '' }}>{{ $marital->name }}</option>
                                  @endforeach
                              </select>
                            </div>
                                          
                            <div class="col-6">
                              <label for="relation" class="pt-1">Hubungan Dalam Keluarga</label>	
                              <select class="select2 form-control" name="Relation_id" id="relation">
                                  @foreach ($relations as $relation)
                                  <option value="{{ $relation->id }}" {{ $relation->id == $individual->relation_id ? 'selected' : '' }}>{{ $relation->name }}</option>
                                  @endforeach
                              </select>
                            </div>
              
                            <div class="col-6">
                              <label for="date_of_birth" class="pt-1">Tanggal lahir</label>	
                              <input type="date" name="date_of_birth" class="form-control" id="date_of_birth" value="{{ $individual->date_of_birth }}">
                            </div>

                            <div class="col-6">
                              <label class="pt-1">Kewarga Negaraan</label>
                              <div class="input-group px-1">
                                <div>
                                    <label for="wna">WNA</label>
                                    <input type="radio" name="citizenship" class="mx-1" id="wna" value="1" {{ $individual->citizenship == 1 ? 'checked' : '' }}>
                                </div>
                                <div>
                                    <label for="wni">WNI</label>
                                    <input type="radio" name="citizenship" class="mx-1" id="wni" value="0" {{ $individual->citizenship == 0 ? 'checked' : '' }}>
                                </div>
                              </div>
                            </div>

                            <div class="col-6">
                              <label class="pt-1">Jenis Kelamin</label>
                              <div class="input-group px-1">
                                <div>
                                    <label for="male">Laki-laki</label>
                                    <input type="radio" name="gender" class="mx-1" id="male" value="1" {{ $individual->gender == 1 ? 'checked' : '' }}>
                                </div>
                                <div>
                                    <label for="female">Perempuan</label>
                                    <input type="radio" name="gender" class="mx-1" id="female" value="0" {{ $individual->gender == 0 ? 'checked' : '' }}>
                                </div>
                              </div>
                            </div>
                          </div>
                        </fieldset>
                        <button class="btn btn-success btn-sm">Submit</button>
                      </div>
                    </div>
                </form>
            </div>  
          </div>
        </div>
    </div>
{{-- </div>
</div>
</div> --}}
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    @include('layouts.footer')
	@include('layouts.script')
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
	<script>
		$(document).ready(function() {
			$('.select2').select2();
		})
	</script>
  </body>
</html>