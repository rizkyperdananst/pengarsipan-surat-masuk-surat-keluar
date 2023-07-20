<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login</title>
    <!-- Custom fonts for this template-->
    <link href="{{ url('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ url('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">

    <style>
        
    </style>

</head>

<body class=""  style="background: linear-gradient(#0818AA, #3C4CE0);">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center" style="margin-top: 100px">

            <div class="col-xl-8 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image text-center">
                                <img src="{{ url('assets/img/logo kantor camat.png') }}" width="200px" class="mt-4" alt="">
                                <h4 class="text-warning">Kecamatan <br> Medan Amplas</h4>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Login</h1>
                                    </div>
                                    @error('error')
                                        <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                    @enderror
                                    <form action="{{ route('authenticate') }}" method="POST" class="user">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror form-control-user" placeholder="Enter Email Address...">
                                            @error('email')
                                                <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror form-control-user" placeholder="Password">
                                            @error('password')
                                                <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <button class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                        <hr>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ url('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ url('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ url('assets/js/sb-admin-2.min.js') }}"></script>

</body>

</html>