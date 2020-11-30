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
                <h4 class="card-title text-center font-large-1 p">Register</h4>
              </div>
              <div class="card-block">
                <form action="{{ route('register-process') }}" method="POST">
                    @csrf
                    <div class="card-body">
                    <fieldset class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="USER NAME">

                        <input type="password" class="form-control mt-2" id="name" name="password" placeholder="PASSWORD">
                        <div class="d-flex justify-content-end mt-2">
                        {{-- <a href="{{ route('register') }}" class="btn btn-primary">Register</a> --}}
                        <button class="btn btn-primary">Register</button>
                        </div>
                    </fieldset>
                    </div>
                </form>
              </div>
            </div>
        </div>
    </body>
</html>