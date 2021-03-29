<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Log in to Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('back/images/ncg.ico')}}">

    <!-- App css -->
    <link href="{{asset('back/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('back/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('back/css/app.min.css')}}" rel="stylesheet" type="text/css" />

</head>


<body class="authentication-bg">

<div class="account-pages mt-5 mb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="text-center">
                    <a href="{{route('home')}}">
                        <span><img src="{{asset('back/images/logo.png')}}" height="50"></span>
                    </a>
                    <p class="text-muted mt-2 mb-4">Admin Login</p>
                </div>
                <div class="card">

                    <div class="card-body p-4">

                        <div class="text-center mb-4">
                            <h4 class="text-uppercase mt-0">Sign In</h4>
                        </div>

                        <form action="{{route('admin.login.submit')}}" method="post">
                        @csrf
                            <div class="form-group mb-3">
                                <label for="emailaddress">Username</label>
                                <input class="form-control" name="username" type="text" id="username" required="" placeholder="Enter your username">
                            </div>

                            <div class="form-group mb-3">
                                <label for="password">Password</label>
                                <input name="password" class="form-control" type="password" required="" id="password" placeholder="Enter your password">
                            </div>


                            <div class="form-group mb-0 text-center">
                                <button class="btn btn-primary btn-block" type="submit"> Log In </button>
                            </div>

                        </form>

                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->

            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end page -->


<!-- Vendor js -->
<script src="assets/js/vendor.min.js"></script>

<!-- App js -->
<script src="assets/js/app.min.js"></script>

</body>

</html>
