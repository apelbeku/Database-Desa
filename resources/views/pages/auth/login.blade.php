<html>
    <head>
        @include('layouts.link')
        <style>
          .padding {
           padding-top: 120px; 
          }
          .p {
              padding-top: 55px;
              /* padding-bottom: 10px; */
          }
        </style>
    </head>
    <body>
        <div class="content-body d-flex justify-content-center padding">
            <div class="card col-lg-4">
              <div class="card-header">
                <h4 class="card-title text-center font-large-1 p">Database Desa</h4>
              </div>
              <div class="card-block">
                <form action="{{ route('login-process') }}" method="POST">
                  @csrf
                  <div class="card-body">
                    <fieldset class="form-group">
                      {{-- <label for="Name">Nama</label> --}}
                      <input type="text" class="form-control" id="name" name="name" placeholder="USER NAME">
                      {{-- <label for="Name" class="pt-3">Nama</label> --}}
                      <input type="password" class="form-control mt-2" id="name" name="password" placeholder="PASSWORD">
                      <div class="d-flex justify-content-between mt-2">
                        <button class="btn btn-primary">Login</button>
                      </div>
                    </fieldset>
                  </div>
                </form>
              </div>
            </div>
        </div>
    </body>
</html>