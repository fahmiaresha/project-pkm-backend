@extends('template2')
@section('title','Halaman Dashboard')

@section('konten')

@if(session('sukses_login'))
        <script>
        const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 3000,
          timerProgressBar: true,
          onOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        })

        Toast.fire({
          icon: 'success',
          title: 'Anda berhasil Login !'
        })
      </script>
@endif

<div class="container">
  <div class="form-row mb-2">
  <strong><font size="6" style="font-family:Arial, Helvetica, sans-serif;">Dashboard</font></strong> 
  </div>
  <div class="form-row">
  <div class="form-group col-md-4"></div>
  <div class="form-group col-md-6">

  <!-- <strong><font size="6" style="font-family:'Times New Roman', Times, serif;">Welcome {{Session::get('NAMA_ADMIN')}}</font></strong>  -->
  </div> 
</div>
  <div class="form-row">
    <img class="img-fluid" src="{{ asset('asset/login/images/undraw-1.png') }}" width="535px" >
    <img class="img-fluid" src="{{ asset('asset/login/images/undraw-2.png') }}" width="535px" >
    </div>

    <div class="copyright mt-1">
    <div class="form-group col-md-11">
      <center>
         <strong><font size="4" style="font-family:arial;">Welcome Back !</font><strong>
      </center>
      </div>
      <div class="form-group col-md-11" style="margin-top:-30px">
        <center>
          <font size="4" style="font-family:arial;">{{Session::get('NAMA_ADMIN')}}</font>
          </center>
      </div>
		</div>

  </div>
</div>


@endsection