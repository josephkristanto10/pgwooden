<!doctype html>
<html lang="en">

<head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <link rel="shortcut icon" type="image/png" href="{{asset('login/assets/images/logos/favicon.png')}}" />
  <link rel="stylesheet" href="{{asset('login/assets/css/styles.min.css')}}" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
               
                </a>
                <img src="../assets/images/logos/dark-logo.svg" width="180" alt="">
                <img src = "{{asset('assets/logo/logo_pg_wooden.png')}}">
                {{-- <p class="text-center">PGD DATA CENTER</p> --}}
                <form id = "formlogin">
                  {{ csrf_token() }}
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input type="email" name = "username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name = "pwd" class="form-control" id="exampleInputPassword1">
                  </div>
                  {{-- <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="form-check">
                      <input class="form-check-input primary" type="checkbox" value="" id="flexCheckChecked" checked>
                      <label class="form-check-label text-dark" for="flexCheckChecked">
                        Remeber this Device
                      </label>
                    </div>
                    <a class="text-primary fw-bold" href="./index.html">Forgot Password ?</a>
                  </div> --}}
                  <button id = "signin" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Sign In</button>
                  {{-- <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-bold">New to Modernize?</p>
                    <a class="text-primary fw-bold ms-2" href="./authentication-register.html">Create an account</a>
                  </div> --}}
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="{{asset('assets/js/jquery.js')}}"></script>
  {{-- <script src="{{asset('login/assets/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script> --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
<script>
   $("#signin").click(function (e) { 
      e.preventDefault();
     
      var $this = $("#signin").button('loading');
      // $this.button('loading');

      var form = document.getElementById('formlogin');
      var formData = new FormData(form);
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
        $.ajax({
        type: "post",
        url: "{{route('login_check')}}",
        data: formData,
        processData: false,
        contentType: false,
        dataType: "json",
        success: function (response) {
          var $this = $("#signin").button('loading');
          if(response.status == "200"){
            $("#formlogin").trigger("reset");
          
            Swal.fire({
              title: "Success",
              text: "Welcome Super User",
              icon: "success",
              confirmButtonColor: "#3085d6",
              allowOutsideClick:false,
              confirmButtonText: "ok"
            }).then((result) => {
              window.location.href = "{{url('/dashboard_admin')}}";
            });
          }
          else{
            Swal.fire({
              title: "Error",
              text: "Wrong Combination password & username",
              icon: "error",
              confirmButtonColor: "#3085d6",
              confirmButtonText: "ok"
            }).then((result) => {
            
            });
          }
        }
      });
    });
    
</script>