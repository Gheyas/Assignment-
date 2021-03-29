<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Binary" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('back/images/ncg.ico')}}">
    <!-- Custom box css -->
    <link href="{{asset('back/libs/custombox/custombox.min.css')}}" rel="stylesheet">
    <!-- Dropzone css -->
    <link href="{{asset('back/dropzone/dropzone.css')}}" rel="stylesheet" type="text/css" />
    <!-- App css -->
    <link href="{{asset('back/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('back/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('back/css/app.min.css')}}" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Topbar Start -->
        <div class="navbar-custom">
            <!-- LOGO -->
            <div class="logo-box">
                <a href="{{route('home')}}" class="logo text-center">
                    <span class="logo-lg">
                        <img src="{{asset('back/images/logo.png')}}" alt="" width="140" style="margin-top: 20px;">
                        <!-- <span class="logo-lg-text-light">Xeria</span> -->
                    </span>
                    <span class="logo-sm">
                        <!-- <span class="logo-sm-text-dark">X</span> -->
                        <img src="{{asset('back/images/logo.png')}}" alt="" height="24">
                    </span>
                </a>
            </div>

            <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                <li>
                    <button class="button-menu-mobile disable-btn waves-effect">
                        <i class="fe-menu"></i>
                    </button>
                </li>
                <li>
                    <h4 class="page-title-main">@yield('heading')</h4>
                </li>

            </ul>
        </div>
        <!-- end Topbar -->

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left-side-menu">

            <div class="slimscroll-menu">

                <!-- User box -->
                <div class="user-box text-center">
                    <img src="{{asset('back/images/users/user-1.jpg')}}" alt="user-img" title="Mat Helme"
                        class="rounded-circle img-thumbnail avatar-lg">
                    <div class="dropdown">
                        <a href="#" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block"
                            data-toggle="dropdown">Admin</a>
                        <div class="dropdown-menu user-pro-dropdown">

                            <!-- item-->
                            <a href="{{route('admin.logout')}}" class="dropdown-item notify-item">
                                <i class="fe-log-out mr-1"></i>
                                <span>Logout</span>
                            </a>

                        </div>
                    </div>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="{{route('admin.logout')}}" class="text-custom">
                                <i class="mdi mdi-power" title="log out"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#custom-modal" data-animation="fadein" data-plugin="custommodal"
                                data-overlaycolor="#36404a">
                                <i class="mdi mdi-lock" title="Change Password"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <!--- Sidemenu -->
                <div id="sidebar-menu">

                    <ul class="metismenu" id="side-menu">

                        <li class="menu-title">Navigation</li>
                        <li>
                            <a href="javascript: void(0);">
                                <i class="mdi mdi-home"></i>
                                <span> HomePage </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level nav" aria-expanded="false">
                                <li>
                                    <a href="{{route('admin.slider.index')}}">Slider Text</a>
                                </li>
                                <li>
                                    <a href="{{route('admin.icon.index')}}">Who We Are</a>
                                </li>
                                <li>
                                    <a href="{{route('admin.logo.index')}}">Logos</a>
                                </li>
                                <li>
                                    <a href="{{route('admin.banner.index')}}">Banner</a>
                                </li>
                                <li>
                                    <a href="{{route('admin.counter.index')}}">Counters</a>
                                </li>
                                <li>
                                    <a href="{{route('admin.response.index')}}">Covid 19 Response</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);">
                                <i class="mdi mdi-information"></i>
                                <span> About </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level nav" aria-expanded="false">
                                <li>
                                    <a href="{{route('admin.info.index')}}">Info</a>
                                </li>
                                <li>
                                    <a href="{{route('admin.about.index')}}">About</a>
                                </li>
                                <li>
                                    <a href="{{route('admin.team.index')}}">Team Members</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);">
                                <i class="fas fa-boxes"></i>
                                <span> Products </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level nav" aria-expanded="false">
                                <li>
                                    <a href="{{route('admin.productCategory.index')}}">Categories</a>
                                </li>
                                <li>
                                    <a href="{{route('admin.product.index')}}">Products</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{route('admin.service.index')}}">
                                <i class="mdi mdi-hexagon-multiple"></i>
                                <span> Services </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin.business.index')}}">
                                <i class="fas fa-briefcase"></i>
                                <span> Business </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin.page.index')}}">
                                <i class="fas fa-book-open "></i>
                                <span> Pages </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin.pageBanner.index')}}">
                                <i class="fas fa-images"></i>
                                <span> Page Banners </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin.contact.index')}}">
                                <i class="fas fa-users"></i>
                                <span> Contacts </span>
                            </a>
                        </li>
                    </ul>

                </div>
                <!-- End Sidebar -->

                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">
                    @yield('content')
                </div> <!-- container -->

            </div> <!-- content -->

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            2020 &copy; Website by <a href="https://binary.af" target="_blank">Binary</a>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->
    @if(session('password') == 'changed')
    <!-- Modal -->
    <div class="modal show" id="changed" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Confirmation</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Password was changed Successfully</p>
                </div>
            </div>

        </div>
    </div>
    @endif
    <div id="custom-modal" class="modal-demo">
        <button type="button" class="close" onclick="Custombox.modal.close();">
            <span>&times;</span><span class="sr-only">Close</span>
        </button>
        <h4 class="custom-modal-title">Change Password</h4>
        <div class="custom-modal-text">
            <form action="{{route('admin.password.change')}}" method="post">
                @csrf
                <input required type="password" name="old" class="form-control mb-2" placeholder="Previous Password">
                <input required type="password" name="password" class="form-control mb-2" placeholder="New Password">
                <input required type="password" name="password_confirmation" class="form-control mb-2"
                    placeholder="Confirm Password">
                <input type="submit" class="btn btn-primary" value="Submit">
            </form>
        </div>
    </div>
    <!-- Vendor js -->
    <script src="{{asset('back/js/vendor.min.js')}}"></script>

    <!-- dropzone js -->
    <script src="{{asset('back/dropzone/dropzone.js')}}"></script>

    <!-- Modal-Effect -->
    <script src="{{asset('back/libs/custombox/custombox.min.js')}}"></script>

    <!-- Dashboard init js-->
    <script src="{{asset('back/js/pages/dashboard.init.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('back/js/app.min.js')}}"></script>

    <script src="https://cdn.tiny.cloud/1/mnutthw8cmqzoshv2ow3yr3jx5wxr2ix5t9237iecoirckm9/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#tiny'
        });

    </script>
    <script>
        tinymce.init({
            selector: '.tiny'
        });

    </script>
    <script type="text/javascript">
        $(window).on('load', function () {
            $('#changed').modal('show');
        });
    </script>
</body>

</html>
