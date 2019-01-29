<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>เพิ่มข้อมูล</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>

    <!--<script type="text/javascript" src="js/jquery-1.4.4.min.js"></script>
    <link type="text/css" href="css/ui-lightness/jquery-ui-1.8.10.custom.css" rel="stylesheet" />
    <script src="js/jquery-ui-1.8.10.offset.datepicker.min.js"></script>-->

    <script type="text/javascript">
        $(function () {
          var d = new Date();
          var toDay = d.getDate() + '/' + (d.getMonth() + 1) + '/' + (d.getFullYear() + 543);


          // กรณีต้องการใส่ปฏิทินลงไปมากกว่า 1 อันต่อหน้า ก็ให้มาเพิ่ม Code ที่บรรทัดด้านล่างด้วยครับ (1 ชุด = 1 ปฏิทิน)

          $("#datepicker-th").datepicker({ dateFormat: 'dd/mm/yy', isBuddhist: true, defaultDate: toDay, dayNames: ['อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์'],
            dayNamesMin: ['อา.','จ.','อ.','พ.','พฤ.','ศ.','ส.'],
            monthNames: ['มกราคม','กุมภาพันธ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฎาคม','สิงหาคม','กันยายน','ตุลาคม','พฤศจิกายน','ธันวาคม'],
            monthNamesShort: ['ม.ค.','ก.พ.','มี.ค.','เม.ย.','พ.ค.','มิ.ย.','ก.ค.','ส.ค.','ก.ย.','ต.ค.','พ.ย.','ธ.ค.']});

          $("#datepicker-th-2").datepicker({ changeMonth: true, changeYear: true,dateFormat: 'dd/mm/yy', isBuddhist: true, defaultDate: toDay,dayNames: ['อาทิตย์','จันทร์','อังคาร','พุธ','พฤหัสบดี','ศุกร์','เสาร์'],
            dayNamesMin: ['อา.','จ.','อ.','พ.','พฤ.','ศ.','ส.'],
            monthNames: ['มกราคม','กุมภาพันธ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฎาคม','สิงหาคม','กันยายน','ตุลาคม','พฤศจิกายน','ธันวาคม'],
            monthNamesShort: ['ม.ค.','ก.พ.','มี.ค.','เม.ย.','พ.ค.','มิ.ย.','ก.ค.','ส.ค.','ก.ย.','ต.ค.','พ.ย.','ธ.ค.']});

               $("#datepicker-en").datepicker({ dateFormat: 'dd/mm/yy'});

          $("#inline").datepicker({ dateFormat: 'dd/mm/yy', inline: true });


          });
      </script>
      <style type="text/css">

          .demoHeaders { margin-top: 2em; }
          #dialog_link {padding: .4em 1em .4em 20px;text-decoration: none;position: relative;}
          #dialog_link span.ui-icon {margin: 0 5px 0 0;position: absolute;left: .2em;top: 50%;margin-top: -8px;}
          ul#icons {margin: 0; padding: 0;}
          ul#icons li {margin: 2px; position: relative; padding: 4px 0; cursor: pointer; float: left;  list-style: none;}
          ul#icons span.ui-icon {float: left; margin: 0 4px;}
          ul.test {list-style:none; line-height:30px;}
      </style>

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-light bg-ku2 static-top">
     
      <a class="navbar-brand mr-1" href="index.php"><img src="KU_Logo.png" alt="logo" style="width:45px;"></a>

      <button class="btn btn-link btn-sm text-light order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
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
            <span class="badge badge-danger">1</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">Settings</a>
            <a class="dropdown-item" href="#">Activity Log</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav  bg-ku">
        <li class="nav-item ">
          <a class="nav-link" href="index.php">
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
          <a class="nav-link" href="AddInfo.php">
            <i class="fa fa-edit"></i>
            <span>เพิ่มข้อมูล</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="calendar.php">
            <i class="fa fa-calendar"></i>
            <span>ปฏิทิน</span></a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Area Chart Example-->
          <div class="card mb-3">
                <div class="card-header">
                    <div>
                        <h1 class="text-center breadcrumb">ข้อมูลผู้รับคำปรึกษา</h1><br>
                    </div>
                               
                                
                    
                    <form>
                        <div class="row">
                            <div class="col">
                                    <label>คำนำหน้าชื่อ:</label>
                            </div>
                            <div class="col">
                                    <label class="radio inline" for="gender-0">
                                            <input name="gender" id="gender-0" value="Male" checked="checked" type="radio">
                                            นาย
                                          </label>
                            </div>
                            <div class="col">
                                    <label class="radio inline" for="gender-1">
                                            <input name="gender" id="gender-1" value="Female" type="radio">
                                            นาง
                                          </label>
                            </div>
                            <div class="col">
                                    <label class="radio inline" for="gender-1">
                                            <input name="gender" id="gender-1" value="Female" type="radio">
                                            นางสาว
                                          </label>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col">
                                <label >ชื่อ:</label>
                                <input type="text" class="form-control" placeholder="ชื่อ">
                            </div>
                            <div class="col">
                                <label >นามสกุล:</label>
                                <input type="text" class="form-control" placeholder="นามสกุล">
                            </div>
                        </div>
                         <div class="row">
                                <div class="col">
                                    <label >เลขประจำตัวประชาชน:</label>
                                    <input type="text" class="form-control" placeholder="เลขประจำตัวประชาชน">
                                </div>
                                <div class="col">
                                    <label >วัน/เดือน/ปี เกิด:</label>
                                    <input type="text" class="form-control" id="datepicker-th-2" name="date1" placeholder="วว/ดด/ปป">
                                    <script>
                                        $("#datepicker-th").datepicker({ dateFormat: 'dd/mm/yy', isBuddhist: true, defaultDate: toDay });
                                    </script>   
                                                                
                                </div>
                             </div>

                            <div class="row">
                                <div class="col">
                                        <label >เบอร์โทรศัพท์ที่ติดต่อได้สะดวก:</label>
                                        <input type="text" class="form-control" placeholder="เบอร์โทรศัพท์">
                                </div>
                                <div class="col">
                                        <label >อีเมล (ถ้ามี):</label>
                                        <input type="text" class="form-control" placeholder="ตัวอย่างเช่น example@ku.th">
                                </div>
                                   
                                </div> 

                                <div class="row">
                                <div class="col">
                                    <label >วันที่นัดหมาย:</label>
                                    <input type="text" class="form-control" id="datepicker-th-2" name="date1" placeholder="วว/ดด/ปป">
                                </div>
                                <div class="col">
                                    <label >เวลานัดหมาย:</label>
                                    <input type="text" class="form-control" placeholder="9.00-12.00">
                                
                                </div>
                                  </div>
                                <div class="row">
                                <div class="col">
                                    <label >ข้อมูลอื่นๆ:</label>
                                    
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="20" style="width: 100%"></textarea>
                                    </div>
                                  </div>
    
                                    
                        
                        
                    </form>
                    <br><br>
                   <div class="text-center">
                        <button type="button" class="btn btn-primary">บันทึก</button>
                        <button type="button" class="btn btn-danger">ยกเลิก</button>
                    </div>
                    <br>
                    
            </div>

 
        <!-- /.container-fluid -->

        

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

    

   

  </body>

</html>
