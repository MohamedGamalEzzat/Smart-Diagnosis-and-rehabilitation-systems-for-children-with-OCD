<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ocd Admin 2 - user</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('style admen/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('style admen/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <link href="{{asset('style admen/css/moodimage.css')}}" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <div id="myElement">
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                    <div class="col-auto">
                        <i class="fas fa-user-shield fa-2x text-white"></i>
                    </div>

                    <div class="sidebar-brand-text mx-3">ocd Admin <sup></sup></div>
                </a>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('home admen')}}">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>صفحه نسبه التفاعل </span></a>
                </li>

                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('user')}}">
                        <i class="fas fa-user"></i>
                        <span>الاشخاص</span></a>
                </li>


                <li class="nav-item active">
                    <a class="nav-link" href="{{url('moodimage')}}">
                        <i class="far fa-image"></i>
                        <span>رفع صور موود</span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="{{url('moodcontrol')}}">
                        <i class="far fa-image"></i>
                        <span>  التحكم في موود</span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="{{url('user')}}">
                        <i class="fas fa-gamepad"></i>
                        <span>الالعاب</span></a>
                </li>


                <li class="nav-item active">
                    <a class="nav-link" href="{{url('video')}}">
                    <i class="fas fa-play-circle"></i>
                        <span>الفيديو</span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="{{url('videoidet')}}">
                    <i class="fas fa-play-circle"></i>
                        <span>تحكم في الفديو</span></a>
                </li>


                <li class="nav-item active">
                    <a class="nav-link" href="{{url('user')}}">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>تسجيل الخروج</span></a>
                </li>
            </ul>

        </div>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">محمد الدسوقي</span>
                                <div class="col-auto">
                                    <i class="fas fa-user-shield fa-2x text-primary"></i>
                                </div>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">رفع صور المود </h1>

                    </div>

 <!-- Content Row -->



        <div class="card shadow mb-4">

            <div class="container-fluid">

                <!-- Page Heading -->
                {{-- <h1 class="h3 mb-2 text-gray-800">ج/h1> --}}


                <!-- DataTales Example -->
                <div class="card shadow mb-4">



                    <div class="card-body">
                        <div class="table-responsive">

                            @if(session('success') || session('error'))
                            <div class="alert alert-{{ session('success') ? 'success' : 'error' }}">
                                {{ session('success') ?? session('error') }}
                            </div>

                            <!-- تحديث الصفحة بعد 5 ثوانٍ -->
                            <script>
                                setTimeout(function() {
                                    location.reload();
                                }, 3000);
                            </script>
                             @endif

                            <form  action="{{ route('modstore') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <label for="mood">اسم المود:</label>
                                <input type="text" id="name" name="mood" required>

                                <label for="photo">صورة المود:</label>
                                <input type="file" id="image" name="photo" accept="photo/*" required>

                                <label for="description">وصف المود:</label>
                                <textarea id="description" name="description" rows="4" required></textarea>

                                <button type="submit">إرسال</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>







<!-- Content Row -->
                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->

                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                            <!-- Project Card Example -->


                            <!-- Color System -->


                        </div>


                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('/style admen/vendor/jquery.min.js')}}"></script>
    <script src="{{asset('/style admen/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('/style admen/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('/style admen/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('/style admen/vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('/style admen/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('/style admen/js/demo/chart-pie-demo.js')}}"></script>



</body>

</html>
