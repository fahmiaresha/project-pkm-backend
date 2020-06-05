<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" type="image/png" href="{{ asset('asset/admin/img/unair.png') }}">
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <title>@yield('title')</title>

    <!-- Custom fonts for this template-->

  <link href="{{ asset('asset/admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  
  <!-- Custom styles for this template-->
  <link href="{{ asset('asset/admin/css/sb-admin-2.min.css') }}" rel="stylesheet"> 
  


  <!-- Sweet Alert-->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

 <!-- Search 2-->
 <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> -->
 <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
 
  
   <!-- Toast-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"> 
  
  <!-- ck editor -->
   <script src="{{ asset('asset/ckeditor/ckeditor.js')}}"></script>

   <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
  />
    @yield('head')
</head>

<body id="page-top">

 
  <!-- Page Wrapper -->
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/dashboard') }}">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
      
        <div class="sidebar-brand-text mx-3"> Admin </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/dashboard') }}">
        <!-- <i><img src="{{ asset('asset/login/images/dashboard.png') }}" width="16px" height="16px"></i> -->
        <!-- <i class="fas fa-fw fa-tachometer-alt"></i> -->
        <i class="fas fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <div class="sidebar-heading">
        Data Tabel
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('/bidang/index') }}">
          <!-- <i ><img src="{{ asset('asset/login/images/bidang.png') }}" width="25px" height="25px"></i> -->
          <!-- i></i>< -->
          <i class="fas fa-cube"></i>
          <span> Bidang</span>
        </a>
      </li>

     

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('/jenis_kriteria/index') }}">
          <!-- <i ><img src="{{ asset('asset/login/images/kriteria.png') }}" width="25px" height="25px"></i> -->
          <!-- i></i>< -->
          <i class="fas fa-tasks"></i>
          <span> Jenis Kriteria</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('/detail_kriteria/index') }}">
          <!-- <i ><img src="{{ asset('asset/login/images/kontak.png') }}" width="20px" height="20px"></i> -->
          <!-- i></i>< -->
          <i class="fab fa-stack-overflow"></i>
          <span> Detail Kriteria</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('/tata_cara/index') }}">
          <!-- <i ><img src="{{ asset('asset/login/images/kontak.png') }}" width="20px" height="20px"></i> -->
          <!-- i></i>< -->
          <!-- <i class="fas fa-procedures"></i> -->
          <i class="fas fa-book-reader"></i>
          <span> Tata Cara</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('/kontak/index') }}">
          <!-- <i ><img src="{{ asset('asset/login/images/contak.png') }}" width="20px" height="20px"></i> -->
          <!-- i></i>< -->
          <i class="fas fa-id-card"></i>
          <span> Kontak</span>
        </a>
      </li>
      <!-- Divider -->
    <hr class="sidebar-divider">

     
      <!-- Heading -->
      <!-- <div class="sidebar-heading">
        Table
      </div> -->

      <!-- Nav Item - Pages Collapse Menu -->
      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i><img src="{{ asset('asset/login/images/tabel.png') }}" width="16px" height="16px"></i>
          <span>Master</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Tabel</h6>
            <a class="collapse-item" href="{{ url('/customer/index') }}">Customer</a>
            <a class="collapse-item" href="{{ url('/kategori/index') }}">Category</a>
            <a class="collapse-item" href="{{ url('/product/index') }}">Product</a>
            <a class="collapse-item" href="{{ url('/user/index') }}">User</a>
          </div>
        </div>
      </li> -->
      

      <!-- Nav Item - Utilities Collapse Menu -->
     
      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
        <i><img src="{{ asset('asset/login/images/tabel.png') }}" width="16px" height="16px"></i>
          <span>Transaction</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Tabel</h6>
            <a class="collapse-item" href="{{ url('/sales/index') }}">Sales</a> -->
            <!-- <a class="collapse-item" href="{{ url('/sales_detail/index') }}">Sales Detail</a> -->
            <!-- <a class="collapse-item" href="{{ url('/sales_detail/create') }}">Point Of Sales</a>
          </div>
        </div>
      </li> -->
     

      <div class="sidebar-heading">
        Account
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
          <!-- <i><img src="{{ asset('asset/login/images/pengaturan.png') }}" width="16px" height="16px"></i> -->
          <i class="fas fa-sync-alt"></i>
          <span>Settings</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar" style="">
          <div class="bg-white py-2 collapse-inner rounded">
          <!-- <h6 class="collapse-header">Login Screens</h6> -->
          @if(\Session::has('super_admin') || \Session::has('owner') || \Session::has('admin'))
          <!-- <a class="collapse-item" href="{{ url('/register') }}">Sign Up Account</a> -->
          @endif
          <!-- <a class="collapse-item" href="{{ url('/logout') }}" data-toggle="modal" data-target="#logoutModal">Logout</a> -->
          <a class="collapse-item" onClick="tampil_logout(event)" >Logout</a> 
          <!-- <a class="collapse-item" onClick="tampil_logout(event)" >Coba</a>  -->
          <div class="collapse-divider"></div>
          </div>
        </div>
      </li>
      <!-- Logout Modal untuk login -->
  <div class="modal fade" id="logoutModallogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Logout Account</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Jika anda ke halaman " Login " akan mereset session anda </div>
        <div class="modal-footer">
        <a class="btn btn-success" href="{{ url('/logout') }}">Yes</a>
          <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
        
        </div>
      </div>
    </div>
  </div>

      
      <!-- <div class="sidebar-heading">
        About
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('/about') }}">
          <i ><img src="{{ asset('asset/login/images/kontak.png') }}" width="20px" height="20px"></i> -->
          <!-- i></i>< -->
          <!-- <span>Contact Us</span>
        </a>
      </li> -->

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
  
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->

      <!-- Main Content -->
    <!--nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class='container'>
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="/home">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="{{ url('/about') }}">About</a>
      <a class="nav-item nav-link" href="{{ url('/customer/index') }}">Customer</a>
      <a class="nav-item nav-link" href="{{ url('/kategori/index') }}">Kategori Produk</a>
    </div>
  </div>
    </div>
</nav -->
<div id="content-wrapper" class="d-flex flex-column">
<div id="content">
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"  aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
    <!-- notif lonceng -->
      <!-- <span class="badge badge-danger badge-counter"></span> 
              </a> -->
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div> 
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"  aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
              <!-- notif message -->
                <span class="badge badge-danger badge-counter"></span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Session::get('NAMA_ADMIN')}}</span>
                
                <!-- <img class="img-profile rounded-circle" src="https://cybercampus.unair.ac.id/foto_mhs/151811513020.JPG"> -->
                <!-- <i class="fas fa-users" width="70px" height=></i> -->
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-circle" role="img" width="34px" height="34px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" class="svg-inline--fa fa-user-circle fa-w-16 fa-fw fa-2x"><path fill="currentColor" d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 96c48.6 0 88 39.4 88 88s-39.4 88-88 88-88-39.4-88-88 39.4-88 88-88zm0 344c-58.7 0-111.3-26.6-146.5-68.2 18.8-35.4 55.6-59.8 98.5-59.8 2.4 0 4.8.4 7.1 1.1 13 4.2 26.6 6.9 40.9 6.9 14.3 0 28-2.7 40.9-6.9 2.3-.7 4.7-1.1 7.1-1.1 42.9 0 79.7 24.4 98.5 59.8C359.3 421.4 306.7 448 248 448z" class=""></path></svg>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <!-- <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a> -->
                <!-- <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a> -->
                <!-- <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a> -->
                <div class="dropdown-divider"></div>
                <a href="/ubahpassword" class="dropdown-item">
                <i class="fas fa-key fa-sm fa-fw mr-2 text-gray-400"></i>
                 Ubah Password
                </a>
                <a class="dropdown-item" onclick="tampil_logout();">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
               
              </div>
            </li>

          </ul>

        </nav>
  
    <h1> @yield('konten') </h1>
   
      <!-- End of Main Content -->

      <!-- Footer -->
      <!-- End of Footer -->

   
    <!-- End of Content Wrapper -->

  
  </div>
  </div>
  </div>
  
</body>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <!-- <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Logout Account</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Pilih "Logout" di bawah ini jika Anda ingin keluar.</div>
        <div class="modal-footer">
        <a class="btn btn-success" href="{{ url('/logout') }}">Logout</a>
          <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
        
        </div>
      </div>
    </div>
  </div> -->

  
  


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
    <!-- <script src="./src/bootstrap-input-spinner.js"></script> -->
    <script src="{{ asset('asset/admin/vendor/jquery/jquery.min.js') }}"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
  

  <!-- Bootstrap core JavaScript-->

  
  <script src="{{ asset('asset/admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('asset/admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset('asset/admin/js/sb-admin-2.min.js') }}"></script>

  <!-- Page level plugins -->
  <!-- <script src="{{ asset('asset/admin/vendor/chart.js/Chart.min.js') }}"></script> -->

  <!-- Page level custom scripts -->
  <!-- <script src="{{ asset('asset/admin/js/demo/chart-area-demo.js') }}"></script> -->
  <!-- <script src="{{ asset('asset/admin/js/demo/chart-pie-demo.js') }}"></script> -->
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
  <!-- <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script> -->

   <!-- toast -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script> 


   <script>
      console.log('===============================');
      console.log('Selamat Datang Di Halaman Admin PKM Universitas Airlangga 2020');
      console.log('===============================');
       $('.mydatatable').DataTable();
            function tampil_logout(event){
              // event.preventDefault();
              // var urlToRedirect = event.currentTarget.getAttribute('href'); //use currentTarget because the click may be on the nested i tag and not a tag causing the href to be empty
              // console.log(urlToRedirect); // verify if this is the right URL
              
              Swal.fire({
                  title: 'Apakah Anda Ingin Logout ?',
                  text: "Session Akan Di Reset !",
                  icon: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Logout'
                  
                }).then((result) => {
                  if (result.value) {
                    Swal.fire(
                      'Success!',
                      'Anda Berhasil Logout !',
                      'success'
                    
                    )
                    tampil_link();
                  }
                })
            }
            function tampil_link(){
              window.location.href = "{{URL::to('/logout')}}"
            }
  </script>
      @yield('tambahscript')
    </html>
 

  

  

 


    
