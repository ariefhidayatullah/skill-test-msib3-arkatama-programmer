<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Syndash - Bootstrap4 Admin Template</title>
    <!--favicon-->
    <link rel="icon" href="{{asset('assets')}}/assets/images/favicon-32x32.png" type="image/png" />
    <!-- Vector CSS -->
    <link href="{{asset('assets')}}/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!--plugins-->
    <link href="{{asset('assets')}}/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    {{-- <link href="{{asset('assets')}}/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" /> --}}
    <link href="{{asset('assets')}}/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <!-- loader-->
    <link href="{{asset('assets')}}/assets/css/pace.min.css" rel="stylesheet" />
    <script src="{{asset('assets')}}/assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/assets/css/bootstrap.min.css" />
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/assets/css/icons.css" />
    <!-- App CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/assets/css/app.css" />
    <link rel="stylesheet" href="{{asset('assets')}}/assets/css/dark-sidebar.css" />
    <link rel="stylesheet" href="{{asset('assets')}}/assets/css/dark-theme.css" />
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('template')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{asset('template')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{asset('template')}}/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    @stack('css')
</head>

<body>
    <!-- wrapper -->
    <div class="wrapper">
        <!--sidebar-wrapper-->
        <div class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div class="">
                    <img src="{{asset('assets')}}/assets/images/logo-icon.png" class="logo-icon-2" alt="" />
                </div>
                <div>
                    <h4 class="logo-text">Arkatama</h4>
                </div>
                <a href="javascript:;" class="toggle-btn ml-auto"> <i class="bx bx-menu"></i>
                </a>
            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">
                <li class="">
                    <a href="emailbox.html">
                        <div class="parent-icon icon-color-1"><i class="bx bx-home-alt"></i>
                        </div>
                        <div class="menu-title">Dashboard</div>
                    </a>
                </li>
            </ul>
            <!--end navigation-->
        </div>
        <!--end sidebar-wrapper-->
        <!--header-->
        <header class="top-header">
            <nav class="navbar navbar-expand">
                <div class="left-topbar d-flex align-items-center">
                    <a href="javascript:;" class="toggle-btn"> <i class="bx bx-menu"></i>
                    </a>
                </div>
                <div class="flex-grow-1 search-bar">
                    <div class="input-group">
                        <div class="input-group-prepend search-arrow-back">
                            <button class="btn btn-search-back" type="button"><i class="bx bx-arrow-back"></i>
                            </button>
                        </div>
                        <input type="text" class="form-control" placeholder="search" />
                        <div class="input-group-append">
                            <button class="btn btn-search" type="button"><i class="lni lni-search-alt"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="right-topbar ml-auto">
                    <ul class="navbar-nav">
                        <li class="nav-item search-btn-mobile">
                            <a class="nav-link position-relative" href="javascript:;"> <i
                                    class="bx bx-search vertical-align-middle"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown dropdown-user-profile">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"
                                data-toggle="dropdown">
                                <div class="media user-box align-items-center">
                                    <div class="media-body user-info">
                                        <p class="user-name mb-0"></p>
                                        <p class="designattion mb-0">Available</p>
                                    </div>
                                    <img src="https://via.placeholder.com/110x110" class="user-img" alt="user avatar">
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right"> <a class="dropdown-item"
                                    href="javascript:;"><i class="bx bx-user"></i><span>Profile</span></a>
                                <a class="dropdown-item" href="{{url('logout')}}"><i
                                        class="bx bx-cloud-download"></i><span>Logout</span></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>


        <div class="page-wrapper">
			<!--page-content-wrapper-->
			<div class="page-content-wrapper">
				<div class="page-content">
					<!--breadcrumb-->
					<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
						<div class="breadcrumb-title pr-3">Forms</div>
						<div class="pl-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">User</li>
								</ol>
							</nav>
						</div>
					</div>
					<!--end breadcrumb-->
					<div class="row">
						<div class="col-12 col-lg-6">
							<div class="card radius-15 border-lg-top-primary">
								<div class="card-body p-5">
									<div class="card-title d-flex align-items-center">
										<div><i class='bx bxs-user mr-1 font-24 text-primary'></i>
										</div>
										<h4 class="mb-0 text-primary">User</h4>
									</div>
									<hr/>
                                    <form action="{{url('user/store')}}" method="post">
                                    @csrf
									<div class="form-body">
										<div class="form-row">
											{{-- <div class="form-group col-md-6"> --}}
												<label>Nama</label>
												<input type="text" name="nama" class="form-control radius-30" />
											{{-- </div> --}}
										</div>
										<div class="form-group">
											<label>Umur</label>
											<input type="text" name="umur" class="form-control radius-30" />
										</div>
										<div class="form-group">
											<label>Kota</label>
											<input type="text" name="kota" class="form-control radius-30" />
										</div>
										<button type="submit" class="btn btn-primary px-5 radius-30">tambah</button>
									</div>
                                    </form>
                                    <form action="{{url('user/tambah')}}" method="post">
                                        @csrf
                                        <div class="form-body">
                                            <div class="form-row">
                                                {{-- <div class="form-group col-md-6"> --}}
                                                    <label>Nama</label>
                                                    <input type="text" name="nama" class="form-control radius-30" />
                                                {{-- </div> --}}
                                            </div>
                                            <button type="submit" class="btn btn-primary px-5 radius-30">tambah</button>
                                        </div>
                                        </form>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-6">
							<div class="card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <h4 class="mb-0">Data</h4>
                                    </div>
                                    <hr/>
                                    <div class="table-responsive">
                                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Umur</th>
                                                    <th>Kota</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                $i = 1;
                                              @endphp
                              
                                              @foreach($user as $users)
                                                <tr>
                                                    <td>{{$users->nama}}</td>
                                                    <td>{{$users->umur}}</td>
                                                    <td>{{$users->kota}}</td>
                                                    <td>
                                                        <form action="{{ url('user/destroy',$users->id) }}" method="get">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Delete</button>
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
			</div>
			<!--end page-content-wrapper-->
		</div>

        <div class="overlay toggle-btn-mobile"></div>
        <!--end overlay-->
        <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i
                class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        <!--footer -->
        <div class="footer">
            <p class="mb-0">Arkatama.id @2022 | Developed By : Arfhdytllh
            </p>
        </div>
        <!-- end footer -->
    </div>
    <!-- end wrapper -->
    <!--start switcher-->

    <!--end switcher-->
    <!-- JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('assets')}}/assets/js/jquery.min.js"></script>
    <script src="{{asset('assets')}}/assets/js/popper.min.js"></script>
    <script src="{{asset('assets')}}/assets/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="{{asset('template')}}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{asset('template')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{asset('template')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{asset('template')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <!--plugins-->
    <script src="{{asset('assets')}}/assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="{{asset('assets')}}/assets/plugins/metismenu/js/metisMenu.min.js"></script>
    {{-- <script src="{{asset('assets')}}/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script> --}}
    <!-- Vector map JavaScript -->
    <script src="{{asset('assets')}}/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="{{asset('assets')}}/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="{{asset('assets')}}/assets/plugins/vectormap/jquery-jvectormap-in-mill.js"></script>
    <script src="{{asset('assets')}}/assets/plugins/vectormap/jquery-jvectormap-us-aea-en.js"></script>
    <script src="{{asset('assets')}}/assets/plugins/vectormap/jquery-jvectormap-uk-mill-en.js"></script>
    <script src="{{asset('assets')}}/assets/plugins/vectormap/jquery-jvectormap-au-mill.js"></script>
    <!-- <script src="{{asset('assets')}}/assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script> -->
    <script src="{{asset('assets')}}/assets/js/index.js"></script>
    <!-- Jquery Validate -->
    <script src="{{asset('template')}}/plugins/jquery-validation/jquery.validate.js"></script>
    <script src="{{asset('template')}}/plugins/jquery-validation/localization/messages_id.js"></script>
    <!-- Toastr -->
    <script src="{{asset('template')}}/plugins/toastr/toastr.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="{{asset('template')}}/plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- App JS -->
    <script src="{{asset('assets')}}/assets/js/app.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script>
        feather.replace()
    </script>
    @stack('content-js')
</body>

</html>
