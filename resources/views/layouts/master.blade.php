<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>@yield('page_title')</title>

    <!-- Bootstrap core CSS-->
    <!--<link href="../../../public/template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
    {!!HTML::style('template/vendor/bootstrap/css/bootstrap.min.css')!!}
    <!-- Custom fonts for this template-->
    <!--<link href="../../../public/template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">-->
    {!!HTML::style('template/vendor/fontawesome-free/css/all.min.css')!!}
    <!-- Page level plugin CSS-->
    <!--<link href="../../../public/template/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">-->
    {!!HTML::style('template/vendor/datatables/dataTables.bootstrap4.css')!!}
    <!-- Custom styles for this template-->
    <!--<link href="../../../public/template/css/sb-admin.css" rel="stylesheet">-->
    {!!HTML::style('template/css/sb-admin.css')!!}
  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-light bg-ku2 static-top">
     
      <a class="navbar-brand mr-1" href="{{url('/dashboards')}}"><img src="{{ url('images/KU_Logo.png') }}" alt="logo" style="width:45px;"></a>

      <button class="btn btn-link btn-sm text-light order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <!-- <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2"> -->
          <div class="input-group-append">
            <!-- <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button> -->
          </div>
        </div>
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
       <!-- <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <span class="badge badge-danger">9+</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <span class="badge badge-danger">7</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>-->
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" >{{Auth::user()->name}}</a>
            <!-- <a class="dropdown-item" href="#">Activity Log</a> -->
            <!-- <div class="dropdown-divider"></div> -->
            <a class="dropdown-item" href="{{url('auth/logout')}}" >Logout</a><!--data-toggle="modal" data-target="#logoutModal"-->
          </div>
        </li>
      </ul> 

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav  bg-ku">
        <li class="nav-item ">
          <a class="nav-link" href="{{url('/dashboards')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>แผงควบคุม</span>
          </a>
        </li>
        <!--<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>หน้า</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Login Screens:</h6>
            <a class="dropdown-item" href="login.html">Login</a>
            <a class="dropdown-item" href="register.html">Register</a>
            <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Other Pages:</h6>
            <a class="dropdown-item" href="404.html">404 Page</a>
            <a class="dropdown-item" href="blank.html">Blank Page</a>
          </div>
        </li>--> 
        <li class="nav-item">
          <a class="nav-link" href="{{url('informations')}}">
            <i class="fa fa-id-card"></i>
            <span>รายชื่อทั้งหมด</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('informations/create')}}">
            <i class="fa fa-edit"></i>
            <span>เพิ่มข้อมูล</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/addadmin')}}">
            <i class="fa fa-user-circle"></i>
            <span>เพิ่มผู้ให้คำปรึกษา</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/addholidays')}}">
            <i class="fa fa-calendar"></i>
            <span>เพิ่มวันหยุด</span></a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href="{{url('/input/create')}}">
            <i class="fa fa-newspaper"></i>
            <span>ประกาศข่าวสาร</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/show')}}">
            <i class="fa fa-bell"></i>
            <span>ดูข่าวสารที่ประกาศไปแล้ว</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{url('/excel_export/xlsx')}}">
            <i class="fa fa-file" ></i>
            <span>นำออกข้อมูล</span></a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
         <!-- <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">แผงควบคุม</a>
            </li>
            <li class="breadcrumb-item active">ภาพรวม</li>
          </ol>-->

          <!-- Icon Cards-->
         <!-- <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-comments"></i>
                  </div>
                  <div class="mr-5">26 New Messages!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-list"></i>
                  </div>
                  <div class="mr-5">11 New Tasks!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-shopping-cart"></i>
                  </div>
                  <div class="mr-5">123 New Orders!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-life-ring"></i>
                  </div>
                  <div class="mr-5">13 New Tickets!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>-->

          <!-- Area Chart Example-->
          <div class="card mb-3">
            @yield('content')
          </div>

          <!-- DataTables Example -->
          
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        </div>
        </div>
        <!-- <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer> -->

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
    <!--<script src="../../../public/template/vendor/jquery/jquery.min.js"></script>
    <script src="../../../public/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>-->
    {!!HTML::script('template/vendor/jquery/jquery.min.js')!!}
    {!!HTML::script('template/vendor/bootstrap/js/bootstrap.bundle.min.js')!!}

    <!-- Core plugin JavaScript-->
    <!--<script src="../../../public/template/vendor/jquery-easing/jquery.easing.min.js"></script>-->
    {!!HTML::script('template/vendor/jquery-easing/jquery.easing.min.js')!!}

    <!-- Page level plugin JavaScript-->
   <!-- <script src="../../../public/template/vendor/chart.js/Chart.min.js"></script>
    <script src="../../../public/template/vendor/datatables/jquery.dataTables.js"></script>
    <script src="../../../public/template/vendor/datatables/dataTables.bootstrap4.js"></script>-->
    {!!HTML::script('template/vendor/chart.js/Chart.min.js')!!}
    {!!HTML::script('template/vendor/datatables/jquery.dataTables.js')!!}
    {!!HTML::script('template/vendor/datatables/dataTables.bootstrap4.js')!!}

    <!-- Custom scripts for all pages-->
    <!--<script src="../../../public/template/js/sb-admin.min.js"></script>-->
    {!!HTML::script('template/js/sb-admin.min.js')!!}

    <!-- Demo scripts for this page-->
    <!--<script src="../../../public/template/js/demo/datatables-demo.js"></script>
    <script src="../../../public/template/js/demo/chart-area-demo.js"></script>-->
    {!!HTML::script('template/js/demo/datatables-demo.js')!!}
    {!!HTML::script('template/js/demo/chart-area-demo.js')!!}
    
    
  
  </body>

</html>